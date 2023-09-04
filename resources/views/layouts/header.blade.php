<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
  <body>

  <div class="nav_box bg-primary d-flex flex-row justify-content-between px-2">
        <ul class="nav ">
            <li class="nav-item">
                <a class=" active" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class=" active" aria-current="page" id="login_form" href="">log-in</a>
            </li>
            <li class="nav-item">
                <a class=" active" aria-current="page" id="register_form" href="">Register User</a>
            </li>
        
            <li class="nav-item">
                <a class="" id="category_btn" href="#">Category</a>
                <ul id="laod_c" >
                    <li class="nav-item"><a id="load_cgry" href="">..........</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="" href="{{url('/product')}}">All Product</a>
            </li>
            <li class="nav-item">
                <a class=""  href="{{url('/contact')}}">About US</a>
            </li>
            
            <li class="nav-item">
                <a class="" id="category_form" href="">Add New Category</a>
            </li>
        </ul>
        <div class="logo">
            <h3 style="color:white">Tri Tech Company</h3>
        </div>
  </div>

    

  <!-- ................................................................................... -->
    <div class="box">
        <H4><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </svg></H4>
        <ul>
            <li>Home</li>
            <li>blog</li>
            <li>contact</li>
        </ul>

    </div>






<style>
    body,html{
        overflow-x:hidden;
        padding:0;
        margin:0;
    }
    body{
        padding:0;
        margin:0;
    }
    li{
        color:white;
    }
    .nav ul li a{
        color:white;
    }
    .box{
        height:560px;
        width:240px;
        background:black;
        position:fixed;
        top:0;
        left:0;
        z-index:9;
        display:none;
    }
    h4{
        color:white;
        position:relative;
        top:10px;
        left: 190px;
    }
     ul{
        margin:0;
        padding: 0;
        list-style: none;
        display: block;
        content:"";
        clear:both;
        
    }
     ul > li{
        float: left;
        position:relative;
        /* border:1px solid black; */
        /* height: 65px; */
    }
   ul:after{
    content:'';
    display:block;
    clear:both;
}
 ul li a{
    text-decoration: none;
    color:rgb(255, 255, 255);
    font-size: 18px;
    display: block;
    padding:14px 10px;
}
li{
    padding:0;
    margin:0;
}
ul li a:hover{
    background:violet;
}
    ul li ul{
        background:black;  
        position: absolute;
        left:0;
        top:100%;
        background-attachment: fixed;
        background-position: 0%;
        width: 200px;
        /* background: rgb(4, 192, 120); */
        display: none;
        opacity:100;
     }
    ul li ul li{
        list-style:none;
        position:relative;
        top:0;
        left:0;
        background:black;
    }
    ul li ul li{

    width:100%;
    border-top: 1px solid rgba(0,0,0,.1);
    opacity:100;

    }
     ul>li:focus-within >ul{
    display: block;
}


@media screen and (max-width: 576px) {
    .nav{
        display:none;
    }

}

</style>

    <script type="text/javascript">
        $(document).ready(function() {

            var boxWidth = $(".box").width();
            $("h4").click(function() {
                $(".box").animate({
                    width: 0
                });
                $(".box > ul").html("")
                $(".box").fadeOut()
                
            });
            $(".slide-right").click(function() {
                $(".box").animate({
                    width: boxWidth
                });
            });
            // ...........................side menu bar............


                        // to load category usig ajax.............
            // loadData=()=>{

    
            //     $.ajax({
            //         type: 'GET',
            //         url: '/load_category',
            //         success: function (data) {
                        
            //             console.log(data);
            //                 var res='';
            //                 $.each (data, function (key, value) {
            //                     res +='<li><option value="'+value.id +'">'+value.category_name +'</option></li>';

            //                 });

            //                 $('#laod_c').append(res);
            //         }
            //     });
            // }
            // loadData()

            










        });
    </script>















