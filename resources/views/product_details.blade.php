@extends("layouts.layout")


@section("title", "Electronics Shop")
@section("content")
   
    <div class="row row-no-gutters d-flex justify-content-center">


         <div id="col" class="col  p-2">
            <div class="img">
            <a class="col-sm-12" href="{{ url('/product_dtls/'.$data->id)}}"><img  src="{{ asset('storage/product_images/'.$data->product_image) }}"></a>

            </div>
            <div class="content ">
                 <div class="d-flex justify-content-start">
                     <h3 id="cost"> Price {{$data->price}} </h3><span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M36 32.2C18.4 30.1 2.4 42.5 .2 60S10.5 93.6 28 95.8l7.9 1c16 2 28 15.6 28 31.8V160H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H64V384c0 53 43 96 96 96h32c106 0 192-86 192-192V256c0-53-43-96-96-96H272c-17.7 0-32 14.3-32 32s14.3 32 32 32h16c17.7 0 32 14.3 32 32v32c0 70.7-57.3 128-128 128H160c-17.7 0-32-14.3-32-32V224h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H128V128.5c0-48.4-36.1-89.3-84.1-95.3l-7.9-1z"/></svg></span>
                </div><hr>
                <h4>{{$data->title}}</h4>
                <div class="decp">
                    <b>Product Description :</b> <span>{{$data->description}}</span>

                </div>
                <a href="{{url('/product')}}">back</a>
               
            </div>
            <div class="link">
                <h2>Quick links</h2>
                <li><a href="">Phone</a></li>
                <li><a href="">Camera</a></li>
                <li><a href="">Monitor</a></li>
                <li><a href="">Watch</a></li>
            </div>

        </div>


               
    </div>

<style>


#cost{
    color:red;
 }
      #col{
        background:white;
        margin:8px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius:3px;
        padding:0;
        /* height:300px;
        width:500px; */
        display:flex;
        flex-direction:row;
        /* justify-content:space-around; */
        }
        .img{
            border:1px solid white;
        }
  
 


.content{
    height:100%;
    width: 50%;
    padding:5px;
    /* border:1px solid black; */
}

a img{
    height:500px;
    width:100%;
    object-fit:cover;
}

.link li{
    color:black;
    list-style:none;
}


@media screen and (max-width: 576px) {
    body{
        overflow-x:hidden;
    }
#col{
    display:flex;
    flex-direction:column;
    text-align:center;
    overflow-x:hidden;

}
a img{
    height:300px;
    width:100%;
    object-fit:cover;
}
.content{
   
    text-align:center;
    width:100%;
    /* height:100%; */

    padding:0;
    margin:0;
}
.link{
    display:flex;
    flex-direction:column;
    justify-content:start;
}





</style>

   

@endsection