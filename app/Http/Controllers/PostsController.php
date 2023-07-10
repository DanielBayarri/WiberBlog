<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::latest()->get();
        return view('home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'tag' => 'required',
            'image' => 'required|image|max:2048'
        ]);

        $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move('images/', $imageName);

        $postData = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'tag' => $request->input('tag'),
            'image' => 'images/' . $imageName
        ];

        Posts::create($postData);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $post = Posts::find($id);

        return view('posts.detail', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $post = Posts::find($id);

        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {

        $post = Posts::find($id);

        $imagePath = $post->image;
        $post->delete();
      
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        
        return redirect()->route('home');
    }
}
