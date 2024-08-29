<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offer;
use App\Models\Orders;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $allproducts = Product::count();
        $allorders = Orders::count();
        $alloffers = Offer::count();
        $allcategories = Category::count();
        $subscribers = Subscriber::count();
        $allsliders = Slider::count();
        return view('admin.dashboard', compact('allproducts', 'allorders', 'alloffers', 'allcategories', 'allsliders', 'subscribers'));
    }
}
