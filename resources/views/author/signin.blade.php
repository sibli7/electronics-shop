@extends("layouts.bootstrap")

@section("title", "Electronics Shop")

  
    <div class="loginBox">
    
        <div class="form_area">
            <form action="login_page_code.php" id="form" method="post">
                    <h3 class="text-success pb-5">Account Login</h3>

                
               
        
                <div class="username d-flex flex-column justify-content-between">
                    <h6 for="dept">Username :</h6>
                    <input type="text" placeholder="Username">
               
                    <h6 for="email"> E-mail :</h6>
                    <input type="text" name="email" id="email" placeholder="Enter Email">
                </div>

                

                <div class="login my-5 col col-lg-12">
                    <input class="btn btn-primary" type="submit" value="Login" name="submit" id="submit">
                </div>

            </form>
        </div>
        
            <div class="msg"></div>
    </div>



           <!-- css start from here............... -->
    <style>
    
        input{
                    width:300px;
                    border: 1px solid #ddd;
                    
                }
        .loginBox{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            height: 500px;

            font-size:20px;
            margin:10px;

        }
        #form{
            display:flex;
            justify-content:space-around;
            flex-direction:column;
            /* border:1px solid grey; */

            /* height: 200px; */
            padding:8px;
        }
      
       
  
       
    </style>

