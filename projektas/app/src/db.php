<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "forma1");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Sorry, we have a problem.\n";
        echo 'Error: ' . $mysqli->connect . '\n';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO klientai (name, email, subject, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[message]')");