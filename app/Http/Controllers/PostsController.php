<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;



class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *--
     * @return \Illuminate\Http\Response
     */
    /*  public function index()
    {
        return view('blog.index')
            ->with('posts', Post::latest()->get());
    } */
    public function index()
    {
        return view('blog.index')
            ->with('posts', Post::latest()->get());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/blog')
            ->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        return view('blog.show')
            ->with('post', Post::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        return view('blog.edit')
            ->with('post', Post::where('id', $id)->first());
        /* $post = Post::find($id);
        return view('blog.edit', compact('post')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post  $post, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Post::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'user_id' => auth()->user()->id

            ]);

        return redirect('/blog')
            ->with('message', 'Your post has been updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        $post = Post::where('id', $id);

        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted!');
    }
}
