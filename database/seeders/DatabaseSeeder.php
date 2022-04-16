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
        // \App\Models\User::factory(10)->create();

        // USER
        User::create([
            'name' => 'Muhammad Khairul Anwar',
            'email' => 'khairul240102@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // CATEGORY
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming',
        ]);

        // POST
        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex excepturi quidem animi sunt rem quis, inventore dolorem explicabo, culpa sequi rerum maiores. Architecto, explicabo veritatis enim a harum consectetur ut accusantium hic quis amet, modi cupiditate quasi nihil! Delectus doloremque beatae totam harum quibusdam vitae voluptas, a expedita ratione rerum sit. Eaque voluptatibus dicta numquam quia cupiditate, rem et, esse ipsa nihil similique alias quis aliquam labore, dolorum temporibus neque facere quo minima eius. Similique rerum, dolores commodi recusandae, necessitatibus saepe fuga tempora iste voluptatem aspernatur soluta nesciunt perferendis mollitia nulla blanditiis, quibusdam fugiat eius sed esse error doloribus!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex excepturi quidem animi sunt rem quis, inventore dolorem explicabo, culpa sequi rerum maiores. Architecto, explicabo veritatis enim a harum consectetur ut accusantium hic quis amet, modi cupiditate quasi nihil! Delectus doloremque beatae totam harum quibusdam vitae voluptas, a expedita ratione rerum sit. Eaque voluptatibus dicta numquam quia cupiditate, rem et, esse ipsa nihil similique alias quis aliquam labore, dolorum temporibus neque facere quo minima eius. Similique rerum, dolores commodi recusandae, necessitatibus saepe fuga tempora iste voluptatem aspernatur soluta nesciunt perferendis mollitia nulla blanditiis, quibusdam fugiat eius sed esse error doloribus!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ex excepturi quidem animi sunt rem quis, inventore dolorem explicabo, culpa sequi rerum maiores. Architecto, explicabo veritatis enim a harum consectetur ut accusantium hic quis amet, modi cupiditate quasi nihil! Delectus doloremque beatae totam harum quibusdam vitae voluptas, a expedita ratione rerum sit. Eaque voluptatibus dicta numquam quia cupiditate, rem et, esse ipsa nihil similique alias quis aliquam labore, dolorum temporibus neque facere quo minima eius. Similique rerum, dolores commodi recusandae, necessitatibus saepe fuga tempora iste voluptatem aspernatur soluta nesciunt perferendis mollitia nulla blanditiis, quibusdam fugiat eius sed esse error doloribus!',
            'category_id' => 3,
            'user_id' => 1
        ]);
    }
}
