<?php

use App\Product;
use App\Post;
use App\Tag;
use App\Category;
use App\User;

use Illuminate\Support\Facades\Input;


    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');
    Route::get('about', 'PagesController@getAbout');
    Route::get('beginnings', 'PagesController@beginnings');
    Route::get('mission', 'PagesController@mission');
    Route::get('cooking', 'PagesController@cooking');
    Route::get('quality', 'PagesController@quality');
    Route::get('returns', 'PagesController@returns');
    Route::get('terms', 'PagesController@terms');
    Route::get('privacy', 'PagesController@privacy');

    Route::get('shop/{slug}', ['as' => 'products.single', 'uses' => 'ProductController@getSingle'])->where('slug', '[\w\d\-\_]+');
    // Blog Categories
    Route::get('blogcats/allergies', 'BlogController@allergies');
    Route::get('blogcats/cardio', 'BlogController@cardio');
    Route::get('blogcats/childhealth', 'BlogController@childhealth');
    Route::get('blogcats/digestive', 'BlogController@digestive');
    Route::get('blogcats/general', 'BlogController@general');
    Route::get('blogcats/immune', 'BlogController@immune');
    Route::get('blogcats/mens', 'BlogController@mens');
    Route::get('blogcats/musculoskeletal', 'BlogController@musculoskeletal');
    Route::get('blogcats/nervous', 'BlogController@nervous');
    Route::get('blogcats/reproductive', 'BlogController@reproductive');
    Route::get('blogcats/respiratory', 'BlogController@respiratory');
    Route::get('blogcats/urinary', 'BlogController@urinary');
    Route::get('blogcats/womens', 'BlogController@womens');

    // Comments
    Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
    Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
    Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
    Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
    Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

    // Search

    Route::any('/search-product',function(){
        $q = Input::get ( 'q' );
        $categories = Category::all();
        $product = Product::where('name','LIKE','%'.$q.'%')->orWhere('benefit','LIKE','%'.$q.'%')->paginate(8);
        if(count($product) > 0)
            return view('queries.product')->withCategories($categories)->withDetails($product)->withQuery ( $q );
        else 
            return view('queries.product')->withErrors(['msg', 'No Details found. Try to search again !']);
    });

    Route::any('/search-blog',function(){
        $q = Input::get ( 'q' );
        $categories = Category::all();
        $post = Post::where('title','LIKE','%'.$q.'%')->paginate(8);
        if(count($post) > 0)
            return view('queries.post')->withCategories($categories)->withDetails($post)->withQuery ( $q );
        else 
            return view('queries.post')->withErrors(['msg', 'No Details found. Try to search again !']);
    });


// Categories

Route::get('categories', ['middleware' => 'admin', function () {  
    $categories = Category::all();
    return view('categories.index')->withCategories($categories);
}]);
Route::resource('categories', 'CategoryController', ['except' => ['create']]);


// Tags 

Route::get('tags', ['middleware' => 'admin', function () {  
    $tags = Tag::all();
    return view('tags.index')->withTags($tags);
}]);
Route::resource('tags', 'TagController', ['except' => ['create']]);


// Posts

Route::get('posts', ['middleware' => 'admin', function () {  
    $posts = Post::all();
    return view('posts.index')->withPosts($posts);

}]);
Route::resource('posts', 'PostController');
Route::get('posts/edit/{id}', ['uses' => 'PostController@edit', 'as' => 'posts.edit']);
Route::put('posts/{id}', ['uses' => 'PostController@update', 'as' => 'posts.update']);


// Products
Route::get('products', ['middleware' => 'admin', function () {  
    $products = Product::all();
    return view('products.index')->withProducts($products);

}]);


Route::resource('products', 'ProductController');
Route::get('products/edit/{id}', ['uses' => 'ProductController@edit', 'as' => 'products.edit']);
Route::put('products/{id}', ['uses' => 'ProductController@update', 'as' => 'products.update']);

Route::get('shop/{slug}', ['as' => 'products.single', 'uses' => 'ProductController@getSingle'])->where('slug', '[\w\d\-\_]+');
// Blog

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);





    // MAIN
Route::get('/', 'PagesController@getIndex');



Route::resource('cart', 'CartController');
Route::get('shop', 'ProductController@shop');
Route::get('checkout', 'CartController@checkout');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');

Route::auth();

Route::get('/home', 'HomeController@index');
