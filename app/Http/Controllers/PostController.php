<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Image;
use App\Models\Post;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create() {
        return view('posts.create');
    }
    public function store(StorePostRequest $request) {
        $rutaImagen = Storage::disk('public')->putFile('posts' , $request->file('file'));
        // dd($request->file);
        $request['user_id'] = 2;
        $post = Post::create($request->all());
        if ($rutaImagen) {
            Image::create([
                'path' => $rutaImagen,
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
        }
        dd($post);
        // dd($request->all(), $validate);
    }
}
