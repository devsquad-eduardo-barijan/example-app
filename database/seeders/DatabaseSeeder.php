<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'user_id'     => $user->id,
            'category_id' => $family->id,
            'title'       => 'My Family Post',
            'slug'        => 'my-family-post',
            'excerpt'     => '<p>Lorem ipsum dolar sit amet.</p>',
            'body'        => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam vitae voluptatem quas maiores incidunt, consequuntur enim, ullam dolor officia explicabo fuga voluptatibus quidem cumque. Quaerat eum facilis labore doloribus magni.</p>',
        ]);

        Post::create([
            'user_id'     => $user->id,
            'category_id' => $work->id,
            'title'       => 'My Work Post',
            'slug'        => 'my-work-post',
            'excerpt'     => '<p>Lorem ipsum dolar sit amet.</p>',
            'body'        => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam vitae voluptatem quas maiores incidunt, consequuntur enim, ullam dolor officia explicabo fuga voluptatibus quidem cumque. Quaerat eum facilis labore doloribus magni.</p>',
        ]);
    }
}
