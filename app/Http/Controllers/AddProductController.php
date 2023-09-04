<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use Session;

class AddProductController extends Controller
{

    //........display add product form page..........
    public function product_a(){
        return view('author/a_product');
    }

    //........store product into database
    public function store(Request $request){
      

        $rules=[
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'discount' => 'numeric',
            'product_image'=>'required',
        ];

        $cm=[
            'title.required'=>'Enter Product Title',
            'category.required'=>'Enter Product Category',
            'description.required'=>'Enter Product Title',
            'price.required'=>'Enter Product Title',
            'price.numeric'=>'Price must be Numeric ',
            'product_image.required'=>'Image must be uploaded',
        ];
        $this->validate($request, $rules, $cm);

        $product = new Product();


        $image = $request->product_image;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/product_images',$name);
        
        
        $product->product_image= $name;

        $product->title = $request->title;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;     
        $product->discount = $request->discount;
        
        $product->save();

        // Session::flash('msg','Data Successfully Added');


        // return redirect('/author/product_a');
        return response()->json(['msg' => 'Post created successfully']);

    }

    public function home(){
        $ShowData = Product::all();

        return view('author/home' ,compact('ShowData'));
    }
    //........display category page
    public function categoryPage(){

        return view('author/category_str');
    }


    //........store categoryi nto database
    public function category(Request $request){
      

        $rules=[
            'category_name' => 'required',
            'category_img' => 'required',
            // 'category_id' => 'required',
        ];

        $cm=[
            'category_name.required'=>'Enter Product category name',
            // 'category_id.required'=>'Enter Product Category id',
            'category_img.required'=>'Image must be uploaded',
        ];
        $this->validate($request, $rules, $cm);

        $category = new Category();

        $image = $request->category_img;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/category_images',$name);
        
        
        $category->category_img = $name;

        $category->category_name = $request->category_name;

       
      
        $category->save();

        Session::flash('msg','Data Successfully Added');


        return redirect('/author/category_frm_dspl');

    }


  

 
    
}
