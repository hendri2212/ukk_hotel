<?php
    // class transaction {

        function connection() {
            require_once("../database/connection.php");
        }
        // $connection = mysqli_connect('localhost', 'root', '', 'hotel');
        
        function save() {
            // include "../database/connection.php";
            $conn = connection();

            $date_checkin   = $_POST["date_checkin"];
            $date_checkout  = $_POST["date_checkout"];
            $total          = $_POST["total"];
            $name_order     = $_POST["name_order"];
            $email          = $_POST["email"];
            $handphone      = $_POST["handphone"];
            $customer_name  = $_POST["customer_name"];
            $room_id        = $_POST["room_id"];

            $conn->query("INSERT INTO `transaction` (date_checkin, date_checkout, total, name_order, email, handphone, customer_name, room_id)
                VALUE ('$date_checkin', '$date_checkout', '$total', '$name_order', '$email', '$handphone', '$customer_name', '$room_id')
            ");
            header("Location: ../?page=home");
        }

        function update() {
            # code...
        }

        function delete() {
            # code...
        }
    // }

    if(isset($_POST['submit'])) {
        // $transaction = new transaction();
        // $transaction->connection;
        // var_dump($connection);
        save();
    }

    if(isset($_POST['update'])) {
        update();
    }
?>