@extends("layouts.bootstrap")


@section("title", "Electronics Shop")

   
    <div class="loginBox mx-3">
        <div class="header">
            <h2 class="text-success">Register User</h2>

        </div>
        <div class="form_area">
            <form action="" id="form" method="post">
            
               
        
                <div class="username d-flex flex-column justify-content-between my-2">
                    <h6 for="dept">Username :</h6>
                    <input type="text" placeholder="Username">
                </div>

                <div class="email d-flex flex-column justify-content-between my-2">
                    <h6 for="email"> E-mail :</h6>
                    <input type="text" name="email" id="email" placeholder="Enter Email">
                </div>

                <div class="user_role d-flex flex-column justify-content-between my-2">
                    <h6 for="user_role"> User Role :</h6>
                    <select name="" id="">
                        <option value="">author</option>
                        <option value="">Editor</option>
                        <option value="">Writer</option>
                    </select>
                </div>

                <div class="password d-flex flex-column justify-content-between my-2">
                    <h6 for="password"> Password :</h6>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                </div>

                <div class="confirmemailPassword d-flex flex-column justify-content-between my-2">
                    <h6 for="confirmPassword"> Re- Password :</h6>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter Re-Password">
                </div>

                

                <div class="login">
                    <input type="submit" class="btn btn-primary" vlaue="Continue" name="submit" id="submit">
                </div>

            </form>
        </div>
        
            <div class="msg"></div>
    </div>



           <!-- css start from here............... -->
    <style>
    
        input{
                    width:250px;
                    border:1px solid #ddd;
                    padding:5px;
                    font-size:14px;
                    
                }
        .loginBox{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            height: 500px;

            font-size:20px;

        }
        select{
            width:250px;
            border:1px solid #ddd;
            padding:5px;
            font-size:14px;



        }

       
       
  
       
    </style>
