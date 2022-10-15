<?php include('server.php') ?>
<html>
    <head>
        <title>LogIn Form</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-color: black;
            }
        
            .loginbox{
                width: 320px;
                height: 350px;
                background: white;
                margin-top: 15%;
                margin-left: 38%;
                box-sizing: border-box;
                padding: 40px 10px;
                border-radius: 20px;  
            }

            h1{
                margin: 0;
                text-align: center;
                font-size: 30px;
            }

            .loginbox p{
                margin: 0;
                padding: 0;
                font-weight: bold;
            }
            .loginbox input{
                width: 100%;
                margin-bottom: 20px;
            }

            .loginbox input[type="text"], input[type="password"]
            {
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 16px;
            }

            .loginbox input[type="submit"]
            {
                border: none;
                outline: none;
                height: 40px;
                background: rgba(0,0,0,.5);
                color: #fff;
                font-size: 18px;
                border-radius: 20px;
            }

            .loginbox input[type="submit"]:hover
            {
                cursor: pointer;
                background: black;
                color: white;
            }

            .loginbox a{
                text-decoration: none;
                font-size: 15px;
                line-height: 20px;
                color: black;
                text-align: center;
            }
            .loginbox a:hover
            {
                color: white;
                background: black;
                border-radius: 5px;
            }
            
        </style>
    </head>

    <section>   
        <div class="loginbox">
            <h1 style="color:black;">Login Here</h1>
            <form method="post" action="index.php">
            <?php include('error.php'); ?>
                <p style="color:black;">Username</p>
                <input type="text" placeholder="Enter your username" name="username" style="color:black;">

                <p style="color:black;">Password</p>
                <input type="password" placeholder="Enter your password" name="password" style="color:black;">
                
                <input type="submit" name="login_user" value="Login"><br>
                <center>
                <a href="register.php">Sign Up</a><br>
                </center>
            </form>
        </div>
        </secntion>
    </body>
    
</html>