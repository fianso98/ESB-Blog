<?php 
session_start();
require '../config/Database.class.php';
$user=$_POST["user_name"];



$db = new Database();
$pdo=$db->getConnection();
$stmt=$pdo->prepare("update users set user= ? where id_user = ?");
$stmt->execute([$user,$_SESSION["id_user"]]);
header("Location: ../dashbord/mat-dash/examples/user.php#update_user");
$_SESSION["userName_update"]=true;
 