<?php 

function validatePassword($pass){
    if(!isset($pass) || strlen($pass) < 8){
        $errors['password'] = 'Password is too short';
        $_SESSION['errors'] = $errors;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
function validateEmail($email){
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    $errors['email'] = "Invalid email format";
    $_SESSION['errors'] = $errors;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
    }
}
