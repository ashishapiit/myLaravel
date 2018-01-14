<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * Description of Post
 *
 * @author Ashish
 */
class Post extends Model{
    protected $table = "post";
    protected $fillable =['title', 'description'];
//    
    //put your code here
    public function getPost($session){
        if(!$session->has("post")){
            $this->setPost($session);
        }
        $this->setPost($session);
        return $session->get("post");
    }
    private function setPost($session){
        $postArr = [
            [
                "title" => "this is my first post title", 
                "description" => "First description of my post"],
            [
                "title" => "this is my second post title", 
                "description" => "second description of my post"]
            ];
        $session->put("post", $postArr);
    }
}
