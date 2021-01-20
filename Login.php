<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
        <style>
            body{
                background-image: url(backnew.jpg);
 
                margin-left: -20%;

            }
            
            
            .logo{
                height:auto;
                width: auto;
                
            }
            .container
            {
                background-image: url(images/Hexagon.png);
                background-position:center;
                float: right;
                text-align: center;
                box-sizing: border-box;
                width: 510px;
                  height: 100%;  
                  padding: 50px;
                margin-top: 50px;
                margin-right: 20px;
            }
            
        </style>
    </head>
    
    <body>
        <br/>
        <div class="container">
           <img class="logo" src="images/mainlogo.png">
        <br/> 
        
        <br/> 
        <h4 style="margin: auto auto 20px auto;">Please Login to avail our services</h4>
        
        
        <form action="verifylogin.php" method="post">
            
            Email: <input type="email" name="uemail" id="uemail"  placeholder="example@gmail.com" title="your email here" >
            <br/>
            <br/>
            Password: <input type="password" name="upass" id="upass">
            <br/>
            <br/>
            <center><button name="login" class="btn btn-primary">Login</button></center>
        </form>
        <form action="signup.php" method="post">
            <br/>
            <p style="margin-bottom: 10px; color: maroon">Don't have an account?</p>
            <input type="submit" value="Register!">
            
        </form>
            
        </div>
        
    </body>
</html>