<?php
include_once 'autoload.php';
$repo = new PersonneRepository();
$personne = $repo->findById($_GET['cin']);
session_start();
if (isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name']) {
    if ($personne->id_photo != 'unknown.jpg') {
        unlink("assets/image/" . $personne->id_photo);
    }

    $id = uniqid() . $_FILES['image']['name'];

    $path = 'assets/image/' . $id;
    copy($_FILES['image']['tmp_name'], $path);
    OperationTable::updateID('personne', $_GET['cin'], $id);
}
OperationTable::update('personne', $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['cin'], $_POST['section'], $_GET['cin']);
header('location:session.php');


?>




