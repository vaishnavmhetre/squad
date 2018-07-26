<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = \App\Post::first() == null ? factory(\App\Post::class, 10)->create() : \App\Post::all();

//        dd($posts);

        foreach ($posts as $post){
            factory(\App\Comment::class, 5)->create(['post_id' => $post->id]);
        }
    }
}
