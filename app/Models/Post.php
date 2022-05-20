<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
           "title" => "Post Pertama",
           "slug" => "post-pertama",
           "author" => "shiroe",
           "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sint molestiae facere animi ab? 
           Impedit maxime repellendus illum totam corrupti enim magni maiores libero et quae perspiciatis,
            blanditiis voluptatem tenetur autem. Deleniti, esse omnis architecto eius sequi, dicta in ratione 
            obcaecati error rem qui reiciendis deserunt accusantium consequatur at nesciunt tempora adipisci. 
            Adipisci odio totam, optio nobis consequatur eius ipsa, excepturi fugiat facilis velit sapiente 
            molestias assumenda. Facere delectus vero deserunt ex architecto, id tempore, culpa dignissimos 
            voluptatem magnam nihil."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Joyboy",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sint molestiae facere animi ab? 
            Impedit maxime repellendus illum totam corrupti enim magni maiores libero et quae perspiciatis,
            blanditiis voluptatem tenetur autem. Deleniti, esse omnis architecto eius sequi, dicta in ratione 
            obcaecati error rem qui reiciendis deserunt accusantium consequatur at nesciunt tempora adipisci. 
            Adipisci odio totam, optio nobis consequatur eius ipsa, excepturi fugiat facilis velit sapiente 
            molestias assumenda. Facere delectus vero deserunt ex architecto, id tempore, culpa dignissimos 
            voluptatem magnam nihil."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts    );
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts-> where("slug", $slug)->first();
    }
}
