<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest; // useする

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Post $post, PostRequest $request) // 引数をRequest->PostRequestにする
    //データベースへ保存
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function edit(Post $post)
{
    return view('posts/edit')->with(['post' => $post]);
}
//ブログ投稿編集実行用のコントローラ実装
public function update(PostRequest $request, Post $post)
{
    $input_post = $request['post'];
    $post->fill($input_post)->save();

    return redirect('/posts/' . $post->id);
}
}