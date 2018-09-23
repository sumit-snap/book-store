<?php
$username="";
$email="";
$errors=array();
$db = mysqli_connect("localhost" , "root", "", "registration") or die($db);

if(isset($_POST["register"]))
{
    $username=mysqli_real_escape_string($db,$_POST["username"]);
    $email=mysqli_real_escape_string($db,$_POST["email"]);
    $password_1=mysqli_real_escape_string($db,$_POST["paas_1"]);
    $password_2=mysqli_real_escape_string($db,$_POST["pass_2"]);
    
    
    if(empty($username)){
        array_push($errors,"Username is Required");
    } 
    if(empty($email)){
        array_push($errors,"Email is required is Required");
    } 
    if(empty($password_1)){
        array_push($errors,"Password is Required");
    }
    if($password_1 != $password_2){
        array_push($errors,"The password do nt match");
    }
    if(count($errors) ==0){
        $password=crypt($password_1);
        $sql="insert into users(username,email,password) values('$username','$email','$password')";
        mysqli_query($db,$sql);
    }
}


?>