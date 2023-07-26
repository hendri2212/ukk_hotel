<?php
    $conn->query("CREATE TABLE room (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name_room varchar(255),
        images varchar(255),
        luas int
    )");

    $conn->query("INSERT INTO room (name_room) VALUES
        ('SUPERIOR'),
        ('DELUXE'),
        ('PRIVATE')
    ");
?>