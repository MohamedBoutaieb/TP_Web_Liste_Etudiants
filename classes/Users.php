<?php
include_once 'autoload.php';

class Users extends Repository
{
    public function __construct()
    {
        parent::__construct('users');
    }

}