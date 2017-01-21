<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;
use \Cart as Cart;
use Validator;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('cart')->withProducts($products);
    }

    public function checkout()
    {
        $products = Product::all();
        return view('checkout')->withProducts($products);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = Product::all();
        if (Cart::search(['id' => $request->id])) {
            return redirect('cart')->withSuccessMessage('Item is already in your cart!');
        }

        Cart::associate('Product','App')->add($request->id, $request->name, 1, $request->price);
        return redirect('cart')->withSuccessMessage('Item was added to your cart!')->withProducts($products);
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('shop')->withCategories($categories)->withProducts($products);
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Your cart his been cleared!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {
        $item = Cart::instance('main')->get($id);

        Cart::instance('main')->remove($id);

        if (Cart::instance('wishlist')->search(['id' => $item->id])) {
            return redirect('cart')->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cart::instance('wishlist')->associate('Product','App')->add($item->id, $item->name, 1, $item->price);
        return redirect('cart')->withSuccessMessage('Item has been moved to your Wishlist!');

    }
}
