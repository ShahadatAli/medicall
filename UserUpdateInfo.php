<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Update</title>
        <?php
                include'headerclean.php';
        ?>
        
    </head>
    
    <body>
       
        <center>
        <h1>UPDATE YOUR INFORMATION</h1>
        <form action="userupdatecode.php" method="post">
            <br/>
            <br/>
            Email: <input type="email" name="uemail" id="uemail" placeholder="example@gmail.com" title="your email here">
            <br/>
            <br/>
            Name: <input type="text" name="uname" id="uname">
            <br/>
            <br/>
            Phone: <input type="text" name="uphone" id="uphone">
            <br/>
            <br/>
            Age: <input type="number" name="uage" id="uage">
            <br/>
            <br/>
            Address: <input type="text" name="uaddress" id="uaddress">
            <br/>
            <br/>
            Password: <input type="password" name="upass" id="upass">
            <br/>
            <br/>
            <input type="submit" value="update">
        </form>
        </center>
    </body>
</html>