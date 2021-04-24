<?php
include_once 'autoload.php';
session_start();

if ($_POST['nom'] != '')
    OperationTable::add('personne', $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['age'], $_POST['CIN'], $_POST['section']);
header('location:session.php');
