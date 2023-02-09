<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function ShowProduct()
    {
        $new = Product::latest();

        if(request('search')){
            $new->where('Name', 'like', '%' . request('search') . '%');
        }
        return view('Home',[
                "products" => DB::table('products')->paginate(10),

        ]);

    }
        public function ShowDetailCustomerView(){
        return view('ProductDetail',[
            "Detail" => Product::all()
        ]);
    }

    public function ShowDetailCustomer(Product $Number){
        return view('ProductDetail',[
            "Detail" => $Number
        ]);
    }
}
