<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\BajuWanita;
use App\Models\PaymentTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// Perubahan 5
class CartController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        $cartItem = Cart::with('BajuWanita')->where('user_id', $user->id)->latest()->get();
        $cartItem = Cart::with('BajuPria')->where('user_id', $user->id)->latest()->get();
        // $cartItem = Cart::with('BajuAnak')->where('user_id', $user->id)->latest()->get();

        return view('admin.baju.cart', compact(['cartItem']));
    }

    public function add_cart($id, Request $request )
    {
        User::find($id);

        $cart = new Cart();
        $cart = new Cart;
        $cart->nama = $request->nama;
        $cart->user_id = Auth::user()->id;
        $cart->cart_id = Auth::user()->id;
        $cart->harga = $request->harga;
        $cart->quantity = $request->quantity;
        $cart->image = $request->image;
        $cart->save();
        return redirect('/cart')->with('addItem', 'Berhasil Masuk Keranjang😍');

        // if (Auth::user()->id === 3) {
        //     $cart->user()->associate($user);
        //     $cart = new Cart;
        //     $cart->nama = $request->nama;
        //     $cart->user_id = 3;
        //     $cart->cart_id = 3;
        //     $cart->harga = $request->harga;
        //     $cart->quantity = $request->quantity;
        //     $cart->image = $request->image;
        //     $cart->save();
        // }
    }

    public function removeItem( $id )
    {
        $item = Cart::find($id)->delete();
        return redirect('/cart')->with('removeItem', 'Item telah dihapus');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update_cart($id, Request $request)
    {
        $cart = Cart::find($id);
        $cart->quantity = $request->quantity;
        $cart->save();

        // $cart = Cart::find($id);
        // $cart->update([
        //     'quantity' => $request->quantity,
        // ]);


        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect("/cart");
    }

    public function checkout($id, Request $request)
    {
        $items = Auth::user()->cart;
        foreach($items as $item) {
            $cart = new PaymentTransaction;
            $cart->nama = $item->nama;
            $cart->user_id = Auth::user()->id;
            $cart->cart_id = Auth::user()->id;
            $cart->harga = $item->harga;
            $cart->quantity = $item->quantity;
            $cart->image = $item->image;
            $cart->save();
            $item->delete();
        }

        return redirect('/cart');
    }

    public function checkout_byDetail($id, Request $request)
    {
        User::find($id);
        $cart = new PaymentTransaction();
        $cart = new PaymentTransaction;
        $cart->nama = $request->nama;
        $cart->user_id = Auth::user()->id;
        $cart->cart_id = Auth::user()->id;
        $cart->harga = $request->harga;
        $cart->quantity = $request->quantity;
        $cart->image = $request->image;
        $cart->save();

        return redirect('/history');
    }
}
