<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Posts_image extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['id_post', 'image'];
    public function post()
    {
        return $this->belongsTo(Post::class,'id_post');
    }
}

