<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Affiliate;
use App\Models\Bio;
use App\Models\Gear;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        // Fetch gear items from the database
        $gearItems = Gear::all();
        $user = User::first();
        $admin = Admin::first();
        $partners = Partner::all();
        $bio = Bio::first();

        // Pass the gear items to the view
        return view('User.home', compact('gearItems', 'user', 'admin', 'partners','bio'));
    }

    public function affiliates()
    {
        $affiliates = Affiliate::all();
        return view('User.affiliates', compact('affiliates'));
    }

    public function cart()
    {
        return view('User.cart');
    }

    public function contact()
    {
        return view('User.contact');
    }

    public function shop(Request $request)
    {
        $categories = Product::distinct()->pluck('category');

        // Initialize products query
        $productsQuery = Product::query();

        // Filter products by category if a category is selected
        if ($request->has('category')) {
            $productsQuery->where('category', $request->category);
        }

        // Paginate the products
        $products = $productsQuery->paginate(9);
        return view('User.shop', compact('products', 'categories'));
    }

    public function singleProduct($id)
    {
        $product = Product::findOrFail($id);
        $reviews = Review::all();
      
       
        return view('User.single-product', compact('product', 'reviews'));
    }

    public function stream()
    {
        // Retrieve the first admin record
        $admin = Admin::with('user')->first();
        // Check if an admin record exists
        if ($admin) {
            // Extract the schedule, Twitch username, and aliase from the admin record
            $schedule = $admin ? json_decode($admin->schedule, true) : [];
            $twitchUsername = $admin->twitch_username;
            $aliase = $admin->aliase;
        }
        return view('User.stream', compact(
            'schedule',
            'twitchUsername',
            'aliase'
        )
        );

    }

    public function accountInfo()
    {
        return view('User.account-info');
    }

    public function accountOrders()
    {
        return view('User.account-orders');
    }

    public function accountShipping()
    {
        return view('User.account-shipping');
    }

    public function account()
    {
        return view('User.account');
    }

    public function checkout()
    {
        return view('User.checkout');
    }
    public function dashboard()
    {
        return view('Admin.dashboard');
    }
}
