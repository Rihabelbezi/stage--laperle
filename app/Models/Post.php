<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts_image;
use Illuminate\Support\Facades\Storage;
class Post extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public function images()
    {
        return $this->hasMany(Posts_image::class,'id_post','id');
    }
    public function getValidImageAttribute()
    {
        // Default image path
        $defaultImage = 'storage/full/default.jpg';

        // Check if the post has any valid images
        foreach ($this->images as $image) {
            $imagePath = 'public/full/' . $image->image;

            if (Storage::exists($imagePath)) {
                return Storage::url($imagePath);
            }
        }

        // Return the default image if no valid image is found
        return $defaultImage;
    }
}
