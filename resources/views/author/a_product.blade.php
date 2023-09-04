@extends("layouts.layout")


@section("title", "Electronics Shop")
@section("content")
   
    <div class="loginBox">
  
            <div class="msg alert alert-success">
                 <p></p>

            </div>
      
        <div class="header">
            <h2 class="text-success">Add Product</h2>

        </div>
        <div class="form_area">
            <form  id="form"  enctype="multipart/form-data">
            @csrf

        
                <div class="title d-flex flex-row justify-content-between my-2">
                    <label for="title">Title :</label>
                    <div class="titleinp">
                        <input type="text" name="title" id="title">
                        @error('title')
                            <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                 
                </div>

                <div class="description d-flex flex-row justify-content-between my-2">
                    <label for="description"> Description :</label>
                    <div class="descinp">
                        <input type="text" name="description" id="description" >
                        @error('description')
                            <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>

                </div>

                <div class="category d-flex flex-row justify-content-between my-2">
                    <label for="category"> Category :</label>
                    <div class="categoryinp">
                        <input type="text" name="category" id="category" >
                        @error('category')
                            <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>

                </div>

                <div class="price d-flex flex-row justify-content-between my-2">
                    <label for="price"> Price :</label>
                    <div class="priceinp">
                        <input type="text" name="price" id="price" >
                        @error('price')
                            <h6 class="text-danger">{{ $message }}</h6>
                        @enderror
                    </div>
                </div>

                <div class="discount d-flex flex-row justify-content-between my-2">
                    <label for="discount"> Discount:</label>
                    <div class="discountinp">
                         <input type="text" name="discount" id="discount" value="0">
                         @error('discount')
                            <h6 class="text-danger">{{ $message }}</h6>
                         @enderror
                    </div>
                 
                </div>

                <div class="product_image d-flex flex-row justify-content-between">
                    <label for="product_image">Product Image :</label>
                    <div class="imageinp">
                        <input type="file" name="product_image" id="product_image">
                        @error('product_image')
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
        .msg{
            display:none;
        }
    
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









    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

                     


            $('#form').submit(function (e) {
                e.preventDefault();

                var formData = new FormData(this);

                var title = $('#title').val();
                        if(title==""){
                            $(".msg").show();
                            $("p").html("blank form field");
                        }else{
                            $.ajax({
                                type: 'POST',
                                url: '/author/store',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function (data) {
                                    
                                    $(".msg").show();

                                    $("p").html(data.msg);
                                }
                            });
                        }


            });


            
        });
    </script>


@endsection