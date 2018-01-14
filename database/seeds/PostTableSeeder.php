<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = new \App\Post();
        $post->title = "Sampe Title";
        $post->description = "Sample Title";
        $post->save();
    }
}
