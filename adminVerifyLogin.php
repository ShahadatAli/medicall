<?php
   

    if(isset($_POST['usname']) && isset($_POST['upass'])){
        ///processing
        $i=$_POST['usname'];
        $j=$_POST['upass'];
        
        ///creating database connection
        ///I will use "PDO" connection method
        
        try{
            ///try to connect with database
            $conn=new PDO("mysql:host=localhost:3306;dbname=admininfo", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
            ///back to login.php
            echo "<script>location.assign('adminlogin.php');</script>";
        }
        
        
        ///this line is executed meaning db connection successful
        $mysqlcode="SELECT * FROM admin WHERE username='$i' and password='$j' ";
        ///echo $mysqlcode;
        
        ///executing the query
        $ret=$conn->query($mysqlcode);
        if($ret->rowCount()==1){
            ///valid user found
            session_start();
            $_SESSION["isloggedin"]=true;
            echo "<script>location.assign('adminhome.php');</script>";
        }
        else{
            ///invalid user email and comment
            echo "<script>location.assign('adminlogin.php');</script>";
        }
        
    }
    else{
        ///back to login.php page
        ///javascript
        ///<script>location.assign('pagename.php');</script>
        
        ///how to write frontend code (html, css, js) within php
        //way 1: echo "html/css/js";
        //way 2: pore dekhabo
        echo "<script>location.assign('adminlogin.php');</script>";
    }
    
?>