<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "root";

    $conn   = new mysqli($servername, $username, $password);

    $drop   = "DROP DATABASE IF EXISTS hotel";
    $conn->query($drop);

    $sql    = "CREATE DATABASE hotel";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    include "connection.php";
    include "create_table_room.php";
    include "create_table_facility.php";
    include "create_table_room_facility.php";
    include "create_table_transaction.php";
    include "create_table_user.php";
?>