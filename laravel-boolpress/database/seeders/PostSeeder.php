<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        $ids = $categories->pluck('id')->all(); // array di id [1,2,3,4,5]
        // $ids = [];

        // foreach ($categories as $category) {
        //     $ids[] = $category->id;
        // }

        for ($i = 0; $i < 20; $i++) {

            $post = new Post();

            $title = $faker->sentence(6);

            $post->title = $title;
            $post->slug = Str::slug($title);
            $post->content = $faker->optional()->text(500);
            $post->category_id = $faker->optional()->randomElement($ids);

            $post->save();
        }
    }
}
