<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    private $validation = [
        'image'=>'required|string',
        'title'=>'required|string|max:90',
        'description'=>'required|string|min:1|max:5000',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::all();
        return view("posts.index", compact("allPosts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate($this->validation);
        $post = new Post;
        $post->fill($data);
        $savePost = $post->save();
        if ($savePost) {
            $post = Post::orderBy('id','desc')->first();
            //Se chiamo show devo passare l'elemento in compact
            return redirect()->route('posts.show', compact('post'));
        } else {
            dd('error save');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if (empty($post)) {
            abort('404');
        }
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if (empty($post)) {
            abort('404');
         }
         return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (empty($post)) {
            abort('404');
         }
        $data = $request->all();
        $request->validate($this->validation);
        $updatePost = $post->update($data);
        if ($updatePost) {
            $post = Post::find($id);
            //Se chiamo show devo passare l'elemento in compact
            return redirect()->route('posts.show', compact('post'));
        } else {
            dd('error update');
        }
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
        return redirect()->route('posts.index');
        
    }
}
