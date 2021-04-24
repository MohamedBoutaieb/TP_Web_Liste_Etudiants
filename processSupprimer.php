<?php
include_once 'autoload.php';
$repo = new PersonneRepository();
$personne = $repo->findById($_GET['cin']);
session_start();
if ($personne->id_photo != 'unknown.jpg') {
    unlink("assets/image/" . $personne->id_photo);
}
OperationTable::delete('personne', $_GET['cin']);
header('location:session.php');
?>


