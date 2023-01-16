<?php
    function connection() {
        include "../database/connection.php";
    }

    function save() {
        connection();

        $date_checkin   = $_POST["date_checkin"];
        $date_checkout  = $_POST["date_checkout"];
        $total          = $_POST["total"];

        $conn->query("INSERT INTO `transaction` (date_checkin, date_checkout, total)
            VALUE ('$date_checkin', '$date_checkout', '$total')
        ");
        
    }

    if(isset($_POST['submit'])) {
       save();
    }
?>