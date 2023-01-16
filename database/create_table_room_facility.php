<?php
    mysqli_query($conn, "CREATE TABLE room_facility (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        room_id int,
        facility_id int,
        INDEX (room_id, facility_id),
        FOREIGN KEY (room_id) REFERENCES room(id),
        FOREIGN KEY (facility_id) REFERENCES facility(id)
    )");
?>