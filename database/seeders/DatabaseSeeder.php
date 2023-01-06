<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Resep;
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
        User::create([
            'name' => 'Alvina Sibuea',
            'username' => 'alvin',
            'email' => 'alvin1@gmail.com',
            'password' => bcrypt('12345')
        ]);

       Resep::create([
            'name' => 'Judul Pertama',
            'deskripsi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, expedita.",
            'slug' => 'judul-pertama',
            'author' => 'Alvin',
            'category_id' => 1,
            'user_id' => 1
        ]);

       Resep::create([
            'name' => 'Judul Kedua',
            'deskripsi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, expedita.",
            'slug' => 'judul-kedua',
            'author' => 'Alvin',
            'category_id' => 1,
            'user_id' => 1
        ]);

       Resep::create([
            'name' => 'Judul Ketiga',
            'deskripsi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, expedita.",
            'slug' => 'judul-ketiga',
            'author' => 'Alvin',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
