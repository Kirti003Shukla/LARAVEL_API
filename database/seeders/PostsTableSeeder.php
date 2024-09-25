<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::create([
            'title' => 'Sample Post 1',
            'slug' => 'sample-post-1',
            'body' => 'This is the body of Sample Post 1'
        ]);

        Post::create([
            'title' => 'Sample Post 2',
            'slug' => 'sample-post-2',
            'body' => 'This is the body of Sample Post 2'
        ]);
    }
}
