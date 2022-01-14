<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Cart;
use App\LineItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $cart_id = Session::get('cart');
        $cart = Cart::find($cart_id);

        $total_price = 0;
        foreach ($cart->items as $item) {
            $total_price += $item->price * $item->pivot->quantity;
        }

        return view('cart.index')
            ->with('line_items', $cart->items)
            ->with('total_price', $total_price)
            ->with('user', $user);
    }
    public function checkout()
    {
        $cart_id = Session::get('cart');
        $cart = Cart::find($cart_id);

        if (count($cart->items) <= 0) {
            return redirect(route('cart.index'));
        }

        $line_items = [];
        foreach ($cart->items as $item) {
            $line_item = [
                'name'        => $item->name,
                'description' => $item->description,
                'amount'      => $item->price,
                'currency'    => 'jpy',
                'quantity'    => $item->pivot->quantity,
            ];
            array_push($line_items, $line_item);
        }

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items'           => [$line_items],
            'success_url'     => route('cart.success'),
            'cancel_url'           => route('cart.index'),
            'billing_address_collection' => 'required',
        ]);

        return view('cart.checkout', [
            'session' => $session,
            'publicKey' => env('STRIPE_PUBLIC_KEY')
        ]);
    }
    public function success()
    {
        $cart_id = Session::get('cart');
        LineItem::where('cart_id', $cart_id)->delete();

        return redirect(route('top'));
    }
}
