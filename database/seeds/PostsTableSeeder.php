<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(\App\Post::class, 5)->create([
          'topic_id' => \App\Topic::first()->id,
        ]);
    }
}
