<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Offer;
use App\Models\Orders;
use App\Models\Slider;
use App\Mail\ContactUs;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscriber;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\OrderFormRequest;
use App\Http\Requests\SubscribeFormRequest;
use App\Http\Requests\ApplicationFormRequest;

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

    public function offer(){
        $offers = Offer::latest()->get();
        return view('frontend.offers', compact('offers'));
    }

    public function worker(){
        // $offers = Offer::latest()->get();
        return view('frontend.worker');
    }

    public function hrservice(){
        // $offers = Offer::latest()->get();
        return view('frontend.hr-services');
    }

    public function jobs(){
        $jobs = Job::where('status', '0')->latest()->paginate(10);
        return view('frontend.jobs', compact('jobs'));
    }

    public function jobView(string $slug){
        // $jobs = Job::findOrFail($slug);
        $jobs = Job::where('slug', $slug)->first();
        return view('frontend.view', compact('jobs'));
    }

    public function jobApplication(string $slug){
        // $jobs = Job::findOrFail($slug);
        $jobs = Job::where('slug', $slug)->first();
        return view('frontend.application', compact('jobs'));
    }

    public function storeApplication(ApplicationFormRequest $request){
        $validatedData = $request->validated();

        $application = new Application;

        $application->job_title = $validatedData['job_title'];
        $application->firstname = $validatedData['firstname'];
        $application->middlename = $validatedData['middlename'];
        $application->lastname = $validatedData['lastname'];
        $application->email = $validatedData['email'];
        $application->phone = $validatedData['phone'];
        $application->position = $validatedData['position'];
        $application->coverletter = $validatedData['coverletter'];

        if($request->hasFile('cv')){
            $file = $request->file('cv');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/cv/',$filename);
            $application->cv = 'uploads/cv/'.$filename;
        }

        if($request->hasFile('other')){
            $file = $request->file('other');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/other/',$filename);
            $application->other = 'uploads/cv/'.$filename;
        }

        $application->save();

        return redirect()->back()->with('message','Your Application have been submitted successfully. You will be contacted via email when due.');
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
