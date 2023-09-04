@extends("layouts.layout")

@section("title", "Electronics Shop")

@section("content")
    <div class="mouse">
        <div id="key1" class="col"></div>
        <div id="key2" class="col"></div>
        <div id="key3" class="col"></div>
       
    </div>


    <!-- <div class="container-fluid">


        <div class="row d-flex  justify-content-around ">
            <div class="box-item  col col-lg-5 col-md-6 col-sm-8  m-2 d-flex flex-row justify-content-around p-3">
                <div class="left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-telephone phone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </div>
                <div class="vr"></div>
                <div class="right">
                    <div class="tm">
                        <p>Contact US  (10AM - 9PM) </p>
                    </div>
                    <div class="call">
                        <p>76873562 / 01748375642</p>

                    </div>


                </div>

            </div>
            <div class="box-item col col-lg-5 col-md-6 col-sm-8 m-2  d-flex flex-row justify-content-around p-3">
                <div class="left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-envelope msg" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                </div>
                <div class="vr"></div>
                <div class="right">
                    <div class="tm">
                        <p>For Corporate Deals & Complain</p>
                    </div>
                    <div class="call">
                        <p>electronicsshop@gmail.com</p>

                    </div>
                
            </div>
            
        </div>

        <div class="branch col com-lg-11 col-md-10 col-sm-12 d-flex  justify-content-center p-2">
            <div class="left">
                <p>Pabna Branch</p>
            </div>

            <div class="sub_branch">


                <div class="vr"></div>
                <div class="col col-md-9 col-sm-9 d-flex flex-row">
                    <div class="dd text-center p-2">
                        <div class="tm">
                                <p>For Laptop</p>
                        </div>
                        <div class="email">
                            <p>electronicsshop@gmail.com</p>
                        </div>                
                    </div>

                    <div class="vr"></div>

                    <div class="middle text-center p-2">
                        <div class="tdm">
                                <p>For Computer</p>
                        </div>
                        <div class="email">
                            <p>electronicsshop@gmail.com</p>
                        </div>                
                    </div>
                </div>
            </div>

            

        </div>





        <div class="contact_form ">
            <h3 class="text-center">Contact Us</h3>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div> -->














    <style>
       
        #inner{
            height:200px;
            background:green;
            margin:3px;
        }
        .row{
            margin-top:50px;
        }
        .contact_form{
            padding:0 40px;
           
            background:#ddd;

        }
        form{
            margin:10px 70px;
        }
        .box-item{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:5px;

        }
        .branch{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius:5px;
            margin-top:20px;
            margin-left:100px;
            margin-bottom:30px;
            margin-right:100px;
        }
        .phone{
            background:blue;
            padding:10px;
            border-radius:50%;
            color:white;
        }
        .msg{
            background:blue;
            padding:10px;
            border-radius:50%;
            color:white;
        }

        .mouse{
            display:flex;
            flex-direction:row;
            flex-wrap:wrap;
            background:blue;
        }
        #key1{
            height:200px;
            width:200px;
            background:green;
            margin:3px;
        }
        #key2{
            height:200px;
            width:200px;
            background:tan;
            margin:3px;
        } #key3{
            height:200px;
            width:200px;
            background:violet;
            margin:3px;
        }


        @media screen and (max-width: 576px) {
          .mouse{
            display:flex;
            flex-direction:column;
            /* background:red; */
            /* height:500px; */

          }
          #demo{
            height:10px;
          }
          
           

        }
    </style>
    @endsection
