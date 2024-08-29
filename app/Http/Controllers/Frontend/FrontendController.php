<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Offer;
use App\Models\Orders;
use App\Models\Slider;
use App\Mail\ContactUs;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\OrderFormRequest;
use App\Http\Requests\SubscribeFormRequest;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::where('status', '0')->latest()->get();
        $products = Product::orderBy('id', 'DESC')->limit(6)->get();
        $offers = Offer::latest()->limit(3)->get();
        return view('frontend.index', compact('sliders', 'products', 'offers'));
    }

    public function about(){
        // $sliders = Slider::orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function services(){
        $offers = Offer::latest()->get();
        return view('frontend.services', compact('offers'));
    }

    public function product($category_slug){
        $category = Category::where('slug',$category_slug)->first();
        if($category){
            $products = $category->products()->where('status','0')->paginate('9');
            return view('frontend.categories', compact('products', 'category'));
        }else{
            return redirect()->back();
        }
        
    }

    public function productView(string $category_slug, string $product_slug){
        $category = Category::where('slug',$category_slug)->first();
        if($category){
            $product = $category->products()->where('slug',$product_slug)->where('status','0')->first();
            if ($product) {
                return view('frontend.view', compact('product', 'category'));
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }
    }

    public function placeOrder(string $category_slug, string $product_slug){
        $category = Category::where('slug',$category_slug)->first();
        if($category){
            $product = $category->products()->where('slug',$product_slug)->where('status','0')->first();
            if ($product) {
                return view('frontend.order', compact('product', 'category'));
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }
    }

    public function storeOrder(OrderFormRequest $request){
        $validatedData = $request->validated();

        $order = new Orders;

        $order->name = $validatedData['name'];
        $order->email = $validatedData['email'];
        $order->phone = $validatedData['phone'];
        $order->quantity = $validatedData['quantity'];
        $order->product_code = $validatedData['product_code'];
        $order->price = $validatedData['price'];
        $order->title = $validatedData['title'];
        $order->save();

        return redirect()->back()->with('message','Your order has been created successfully');
    }

    public function searchProducts(Request $request){
        if($request->search){

            $searchProducts = Product::where('title','LIKE', '%'.$request->search.'%')->latest()->paginate(12);
            return view('frontend.search', compact('searchProducts'));
        }else{
            return redirect()->back()->with('alert', 'empty search');
        }
    }

    public function storeEmail(SubscribeFormRequest $request){
        $validatedData = $request->validated();

        $sub = new Subscriber;

        $sub->subemail = $validatedData['subemail'];
        $sub->save();

        return redirect()->back()->with('alert','You have successfully subscribe to our newsletter.');
    }

    public function postMessage(Request $request){

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email:filter|string',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        // $data =[
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ];

        Mail::to('test@mdaaelectricalengineering.com')->send(new ContactUs($data));

        return redirect()->back()->with('message','Message Sent Successfully.');

        //dd('sent');

        // return $request->all();
    }
}
