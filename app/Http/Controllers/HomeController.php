<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{

    public function welcome_page(){

        $ShowData = Product::all();

        return view('welcome' ,compact('ShowData'));
    }


    public function home(){
        return view('home');
    }

    // public function product(Request $request){
    //     $query = $request->query;

    //     $ShowData = Product::where('name', 'like', '%' . $query . '%')->get();

        
    //     if($ShowData->isEmpty()){
    //         $ShowData = Product::all();
    //         return view('product' ,compact('ShowData'));
    //     }else{

    //         return redirect('/product', compact('ShowData'));
    //     }      
    // }

    public function contact(){
        return view('contact');
    }

    public function product_dtls($id=null){

        $data = Product::find($id);

        return view('product_details' ,compact('data'));
    }

    public function load_category(){

        $Category = Category::all();

        return response()->json($Category);
    }


    
}
