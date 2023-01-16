<?php
    $conn->query("CREATE TABLE transaction (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        date_checkin date,
        date_checkout date,
        total int,
        name_order char(100),
        email varchar(100),
        handphone varchar(15),
        customer_name char(100),
        room_id int,
        INDEX (room_id),
        FOREIGN KEY (room_id) REFERENCES room(id)
    )");
?>