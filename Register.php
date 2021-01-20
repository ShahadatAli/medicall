<?php

    if(isset($_POST['uemail']) && isset($_POST['upass']) && isset($_POST['uname']) && isset($_POST['uphone']) && isset($_POST['uage']) && isset($_POST['uaddress'])){
        
        $i=$_POST['uemail'];
        $j=$_POST['upass'];
        $k=$_POST['uname'];
        $l=$_POST['uphone'];
        $m=$_POST['uage'];
        $n=$_POST['uaddress'];
        
        try{
            $conn=new PDO("mysql:host=localhost:3306;dbname=dbmsweb", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
            echo "<script>location.assign('signup.php');</script>";
        }
        
        $mysqlcode="SELECT * FROM users WHERE email='$i' and pass='$j' ";
        
        $ret=$conn->query($mysqlcode);
        if($ret->rowCount()==1){
            echo "<script>location.assign('signup.php');</script>";
        }
        else{
           
            $mysqlcode="INSERT INTO users VALUES('$i','$j','$k','$l','$m','$n')";
            
            
            try{
                $conn->exec($mysqlcode);
            
                echo "<script>location.assign('login.php');</script>";
            }
            catch(PDOException $ex){
                echo "<script>location.assign('signup.php');</script>";
            }
        }
    }
?>