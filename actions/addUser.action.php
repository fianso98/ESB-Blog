<?php 
session_start();
require '../config/Database.class.php';

$user=$_POST["user_name"];
$email=$_POST["user_email"];
$pass=$_POST["user_pass"];
$pass=password_hash($pass, PASSWORD_DEFAULT);


$db = new Database();
$pdo=$db->getConnection();
$stmt=$pdo->prepare("insert into users (user,password,email) values(?,?,?)");
$stmt->execute([$user,$pass,$email]);
header("Location: ../dashbord/mat-dash/examples/user.php#add_user");
$_SESSION["user_added_success"]=true;
 