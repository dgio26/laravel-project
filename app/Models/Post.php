<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Decya Giovanni',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, doloremque praesentium. Dicta eaque nihil facere natus id ad delectus. Iusto exercitationem voluptatem officiis inventore a tempora nesciunt molestiae optio placeat.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Decya Giovanni',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quia facilis, illo optio, cumque dignissimos tempore vero deleniti doloremque commodi asperiores, sapiente omnis quasi ducimus sunt fugit reprehenderit molestias magnam.'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}