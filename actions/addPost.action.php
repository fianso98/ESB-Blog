<?php 
session_start();
require '../config/Database.class.php';

$content=$_POST["content"];
$categorie=$_POST["categorie"];
$title=$_POST["title"];


$db = new Database();
$pdo=$db->getConnection();
$stmt=$pdo->prepare("insert into articles (article_name,article_content,id_categorie,id_user) values(?,?,?,?)");
$stmt->execute([$title,$content,$categorie,$_SESSION["id_user"]]);
header("Location: ../dashbord/mat-dash/examples/tables.php#added_post");
$_SESSION["post_add_success"]=true;
 