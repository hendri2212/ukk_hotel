<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case '':
                require "./views/home_page.php";
                break;
            case 'home':
                require "./views/home_page.php";
                break;
            case 'facility':
                include "./views/facility_page.php";
                break;
            case 'transaction':
                include "./views/transaction_page.php";
                break;
            
            default:
                http_response_code(404);
                echo "<h2 style='margin: auto auto'>404</h2>";
                echo "<h3 style='margin: auto auto'>Page Not Found</h3>";
                break;
        }
    }
?>