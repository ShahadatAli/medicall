<?php

    if(isset($_POST['uemail']) && isset($_POST['uname'])){
        
        $i=$_POST['uemail'];
        $k=$_POST['uname'];
        
        try{
            $conn=new PDO("mysql:host=localhost:3306;dbname=membership", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
            echo "<script>location.assign('membershipconfirm.php');</script>";
        }
        
        $mysqlcode="SELECT * FROM persons WHERE email='$i' and name='$k' ";
        
        $ret=$conn->query($mysqlcode);
        if($ret->rowCount()==1){
            echo "<script>alert('You are already a member!')</script>";
            echo "<script>location.assign('membershipconfirm.php');</script>";
            
        }
        else{
           
            $mysqlcode="INSERT INTO persons VALUES('$i','$k')";
            echo "<script>alert('You are a member now!')</script>";
            
            try{
                $conn->exec($mysqlcode);
            
                echo "<script>location.assign('home.php');</script>";
            }
            catch(PDOException $ex){
                echo "<script>alert('You are already a member!')</script>";
                echo "<script>location.assign('membershipconfirm.php');</script>";
            }
        }
    }
?>