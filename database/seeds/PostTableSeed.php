<?php

use Illuminate\Database\Seeder;

class PostTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post();
        $post->title = "Sampe Title";
        $post->description = "Sample Title";
        $post->save();
    }
}
