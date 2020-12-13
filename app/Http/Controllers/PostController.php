<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::latest()->with(['user','likes'])->paginate(2);
        //$posts=Post::get();
        //return all the records in posts database

        return view ('posts.index',[
            'posts'=>$posts,
        ]);
    }
    public function show(Post $post){
        return view('posts.show',[
            'post'=>$post,
        ]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'body'=>'required',
        ]);
        // Post::create([
        //     'user_id'=>auth()->id,
        //     'body'=>$request->body
        // ]);
        $request->user()->posts()->create($request->only('body'));
        // $request->user()->posts()->create([
        //     'body'=>$request->body
        // ]);
        return back();
    }
    public function destroy(Post $post){
        $this->autorize('delete',$post);
        $post->delete();
        return back();
    }
}
