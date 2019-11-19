<?php
/**
 * Created by PhpStorm.
 * User: Nayana Madhuwantha
 * Date: 1/12/2019
 * Time: 10:51 PM
 */
session_start();
include 'Database.include.php';
date_default_timezone_set("Asia/Colombo");
$email=$_POST['email'];
$password=$_POST['password'];
$encriptedPassword=md5($password);

$ApiDatabase = new ApiDatabase();
$connApi = $ApiDatabase->getConnection();

$sql="SELECT * FROM ApiCredentials WHERE UserName='$username' AND Password='$encriptedPassword'";
$result=$connApi->query($sql);

if(!$row=$result->fetch_assoc()){
    echo "Your username or password is incorrect";
    header("Location: ../login.php?error=incorrectUsernameOrPassword");
}else{
    $_SESSION['username']=$row['UserName'];
    header("Location: ../index.php");
}
