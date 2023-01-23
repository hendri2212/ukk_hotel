<?php
    mysqli_query($conn, "CREATE TABLE facility (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name_facility varchar(255)
    )");

    $conn->query("INSERT INTO facility (name_facility) VALUES
        ('TV'),
        ('KULKAS'),
        ('AC'),
        ('MEJA DAN KURSI KERJA'),
        ('WATER HITER')
    ");
?>