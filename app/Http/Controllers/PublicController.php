<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\like;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()->latest()->simplePaginate();
        return view('welcome', compact('posts'));
    }

    public function post(Post $post){
        return view('post', compact('post'));
    }

    public function comment(Post $post, Request $request){
        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->user()->associate(auth()->user());
        $comment->post()->associate($post);
        $comment->save();
        return redirect()->back();
    }

    public function like(Post $post){
        $like = $post->likes()->where('user_id', auth()->user()->id)->first();
        if($like){
            $like->delete();
        } else {
            $like = new like();
            $like->user()->associate(auth()->user());
            $like->post()->associate($post);
            $like->save();
        }
        return redirect()->back();
    }
}
