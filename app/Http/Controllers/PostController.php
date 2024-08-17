<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Posts_image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class PostController extends Controller{
    public function showhome1()
    {
        // Fetch posts in random order with their associated images
        $Posts = Post::with('images')->inRandomOrder()->paginate(9);

        // Filter images that exist
        foreach ($Posts as $post) {
            $post->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($post->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $post->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }

        // Return the view with the random posts
        return view("index", ['posts' => $Posts]);
    }

    function modal($id)
     {
        $post = Post::findOrFail($id);
        $images = Posts_image::where('id_post', $id)->get('image');

        return response()->json([
            'post' => $post,
            'images' => $images
        ]);
}

    public function villasVente()
    {
        $villas = Post::where('id_category', 1)->where('id_type', 1)->paginate(12);
        foreach ($villas as $villa) {
            $villa->validImage = 'default.jpg'; // Default image path

            foreach ($villa->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $villa->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('villas-vente', compact('villas'));
    }
    public function villas_LA()
    {
        $villas = Post::where('id_category', 1)->where('id_type', 2)->paginate(12);
        foreach ($villas as $villa) {
            $villa->validImage = 'public/default.jpg'; // Default image path

            foreach ($villa->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $villa->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('villas-LA', compact('villas'));
    }
    public function villas_LS()
    {
        $villas = Post::where('id_category', 1)->where('id_type', 3)->paginate(12);
        foreach ($villas as $villa) {
            $villa->validImage = 'default.jpg'; // Default image path

            foreach ($villa->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $villa->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('villas-LS', compact('villas'));
    }
    public function appartement_vente()
    {
        $apps = Post::where('id_category', 3)->where('id_type', 1)->paginate(12);
        foreach ($apps as $app) {
            $app->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($app->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $app->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('appartement-vente', compact('apps'));
    }
    public function appartement_LA()
    {
        $apps = Post::where('id_category', 3)->where('id_type', 2)->paginate(12);
        foreach ($apps as $app) {
            $app->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($app->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $app->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('appartement-LA', compact('apps'));
    }
    public function appartement_LS()
    {
        $apps = Post::where('id_category', 3)->where('id_type', 3)->paginate(12);
        foreach ($apps as $app) {
            $app->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($app->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $app->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('appartement-LS', compact('apps'));
    }
    public function terrains()
    {
        $ters = Post::where('id_category',6 )->where('id_type', 1)->paginate(12);
        foreach ($ters as $ter) {
            $ter->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($ter->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $ter->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('terrains', compact('ters'));
    }
    public function demeure_vente()
    {
        $demeures = Post::where('id_category', 8)->where('id_type', 1)->paginate(12);
        foreach ($demeures as $demeure) {
            $demeure->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($demeure->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $demeure->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('dcharms-v', compact('demeures'));
    }
    public function demeure_LA()
    {
        $demeures = Post::where('id_category', 8)->where('id_type', 2)->paginate(12);
        foreach ($demeures as $demeure) {
            $demeure->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($demeure->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $demeure->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('dcharms-LA', compact('demeures'));
    }
    public function demeure_LS()
    {
        $demeures = Post::where('id_category', 8)->where('id_type', 3)->paginate(12);
        foreach ($demeures as $demeure) {
            $demeure->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($demeure->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $demeure->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('dcharms-LS', compact('demeures'));
    }
    public function comerc_vente()
    {
        $comercs = Post::where('id_category', 7)->where('id_type', 1)->paginate(12);
        foreach ($comercs as $comerc) {
            $comerc->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($comerc->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $comerc->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('comerc-v', compact('comercs'));
    }
    public function comerc_LA()
    {
        $comercs = Post::where('id_category', 7)->where('id_type', 2)->paginate(12);
        foreach ($comercs as $comerc) {
            $comerc->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($comerc->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $comerc->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('comerc-LA', compact('comercs'));
    }
    public function comerc_LS()
    {
        $comercs = Post::where('id_category', 7)->where('id_type', 3)->paginate(12);
        foreach ($comercs as $comerc) {
            $comerc->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($comerc->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $comerc->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('comerc-LS', compact('comercs'));
    }
    public function residence_vente()
    {
        $res = Post::where('id_category', 4)->where('id_type', 1)->paginate(12);
        foreach ($res as $re) {
            $re->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($re->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $re->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('residence-v', compact('res'));
    }
    public function residence_LA()
    {
        $res = Post::where('id_category', 4)->where('id_type', 2)->paginate(12);
        foreach ($res as $re) {
            $re->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($re->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $re->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('residence-LA', compact('res'));
    }
    public function residence_LS()
    {
        $res = Post::where('id_category', 4)->where('id_type', 3)->paginate(12);
        foreach ($res as $re) {
            $re->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($re->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $re->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('residence-LS', compact('res'));
    }
    public function duplex_vente()
    {
        $dups = Post::where('id_category', 5)->where('id_type', 1)->paginate(12);
        foreach ($dups as $dup) {
            $dup->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($dup->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $dup->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('duplex-v', compact('dups'));
    }
    public function duplex_LA()
    {
        $dups = Post::where('id_category', 5)->where('id_type', 2)->paginate(12);
        foreach ($dups as $dup) {
            $dup->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($dup->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $dup->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('duplex-LA', compact('dups'));
    }
    public function duplex_LS()
    {
        $dups = Post::where('id_category', 5)->where('id_type', 3)->paginate(12);
        foreach ($dups as $dup) {
            $dup->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($dup->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $dup->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('duplex-LS', compact('dups'));
    }
    public function Maisonette_vente()
    {
        $mais = Post::where('id_category', 2)->where('id_type', 1)->paginate(12);
        foreach ($mais as $mai) {
            $mai->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($mai->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $mai->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('maisonnette-v', compact('mais'));
    }
    public function Maisonette_LA()
    {
        $mais = Post::where('id_category', 2)->where('id_type', 2)->paginate(12);
        foreach ($mais as $mai) {
            $mai->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($mai->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $mai->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('maisonnette-LA', compact('mais'));
    }
    public function Maisonette_LS()
    {
        $mais = Post::where('id_category', 2)->where('id_type', 3)->paginate(12);
        foreach ($mais as $mai) {
            $mai->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($mai->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $mai->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }
        return view('maisonnette-LS', compact('mais'));
    }
    public function search(Request $request)
    {
        // Retrieve search criteria
        $categorie = $request->input('categorie');
        $type = $request->input('type');
        $chambres = $request->input('chambres');
        $pieces = $request->input('pieces');
        $price = $request->input('price');

        // Build query
        $query = Post::query();

        if ($categorie) {
            $query->where('id_category', $categorie);
        }

        if ($type) {
            $query->where('id_type', $type);
        }

        if ($chambres) {
            $query->where('bedrooms', $chambres);
        }

        if ($pieces) {
            $query->where('nbr_pieces', $pieces);
        }

        if ($price) {
            $query->where('prix', '<=', $price);
        }

        // Execute query and get results
        $posts = $query->paginate(10)->appends($request->except('page'));
        foreach ($posts as $post) {
            $post->validImage = 'storage/full/default.jpg'; // Default image path

            foreach ($post->images as $image) {
                $imagePath = 'public/full/' . $image->image;

                if (Storage::exists($imagePath)) {
                    $post->validImage = Storage::url($imagePath);
                    break; // Only show the first valid image
                }
            }
        }

        // Pass the posts to the view
        return view('search', compact('posts'));
    }
    public function showhome()
    {
        // Fetch all posts with their associated images
        $allPosts = Post::with('images')->get();

        $postsWithImages = new Collection();
        $postsWithoutImages = new Collection();

        foreach ($allPosts as $post) {
            // Check if the post has a valid image
            if ($post->validImage !== 'storage/full/default.jpg') {
                $postsWithImages->push($post);
            } else {
                $postsWithoutImages->push($post);
            }
        }

        // Combine the posts, prioritizing those with images
        $combinedPosts = $postsWithImages->merge($postsWithoutImages);

        // Randomize the order
        $shuffledPosts = $combinedPosts->shuffle();

        // Paginate the shuffled collection
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 9;
        $currentItems = $shuffledPosts->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedPosts = new LengthAwarePaginator($currentItems, $shuffledPosts->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        // Return the view with the paginated posts
        return view('index', ['posts' => $paginatedPosts]);
    }

}
