<?php
    mysqli_query($conn, "CREATE TABLE user (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        full_name varchar(255),
        username varchar(255),
        password varchar(255),
        role enum('administrator','receptionis')
    )");
?>