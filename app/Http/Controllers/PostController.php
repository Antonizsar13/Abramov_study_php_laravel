<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(Request $request, $order = 'date', $dir = 'desc')
    {
        $request->validate([
            'order' => 'nullable|in:date,title,id',
            'dir' => 'nullable|in:asc,desc'
        ]);

        $posts = Post::orderBy($order, $dir)->get();

        return view('posts.get_all', [
            'posts' => $posts,
        ]);
    }

    public function getOne($id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }


        return view('posts.get_one', [
            'post' => $post,
        ]);
    }

    public function createPost(Request $request)
    {
        if ($request->has('submit')) {

            Post::create($request->all());

            return redirect()->action([PostController::class, 'getAll']);
        }

        return view('posts.create');
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }

        if ($request->has('submit')) {
            $post->fill($request->all());
            $post->save();

            return redirect()->action([PostController::class, 'getAll']);
        }

        return view('posts.edit', ['post' => $post]);
    }

    public function delPost($id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        $post->delete();

        return redirect()->action([PostController::class, 'getAll']);
    }




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
