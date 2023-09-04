@extends("layouts.bootstrap")


@section("title", "Electronics Shop")
   
    <div class="loginBox">
        @if(Session::has('msg'))
            <div class="msg alert alert-success">
                 <p>{{ Session::get('msg') }}</p>

            </div>
        @endif
        <div class="header">
            <h2 class="text-success">Add New Category</h2>

        </div>
        <div class="form_area">
            <form action="{{ url('/author/create_ctgry') }}" id="form" method="post" enctype="multipart/form-data">
            @csrf

        
                <div class="category_name d-flex flex-row justify-content-between my-2">
                    <label for="category_name">Category Name :</label>
                    <div class="titleinp">
                        <input type="text" name="category_name" id="category_name">
                        @error('category_name')
                            <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                 
                </div>

                <div class="category_img d-flex flex-row justify-content-between my-2">
                    <label for="category_img"> category image :</label>
                    <div class="descinp">
                        <input type="file" name="category_img" id="category_img" >
                        @error('category_img')
                            <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>

                </div>


                

                <div class="login">
                    <input type="submit" class="btn btn-primary" value="save">
                </div>

            </form>
        </div>        
           
    </div>



           <!-- css start from here............... -->
    <style>
    
        input{
                    width:64%;
                    
                }
        .loginBox{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            height: 500px;

            font-size:20px;

        }

        input{
            width:100%;
        }
        input[type="file"]{
            font-size:12px;
        }
       
  
       
    </style>

