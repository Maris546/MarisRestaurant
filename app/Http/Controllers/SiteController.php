<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function makeOrder($id){
        $myproduct = Product::find($id);
        return view('order', compact('myproduct'));
    }

    public function sendOrder(Request $request){
        $data = new Order();
        $data->customer = $request->name;
        $data->product_id = $request->id;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->quantity = $request->quantity;
        $data->ordertime = $request->ordertime;
        $data->save();
        return redirect()->route('index')->with('success', 'Your Order has been Placed successfully!');

    }
}
