<?php
    function get() {
        include "../database/connection.php";

        $query = $conn->query("SELECT * FROM room");
    }
?>