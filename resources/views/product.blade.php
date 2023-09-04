@extends("layouts.layout")

@section("title", "Electronics Shop")

@section("content")

    <h1 class="d-flex justify-content-center">All Products </h1>
    <hr>

    <!-- .............search box search by catrgory........... -->
    
        <input name="query" id="query" class="col-lg-6 col-md-4 d-flex justify-content-center" type="text" placeholder="Search By Category" >
        
    <!-- .............end ...search box search by catrgory........... -->

    
        <div class="dis">

        </div>

        <div class="row row-no-gutters d-flex justify-content-center col col-lg-10 col-md-10">

            @foreach($ShowData as $key=>$data)

            <div id="col" class="col col-lg-2 col-md-3 col-sm-4 d-flex flex-column justify-content-center align-items-center p-2">
            <a href="{{ url('/product_dtls/'.$data->id)}}"><img  src="{{ asset('storage/product_images/'.$data->product_image) }}"></a>
            <div class="content">
                <p>{{ Illuminate\Support\Str::of($data->description)->words(10)}}</p>
                <div class="d-flex justify-content-start">
                        <h3 id="cost">{{$data->price}}</h3><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36 32.2C18.4 30.1 2.4 42.5 .2 60S10.5 93.6 28 95.8l7.9 1c16 2 28 15.6 28 31.8V160H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H64V384c0 53 43 96 96 96h32c106 0 192-86 192-192V256c0-53-43-96-96-96H272c-17.7 0-32 14.3-32 32s14.3 32 32 32h16c17.7 0 32 14.3 32 32v32c0 70.7-57.3 128-128 128H160c-17.7 0-32-14.3-32-32V224h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H128V128.5c0-48.4-36.1-89.3-84.1-95.3l-7.9-1z"/></svg></span>
                </div>
            </div>
            </div>
            @endforeach       
 
            
        </div>

        <!-- ..............show category list using ajax............. -->
        <div class="bar col col-lg-2 col-md-2 col-sm-2 px-2">
            <li id="id">click me</li>
            <form id="form_input"> 
                  
                           

            </form>        
        </div>
    


    








    <style>
        #load_category{
            background:tan;
        }
        #load_category li{
            /* background:black; */
            margin:2px 0;
            float:none;
            color:red;
            z-index:9;
        }
        #load_category li:hover{
            text-decoration:underline;
            cursor:pointer;
        }
        .main_box{
            display:flex;
            flex-direction:row;
            justify-content:center;
        } 
        .bar li{
            color:black;
            list-style:none;
        }
        .bar li>a{
            color:red;
        }
        .bar{
            background:#ddd;
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
 #col >a{
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
a img{
 width:100%;
 height:100%;
 object-fit:cover;
}
#product-pic{
 width:100%;
 object-fit:cover;
}



body{
        overflow-y:hidden;
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
    .main_box{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
    }

}

</style>

    <script type="text/javascript">
        $(document).ready(function() {
            // main search using ajax..............
            $(document).on('keyup',function(e) {
                e.preventDefault();

                var query = $("#query").val();
                // alert(query)


                            
                            $.ajax({
                                type: 'GET',
                                url: '/search',
                                data: {
                                    query:query
                                },
                                success: function (data) {
                                    
                                    // $(".msg").show();
                                    console.log(data)

                                    $(".row").html(data);
                                }
                            });
                        


            });



                        // to load category usig ajax.............
            loadData=()=>{
                $.ajax({
                    type: 'GET',
                    url: '/load_category',
                    success: function (data) {
                        
                        // console.log(data);
                            var res='';
                            $.each (data, function (key, value) {
                                res +='<input name="query" type="submit" value="'+value.category_name +'">';
                                

                            });

                            $('#form_input').append(res);
                            // console.log(res);

                            
                    }
                 });  
            }
            loadData();


            // $(document).on("click","#form_input input",function(e)
            $("#form_input input").click(function(e){
                e.preventDefault();
                var text = $(this).val();
                // alert(text)

                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.ajax({
                    type: 'GET',
                    url: '/fetch',
                    data:{
                        "_token":"{{csrf_token()}}",
                        quer:text,
                    },                  
                    success: function (data) {
                        
                        
                   

                        $(".dis").html(data);
                    },
                });

            })
           

                        



        });
    </script>

@endsection