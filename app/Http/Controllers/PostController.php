<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $posts = Post::all();
        return view('layouts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $posts = Post::all();
      $categories = Category::all();
      return view('layouts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
     'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
      $post = new Post;
      $data = $request->all();
      $post->category_id = $data['category_id'];
      $post->title = $data['title'];
      $post->description = $data['description'];
      if ($request->hasFile('cover')) {
        $image = $request->file('cover');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/storage');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $post->cover = $name;
      }
      $post->save();
      return redirect()->route('posts.index')
                      ->with('success','Prodotto creato con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('layouts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      $categories = Category::all();
      return view('layouts.edit', compact('categories', 'post'));

    $post->save()->with('message', 'Articolo modificato con successo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $post = Post::find($id);
      $data = $request->all();
      $post->update($data);
      return redirect()->route('posts.index');

        return redirect()->route('products.index')
                        ->with('success','Prodotto creato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect()->route('posts.index');
    }

}
