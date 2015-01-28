<?php
require_once("../model/database.php");

$connection = new msqli($host, $username, $password);

if($connection->connect_erro){
    
}