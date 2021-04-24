<?php
include_once 'autoload.php';
include_once 'personneList.php';
include_once 'isConnected.php';


if (!(isset($_SESSION['nom']))) {
    $_SESSION['nom'] = 'connected';
    OperationTable::initialise('personne');
    header('location:session.php');
} ?>
