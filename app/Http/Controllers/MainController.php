<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function Index(Request $request)
    {
//        $cat = Category::query()->get();
//        dd($cat);
        //$posts = Post::query()->with('Category')->get();
        //dd($posts);
        //$category = $posts[0]->Category;
        //dd($category);

        $posts = Post::query()->with("Tags")->get();
        foreach($posts[0]->Tags as $tag) {
            echo $tag->name . '<br/>';
        }
        dd($posts);
        return 1;
    }
}
