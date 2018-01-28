<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;
use Illuminate\Session\Store;
use Illuminate\Validation\Factory;

class PostController extends Controller {

    //
    public function indexAction(Store $session) {
        
        $postArr = Post::all();
        return view("post.view", ["posts" => $postArr]);
        //return redirect()->route('admin.create')->with('info', "HELLO");
    }
    public function createPost(){
        return view('post.create');
    }
    public function updatePost($id){
        $postObj = Post::find($id);
        return view('post.edit', ['post'=> $postObj]);
    }
    public function editPost(Request $request,$id, Factory  $validator){
        $validation = $validator->make($request->all(),[
            'title' => 'required',
            'description' => 'required'
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        $postObj = Post::find($id);
        $postObj->title = $request->input('title');
        $postObj->description = $request->input('description');
        $postObj->save();
        return redirect()->back()->with("success", "You have Successfully Edited the Post");
    }
    public function deletePost(){
        
    }
    public function registerPost(Request $request,Factory  $validator){
        $validation = $validator->make($request->all(),[
            'title' => 'required',
            'description' => 'required'
        ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        $postObj = new Post();
        $postObj->title = $request->input('title');
        $postObj->description = $request->input('description');
        $postObj->save();
        return redirect()->back()->with("success", "You have Successfully Registered");
    }
    public function registerLike($id){
        $postObj = Post::find($id);
        $likeObj = $postObj->likes;
        $postObj->likes()->update(['title'=> "changeto"]);
        return redirect()->back();
    }
    

}
