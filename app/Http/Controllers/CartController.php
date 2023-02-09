<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = Product::where('id','=',$request->id)->first();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->item_id = $request->id;
        $order->price = $product->Price;
        $order->save();
        return redirect('CartPage');
    }

    public function CartShow(){
        $order = Order::with('product')->where('user_id', '=', Auth::user()->id)->get();
        $total = 0;
        foreach($order as $or){
            $total += $or->product->Price;
        }
        return view('CartPage',[
            "orders" => $order,
            'total' => $total
        ]);
    }

    public function DeleteProduct(Order $id){
        $id->delete();
        return redirect('CartPage');
    }

    public function deleteAll(){
        $order = Order::where('user_id', '=', Auth::user()->id)->delete();
        return redirect('Success');
    }

}
