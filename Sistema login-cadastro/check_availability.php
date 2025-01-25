<?php
require_once('config.php');
error_reporting(E_ALL ^ E_WARNING);
// Code for checking username availabilty
if(!empty($_POST["username"])) {
$uname= $_POST["username"];
$sql ="SELECT UserName FROM  userdata WHERE UserName=:uname";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
echo "<span style='color:red'>Login em uso.</span><br>";
} else{
echo "<span style='color:green'></span>";
}
}
// Code for checking email availabilty
if(!empty($_POST["email"])) {
$email= $_POST["email"];
$sql ="SELECT UserEmail FROM  userdata WHERE UserEmail=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
echo "<span style='color:red'>Email já existe.</span>";
} else{
echo "<span style='color:green'></span>";
}
}
?>