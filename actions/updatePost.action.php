<?php 
session_start();
require '../config/Database.class.php';
$id=$_POST["id_article"];
$content=$_POST["content"];
$categorie=$_POST["categorie"];
$title=$_POST["title"];


$db = new Database();
$pdo=$db->getConnection();
$stmt=$pdo->prepare("update articles set article_name = ? , article_content = ? , id_categorie = ? where id_article = ? and id_user = ?");
$stmt->execute([$title,$content,$categorie,$id,$_SESSION["id_user"]]);
header("Location: ../dashbord/mat-dash/examples/tables.php#updated_post");
$_SESSION["post_update_success"]=true;
 