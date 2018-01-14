<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Session\Store;

class PostController extends Controller {

    //

    public function indexAction(Store $session) {
        $PostData = Post::find(1);

       $PostData['title'] = "changed title";
       $PostData->save();
       $postArr = $PostData::where('title','test tile')->toSql();
       print_r($postArr);
       
        exit;
        return view("post.view", ["posts" => $postArr]);
        //return redirect()->route('admin.create')->with('info', "HELLO");
    }

}
