<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
extends Model
{
    use HasFactory;
    private static $resep_post = [
        [
            "nama" => "Baso Cristoy",
            "slug" => "baso-crispy",
            "oleh" => "Adel",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum natus incidunt, nihil sapiente distinctio qui! Autem soluta in quae eligendi tempora qui quos officia possimus temporibus eius fugit culpa nisi blanditiis magni, quia, illo doloremque? Suscipit quasi repudiandae praesentium quidem, ipsam cumque possimus, asperiores, eligendi magni recusandae soluta iure sunt aut corrupti quae doloremque expedita commodi? Vero ducimus, necessitatibus fugiat aliquid aperiam, nobis sint, tenetur cum nihil quo eligendi voluptatum magni amet? Illo facere corrupti dignissimos necessitatibus velit maxime numquam optio."
            
        ],
        [
            "nama" => "Nasi Gila",
            "slug" => "nasi-goreng",
            "oleh" => "MasBoy",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum natus incidunt, nihil sapiente distinctio qui! Autem soluta in quae eligendi tempora qui quos officia possimus temporibus eius fugit culpa nisi blanditiis magni, quia, illo doloremque? Suscipit quasi repudiandae praesentium quidem, ipsam cumque possimus, asperiores, eligendi magni recusandae soluta iure sunt aut corrupti quae doloremque expedita commodi? Vero ducimus, necessitatibus fugiat aliquid aperiam, nobis sint, tenetur cum nihil quo eligendi voluptatum magni amet? Illo facere corrupti dignissimos necessitatibus velit maxime numquam optio."
            
        ]
    ];

    public static function all(){
        return collect(self::$resep_post);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $tampil) {
        //     if($tampil["slug"] == $slug){
        //         $post = $tampil;
        //     }
        // }
        return $posts -> firstWhere('slug', $slug);
    }

}
