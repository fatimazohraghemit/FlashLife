<?php

namespace App\Http\Controllers;

use App\Post;
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
        $posts = Post::All();
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        return view('post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->validationRules(), $this->customMessages());
        $post = Post::create($validatedData);
        
        return redirect()->route('post.show', [$post])
                        ->with('successNewPost', 'Post Posted Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $this->validate($request, $this->validationRules(), $this->customMessages());
        $post->update($validatedData);
        
        return redirect()->route('post.show', [$post])
                        ->with('successUpdatePost', 'Post updated seccessfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('successDelete','Post deleted successfully !');
    }

    private function validationRules()
    {
        return [
            'Post_content' => 'required|max:100|min:3',
            
        ];
    }

    private function customMessages()
    {
        return [
            'post_content.required' => 'Post content is required',
            'post_content.max' => 'Post content should not have more then 100 characters',
            'post_content.min' => 'Post content should have at least 3 characters ',
            
            
        ];
    }
}
