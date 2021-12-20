<?php

namespace App\Models;


class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam nobis nesciunt ducimus praesentium beatae incidunt vero harum enim quisquam. Delectus quasi quisquam ab blanditiis sed recusandae exercitationem dicta asperiores culpa!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae itaque dignissimos aperiam eaque quos quaerat mollitia. Dolores perspiciatis tempore inventore officia ipsa nihil iure illum reprehenderit, ut doloribus nulla facere possimus facilis voluptatibus fuga nostrum, blanditiis hic magni molestiae velit consectetur modi dolorem sequi. Quidem totam illum laboriosam deleniti sint dignissimos est eaque officiis rem cum officia accusamus quod voluptate, soluta perferendis esse laborum expedita qui possimus. Asperiores sunt ipsa doloribus quibusdam optio enim explicabo dolorem similique officia beatae quasi perferendis eaque ratione quaerat ullam modi, omnis recusandae quo pariatur, laborum tempore repellendus? Unde suscipit, distinctio a amet explicabo quibusdam?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts;
        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
