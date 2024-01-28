<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "1";
    }

    public function show($postId)
    {
        return "13";
    }

    public function store(Request $request)
    {
        return "store";
    }

    public function update(Request $request, $postId)
    {
        return "update";
    }

    public function destroy(Post $post)
    {
        return "delete";
    }
}
