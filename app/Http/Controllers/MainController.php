<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Gear;
use App\Models\Partner;
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
        // Pass the gear items to the view
        return view('frontEnd.home', compact('gearItems', 'user', 'admin', 'partners'));
    }

    public function affiliates()
    {
        return view('frontEnd.affiliates');
    }

    public function cart()
    {
        return view('frontEnd.cart');
    }

    public function contact()
    {
        return view('frontEnd.contact');
    }

    public function shop()
    {
        return view('frontEnd.shop');
    }

    public function singleProduct()
    {
        return view('frontEnd.single-product');
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
        return view('frontEnd.stream', compact(
            'schedule',
            'twitchUsername',
            'aliase'
        )
        );

    }
    public function accountBilling()
    {
        return view('frontEnd.account-billing');
    }

    public function accountInfo()
    {
        return view('frontEnd.account-info');
    }

    public function accountOrders()
    {
        return view('frontEnd.account-orders');
    }

    public function accountShipping()
    {
        return view('frontEnd.account-shipping');
    }

    public function account()
    {
        return view('frontEnd.account');
    }

    public function checkout()
    {
        return view('frontEnd.checkout');
    }
}
