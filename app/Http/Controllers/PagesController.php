<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Product;
use App\Category;
use Mail;
use Session;

class PagesController extends Controller {

 
    public function getIndex() {
        $categories = Category::all();
        $products = Product::orderBy('id', 'desc')->paginate(8);
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withCategories($categories)->withProducts($products);
    }

    public function getAbout() {
        $first = 'Alex';
        $last = 'Curtis';

        $fullname = $first . " " . $last;
        $email = 'alex@jacurtis.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10']);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
            );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@devmarketer.io');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was Sent!');

        return redirect('/');
    }



    public function register()
    {
        return view('pages.register');
    }
    public function beginnings()
    {
        return view('pages.beginnings');
    }
    public function mission()
    {
        return view('pages.mission');
    }
    public function cooking()
    {
        return view('pages.cooking');
    }
    public function quality()
    {
        return view('pages.quality');
    }
    public function returns()
    {
        return view('pages.returns');
    }

    public function terms()
    {
        return view('pages.terms');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
    public function construction()
    {
        return view('pages.construction');
    }
}