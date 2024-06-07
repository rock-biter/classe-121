<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = ['css', 'js', 'vue', 'sql', 'php', 'laravel'];
        // Se il tag seeder lo mettiamo dopo al PostSeeder
        // $posts_id_coll = Post::all()->pluck('id'); // [1,2,3,...] id dei posts

        foreach ($tags as $tag_name) {
            $new_tag = new Tag();
            $new_tag->name = $tag_name;
            $new_tag->slug = Str::slug($tag_name);

            $new_tag->save();

            // $new_tag->posts()->attach($posts_id_coll->random(10)->all());
        }
    }
}
