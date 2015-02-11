<?php

require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);