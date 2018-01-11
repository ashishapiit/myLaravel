<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Session\Store;

class PostController extends Controller
{
    //
    
   public function indexAction(Store $session){
       $PostData = new Post();
       $postArr = $PostData->getPost($session);
       
       return view("post.view", ["posts" => $postArr]);
       
   }
   
}
