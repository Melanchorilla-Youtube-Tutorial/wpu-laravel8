<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        User::create([
            'name' => 'Dicky Kamaludin Bashar',
            'username' => 'lildicky',
            'email' => 'dicky@email.com',
            'password' => bcrypt('123456')
        ]);

        // User::create([
        //     'name' => 'Doddy Pratama',
        //     'email' => 'doddy@email.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus magnam deserunt voluptate impedit aut ratione eveniet illo voluptates, ab assumenda, quidem, dolores incidunt. Soluta fuga explicabo dolores officiis ut necessitatibus magnam reiciendis laborum dolore, aliquam vitae est? Neque odio aspernatur earum omnis veritatis architecto delectus cum enim in a. Sed magni velit porro eaque voluptates odio, molestias et itaque atque doloremque nostrum laudantium consequatur voluptate illo adipisci quod blanditiis veniam, rerum ducimus quia. Cupiditate corrupti unde explicabo dolorum illum alias optio fugit ea, dignissimos facere consequuntur iste aspernatur. Alias temporibus iste iure neque id officiis laudantium atque minus in labore.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus magnam deserunt voluptate impedit aut ratione eveniet illo voluptates, ab assumenda, quidem, dolores incidunt. Soluta fuga explicabo dolores officiis ut necessitatibus magnam reiciendis laborum dolore, aliquam vitae est? Neque odio aspernatur earum omnis veritatis architecto delectus cum enim in a. Sed magni velit porro eaque voluptates odio, molestias et itaque atque doloremque nostrum laudantium consequatur voluptate illo adipisci quod blanditiis veniam, rerum ducimus quia. Cupiditate corrupti unde explicabo dolorum illum alias optio fugit ea, dignissimos facere consequuntur iste aspernatur. Alias temporibus iste iure neque id officiis laudantium atque minus in labore.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus magnam deserunt voluptate impedit aut ratione eveniet illo voluptates, ab assumenda, quidem, dolores incidunt. Soluta fuga explicabo dolores officiis ut necessitatibus magnam reiciendis laborum dolore, aliquam vitae est? Neque odio aspernatur earum omnis veritatis architecto delectus cum enim in a. Sed magni velit porro eaque voluptates odio, molestias et itaque atque doloremque nostrum laudantium consequatur voluptate illo adipisci quod blanditiis veniam, rerum ducimus quia. Cupiditate corrupti unde explicabo dolorum illum alias optio fugit ea, dignissimos facere consequuntur iste aspernatur. Alias temporibus iste iure neque id officiis laudantium atque minus in labore.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus magnam deserunt voluptate impedit aut ratione eveniet illo voluptates, ab assumenda, quidem, dolores incidunt. Soluta fuga explicabo dolores officiis ut necessitatibus magnam reiciendis laborum dolore, aliquam vitae est? Neque odio aspernatur earum omnis veritatis architecto delectus cum enim in a. Sed magni velit porro eaque voluptates odio, molestias et itaque atque doloremque nostrum laudantium consequatur voluptate illo adipisci quod blanditiis veniam, rerum ducimus quia. Cupiditate corrupti unde explicabo dolorum illum alias optio fugit ea, dignissimos facere consequuntur iste aspernatur. Alias temporibus iste iure neque id officiis laudantium atque minus in labore.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
