<?php
include_once 'autoload.php';
$user = new Users();
$Users = $user->findAll(PDO  ::FETCH_OBJ);
session_start();

$email = $_POST['username'];
$password = $_POST['pwd'];


$bool = true;
if (isset($email) && isset($password)) {
    foreach ($Users as $utilisateur) {
        if ($email == $utilisateur->id && $password == $utilisateur->password) {
            $_SESSION['user'] = $utilisateur->id;
            header('location:session.php');
            $bool = false;
        }
    }
    if ($bool) {
        $_SESSION['error'] = "Veuillez vérifier vos credentials";
        header('location:index.php');
    }
} else {
    $_SESSION['error'] = "Veuillez vérifier vos credentials";
    header('location:index.php');

}
