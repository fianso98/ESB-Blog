<?php 
session_start();
require '../config/Database.class.php';
$id=$_POST["id_article"];


$db = new Database();
$pdo=$db->getConnection();
$stmt=$pdo->prepare("DELETE FROM `articles` WHERE `articles`.`id_article` = ? and `articles`.`id_user` = ?");
$stmt->execute([$id,$_SESSION["id_user"]]);
header("Location: ../dashbord/mat-dash/examples/tables.php#deleted_post");
$_SESSION["post_delete_success"]=true;
 