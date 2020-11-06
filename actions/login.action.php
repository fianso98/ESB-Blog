<?php 
session_start();
require '../config/Database.class.php';
require '../helpers/validate.php';
try{
    //information from login page 
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //validation user
    validateEmail($email);
    //validation password
    validatePassword($pass);
    //Transaction begin
    $errors = [];
    //init db
    $db = new Database();
    $pdo=$db->getConnection();
    //start transaction
    $pdo->beginTransaction();
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email=? LIMIT 1');
    $stmt->execute([$email]);
    if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        if(password_verify($pass, $result['password'])){
            $_SESSION['is_logged_in'] = true;
            $_SESSION['id_user'] = $result['id_user'];
            $pdo->commit();
            header('Location: ../dashbord/mat-dash/examples/dashboard.php');
        }else{
            $errors['password']= 'password is incorrect';
            $_SESSION['errors'] = $errors;
            if($pdo->inTransaction()){
                $pdo->rollBack();
            }
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
    }else{
        $errors['user']= 'user not found please ask an administrator to register you';
        if($pdo->inTransaction()){
            $pdo->rollBack();
        }
        $_SESSION['errors'] = $errors;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}catch(Exception $e){
    throw new Exception();
}



