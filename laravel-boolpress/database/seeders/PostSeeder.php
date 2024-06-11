<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //

        $categories = Category::all(); // Collection di oggetti Category
        // Array di id
        $category_ids = $categories->pluck('id')->all(); // array di id [1,2,3,4,5]
        // $ids = [];

        $tag_ids = Tag::all()->pluck('id')->all(); // [1,2,3,4,5,6]

        // foreach ($categories as $category) {
        //     $ids[] = $category->id;
        // }
        $user_ids = User::all()->pluck('id')->all(); // [1]

        for ($i = 0; $i < 20; $i++) {

            $post = new Post();

            $title = $faker->sentence(6);

            $post->title = $title;
            $post->slug = Str::slug($title);
            $post->content = $faker->optional()->text(500);
            $post->category_id = $faker->optional()->randomElement($category_ids);
            $post->user_id = $faker->randomElement($user_ids);

            // fino a qui il post non ha ancora un id
            $post->save();

            // prendendo un numero random di id di tags
            $random_tag_ids = $faker->randomElements($tag_ids, null);
            // qui è stato salvato e ha un id
            $post->tags()->attach($random_tag_ids);

            $random_user_ids = $faker->randomElements($user_ids, null); // [3,6,9]
            $post->users()->attach($random_user_ids);
        }
    }
}
