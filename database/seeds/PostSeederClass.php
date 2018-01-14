<?php

use Illuminate\Database\Seeder;

class PostSeederClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $myObj = new \App\Post(
                ['title'=>"Default Title3",
                    'Description'=>"Default Description3"],
                 ['title'=>"Default Title4",
                    'Description'=>"Default Description4"]
                );
    
        $myObj->save();

    }
}
