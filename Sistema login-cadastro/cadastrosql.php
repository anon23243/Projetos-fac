<?php

//Database Configuration File
require ('config.php');
error_reporting(0);
if(isset($_POST['signup']))
{
//Getting Post Values
$fullname=$_POST['fname'];
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobilenumber'];
$password=md5($_POST['password']);
$dtnascimento = $_POST['dtnasc'];
// Query for validation of username and email-id
$ret="SELECT * FROM userdata where (UserName=:uname ||  UserEmail=:uemail)";
$queryt = $dbh -> prepare($ret);
$queryt->bindParam(':uemail',$email,PDO::PARAM_STR);
$queryt->bindParam(':uname',$username,PDO::PARAM_STR);
$queryt -> execute();
$results = $queryt -> fetchAll(PDO::FETCH_OBJ);
if($queryt -> rowCount() == 0)
{
// Query for Insertion
$sql="INSERT INTO userdata(FullName,UserName,UserEmail,UserMobileNumber,LoginPassword,udtnasc) VALUES(:fname,:uname,:uemail,:umobile,:upassword,:udtnascimento)";
$query = $dbh->prepare($sql);
// Binding Post Values
$query->bindParam(':fname',$fullname,PDO::PARAM_STR);
$query->bindParam(':uname',$username,PDO::PARAM_STR);
$query->bindParam(':uemail',$email,PDO::PARAM_STR);
$query->bindParam(':umobile',$mobile,PDO::PARAM_INT);
$query->bindParam(':upassword',$password,PDO::PARAM_STR);
$query->bindParam(':udtnascimento',$dtnascimento,PDO::PARAM_INT);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="You have signup  Scuccessfully";
}
else
{
$error="Something went wrong.Please try again";
}
}
 else
{
$error="Username or Email-id already exist. Please try again";
}
}

?>