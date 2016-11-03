<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    
    public function getIndex() {
        $posts = Post::paginate(8);
        $categories = Category::all(); 
        return view('blog.index')->withPosts($posts)->withCategories($categories);
    }

    public function getSingle($slug) {
        // fetch from the DB based on slug
        $post = Post::where('slug', '=', $slug)->first();
        $categories = Category::all(); 
        // return the view and pass in the post object
        return view('blog.single')->withPost($post)->withCategories($categories);
    }

    public function allergies()
    {
        $posts = Post::where('category_id', '=', '1')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }

    public function cardio()
    {
        $posts = Post::where('category_id', '=', '2')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }

    public function childhealth()
    {
        $posts = Post::where('category_id', '=', '3')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function digestive()
    {
        $posts = Post::where('category_id', '=', '4')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function general()
    {
        $posts = Post::where('category_id', '=', '5')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function immune()
    {
        $posts = Post::where('category_id', '=', '6')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function mens()
    {
        $posts = Post::where('category_id', '=', '7')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function musculoskeletal()
    {
        $posts = Post::where('category_id', '=', '8')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function nervous()
    {
        $posts = Post::where('category_id', '=', '9')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function reproductive()
    {
        $posts = Post::where('category_id', '=', '10')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function respiratory()
    {
        $posts = Post::where('category_id', '=', '11')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function urinary()
    {
        $posts = Post::where('category_id', '=', '12')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }
    public function womens()
    {
        $posts = Post::where('category_id', '=', '13')->paginate(3);
        $categories = Category::all();
        return view('blogcats.categories')->withPosts($posts)->withCategories($categories);
    }

}
