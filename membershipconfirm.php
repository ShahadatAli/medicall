<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Membership</title>
        <style>

        </style>
    </head>
    
    <body>
       		<?php
                include'headerclean.php';
        ?>
        <center>
        <div class="contain">
           <h1>Be a member today and avail discounts on routine checkups</h1>
        <form action="membership.php" method="post">
            <br/>
            <br/>
            Email: <input type="email" name="uemail" id="uemail" placeholder="example@gmail.com" title="your email here">
            <br/>
            <br/>
            Name: <input type="text" name="uname" id="uname">
            <br/>
            <br/>
            <input type="submit" value="Be a member now!">
        </form>
            
        </div>
        
        </center>
    </body>
</html>