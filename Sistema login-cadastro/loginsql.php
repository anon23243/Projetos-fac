<?php
  session_start();
//Database Configuration File
include('config.php');
error_reporting(0);
  if(isset($_POST['login']))
  {
    // Getting username/ email and password
    $uname=$_POST['username'];
    $password=md5($_POST['password']);
    // Fetch data from database on the basis of username/email and password
    $sql ="SELECT UserName,UserEmail,LoginPassword FROM userdata WHERE (UserName=:usname || UserEmail=:usname) and (LoginPassword=:usrpassword)";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':usname', $uname, PDO::PARAM_STR);
    $query-> bindParam(':usrpassword', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    $_SESSION['userlogin']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'welcome.php'; </script>";
  } else{
    echo "<script>alert('Invalid Details');</script>";
  }
}
?>