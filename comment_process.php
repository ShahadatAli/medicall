<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "membership");

if(!empty($_POST))
{
    $_SESSION['error'] = array();
    extract($_POST);
    
    if(empty($nm))
    {
        $_SESSION['error']['nm']="Please enter your name";
    }
    if(empty($com))
    {
        $_SESSION['error']['com']="Please enter your review";
    }
    
    if(!empty($_SESSION['error']))
    {
        header("location:review.php");
    }
    else
    {
        
        $t=time();
            
        $q="insert into comment
            (c_nm,c_mno,c_desc,c_pid,c_time)
            values('$nm','$mno','$com','','$t')";
        mysqli_query($connect, $q);
        header("location:review.php");
    }
    
}
else
{
    header("location:review.php");
}

?>