<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Tag;
use App\Category;
use Session;
use Purifier;
use Image;

class ProductController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(8);
        return view('products.index')->withProducts($products);
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::orderBy('id', 'desc')->paginate(8);
        return view('shop')->withProducts($products)->withCategories($categories);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
                'name'         => 'required|max:255',
                'description'  => 'required|max:255',
                'slug'          => 'required|alpha_dash|min:5|max:255|unique:products,slug',
                'benefit'      => 'required|max:255',
                'price'        => 'required|max:255',
                'manufacturer' => 'required|max:255',
            ));

        // store in the database
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->benefit = $request->benefit;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->manufacturer = $request->manufacturer;
        $product->sku = $request->sku;

        if ($request->hasFile('featured_img')) {
          $image = $request->file('featured_img');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);

          $product->image = $filename;
        }

        $product->save();

        $product->categories()->sync($request->categories, false);

        Session::flash('success', 'The product was successfully save!');

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as a var
        $product = Product::find($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }

        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->name;
        }
        // return the view and pass in the var we previously created
        return view('products.edit')->withProduct($product)->withCategories($cats)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data
        $product = Product::find($id);

        if ($request->input('slug') == $product->slug) {
            $this->validate($request, array(
                'name' => 'required|max:255',
                'category_id' => 'required|integer',
                'body'  => 'required'
            ));
        } else {
        $this->validate($request, array(
                'title' => 'required|max:255',
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:products,slug',
                'category_id' => 'required|integer',
                'body'  => 'required'
            ));
        }

        // Save the data to the database
        $product = Product::find($id);

        $product->title = $request->input('title');
        $product->slug = $request->input('slug');
        $product->category_id = $request->input('category_id');
        $product->body = Purifier::clean($request->input('body'));

        $product->save();

        if (isset($request->tags)) {
            $product->tags()->sync($request->tags);
        } else {
            $product->tags()->sync(array());
        }


        // set flash data with success message
        Session::flash('success', 'This post was successfully saved.');

        // redirect with flash data to posts.show
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->tags()->detach();

        $product->delete();

        Session::flash('success', 'The product was successfully deleted.');
        return redirect()->route('products.index');
    }

    public function getSingle($slug) {
        // fetch from the DB based on slug
        $product = Product::where('slug', '=', $slug)->first();
        $categories = Category::all(); 
        // return the view and pass in the Product object
        $interested = Product::where('slug', '!=', $slug)->get()->random(4);
        return view('products.single')->with(['product' => $product, 'interested' => $interested, 'categories' => 'categories']);
    }
}
