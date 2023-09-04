@extends("layouts.layout")

@section("title", "Electronics Shop")

@section("content")



    <!-- .........end of .carousel ..... -->
    <div class="contain">


        <div class="body">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{'pexels-darrel-und-1087180.jpg'}}"  alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{'camera.jpg'}}"  alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{'headphone.jpg'}}"  alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        
        <!-- .........end of .carousel ..... -->


        <!-- .....................featured catrgory....................... -->

        <div class="category">
            <h2  >Featured Category</h2>
            <p>Get Your Desired Product from Featured Category!</p>

        </div>
        <div class="row row-no-gutters d-flex justify-content-center ">

            <div id="col" class="col col-lg-1 col-md-3 col-sm-3  d-flex flex-column justify-content-center ">
                <a href="" class=" d-flex flex-column justify-content-center " ><img id="category_img" src="{{'computer.jpg'}}" alt=""></a>
            </div>
            <div id="col" class="col col-lg-1 col-md-3 col-sm-3  d-flex flex-column justify-content-center ">
                <a href="" class=" d-flex flex-column justify-content-center"><img id="category_img" src="{{'camera.jpg'}}" alt=""></a>
                
            </div>
            <div id="col" class="col col-lg-1 col-md-3 col-sm-3  d-flex flex-column justify-content-center ">
                <a href="" class="d-flex flex-column justify-content-center "><img id="category_img" src="{{'drone.jpg'}}" alt=""></a>
                
            </div>
            <div id="col" class="col col-lg-1 col-md-3 col-sm-3  d-flex flex-column justify-content-center ">
                <a href="" class="d-flex flex-column justify-content-center"> <img id="category_img" src="{{'laptop.jpg'}}" alt=""></a>
            </div>


            
        </div>


        <!-- .....................product catrgory....................... -->
        <div class="category">
            <h2  >Featured Products</h2>
            <p>Check & Get Your Desired Product!</p>

        </div>

        <div class="row row-no-gutters d-flex justify-content-center">

            @foreach($ShowData as $key=>$data)

            <div id="col" class="col col-lg-2 col-md-3 col-sm-3  d-flex flex-column justify-content-center align-items-center p-2">
                <a href="{{ url('/product_dtls/'.$data->id)}}"><img  src="{{ asset('storage/product_images/'.$data->product_image) }}"></a>
                <div class="content">
                    <h5>{{ ($data->title)}}</h5>
                    <p>{{ Illuminate\Support\Str::of($data->description)->words(10)}}</p>
                    <div class="d-flex justify-content-start">
                        <h3 id="cost">{{$data->price}}</h3><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36 32.2C18.4 30.1 2.4 42.5 .2 60S10.5 93.6 28 95.8l7.9 1c16 2 28 15.6 28 31.8V160H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H64V384c0 53 43 96 96 96h32c106 0 192-86 192-192V256c0-53-43-96-96-96H272c-17.7 0-32 14.3-32 32s14.3 32 32 32h16c17.7 0 32 14.3 32 32v32c0 70.7-57.3 128-128 128H160c-17.7 0-32-14.3-32-32V224h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H128V128.5c0-48.4-36.1-89.3-84.1-95.3l-7.9-1z"/></svg></span>
                    </div>
                </div>
            </div>
            @endforeach       

                
        </div>

        </div>
    </div>

<style>
    body,html{
        margin:0;
    }
 #cost{
    color:red;
 }
    .carousel-inner{
        width:100%;
        max-height:530px;
      
    }
    .carousel-item img{
        width:100%;
    }
    #col> a{
        padding:0;
        margin:0;
        height:100px;
        width:100px;
    }
    .price{
        display:flex;
        justify-content:flex-start;
    }

      #col{
        background:white;
        margin:8px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius:3px;
        padding:0;
        }
    .category{
        text-align:center;
        margin-top:50px;
    }
 
#category_img{
    height: 70px;
}
#col >a{
    height:80%;
    width: 100%;
}
#col >a img{
    width:100%;
    height:100%;
    object-fit:cover;
}
#product-pic{
    width:100%;
    object-fit:cover;
}

@media screen and (max-width: 576px) {
    body{
        overflow-y:hidden;
    }
    .row{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }
}

</style>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

                     

            // display login form using ajax.............
            $(document).on("click","#login_form",function(e){
                e.preventDefault();

    
                $.ajax({
                    type: 'GET',
                    url: '/author/signin',
                    success: function (data) {
                        
                        $(".contain").show();

                        $(".contain").html(data);
                    }
                });
                        


            });

            // display login form using ajax.............
            $(document).on("click","#register_form",function(e){
                e.preventDefault();

    
                $.ajax({
                    type: 'GET',
                    url: '/author/register',
                    success: function (data) {
                        
                        $(".contain").hide();
                        $(".contain").show();

                        $(".contain").html(data);
                    }
                });
                        


            });

            // display contact form using ajax.............
            $(document).on("click","#contact_page",function(e){
                e.preventDefault();

    
                $.ajax({
                    type: 'GET',
                    url: '/contact',
                    success: function (data) {
                        
                        $(".contain").hide();
                        $(".contain").show();

                        $(".contain").html(data);
                    }
                });
                        


            });

            // display contact form using ajax.............
            $(document).on("click","#category_form",function(e){
                e.preventDefault();

    
                $.ajax({
                    type: 'GET',
                    url: '/author/category_frm_dspl',
                    success: function (data) {
                        
                        $(".contain").hide();
                        $(".contain").show();

                        $(".contain").html(data);
                    }
                });
                        


            });










        });
    </script>



@endsection