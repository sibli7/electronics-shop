<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function signin(){
        
        return view('author/signin');
    }


    public function register(){
        return view('author/register');
    }

    public function create_user(Request $request){
      

        $rules=[
            'username' => 'required',
            'email' => 'required|unique',
            'password' => 'required',
            'user_role'=>'required',
        ];

        $cm=[
            'username.required'=>'Enter Username',
            'email.required'=>'Enter an Valid email',
            'password.required'=>'Enter password',
            'user_role.required'=>'User role  must be needed',
        ];
        $this->validate($request, $rules, $cm);

        $product = new Product();


        $image = $request->product_image;
        $name = $image->getClientOriginalName();
        $image->storeAs('public/product_images',$name);
        
        
        $product->product_image= $name;

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;     
        $product->discount = $request->discount;
        
        $product->save();

        Session::flash('msg','Data Successfully Added');


        return redirect('/author/product_a');

    }
    

 
    
}
