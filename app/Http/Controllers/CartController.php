<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Retrieve the product with its reviews
        $product = Product::with('reviews')->find($productId);

        // Initialize cart if not already present in session
        $cart = $request->session()->get('cart', []);

        // Calculate average rating for the product
        $averageRating = $product->reviews->avg('rating');

        // Check if the product is already in the cart
        $productExists = false;
        foreach ($cart as &$item) {
            if (is_array($item) && isset ($item['id']) && $item['id'] == $productId) {
                // If so, increment quantity
                $item['quantity']++;
                $productExists = true;
                break;
            }
        }

        // If product is not in cart, add it
        if (!$productExists) {
            $cart[] = [
                
                'id' => $productId,
                'thumbnail' => $product->thumbnail,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'total_price' => $product->price,
                'rating' => round($averageRating, 1), // Include average rating
            ];
        }

        // Update the cart in the session
        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    public function clear(Request $request)
    {
        // Clear the cart in the session
        $request->session()->forget('cart');

        return redirect()->back()->with('success', 'Cart cleared successfully');
    }
    public function delete($key)
    {
        $cart = session()->get('cart');

        if (isset ($cart[$key])) {
            unset($cart[$key]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully.');
    }
}
