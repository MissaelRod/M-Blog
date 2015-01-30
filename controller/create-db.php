<?php

require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("<p>Error: " . $connection->connect_error . "</p>");
} else {
    echo "sucsess: " . $connection->host_info;
}

$exists = $connection->select_db($database);

if (!$exists) {
    $query = $connection->query("CREATE DATABASE $database");

    if ($query) {
        echo "<p>Successfully created database" . $database . "</p>";
    }
} else {
    echo "<p>database has already exists.</p>";
}

$query = $connection->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "<p>succesfully created table: posts</p>";
} else {
    echo "<p>$connection->error</p>";
}

$connection->close();
