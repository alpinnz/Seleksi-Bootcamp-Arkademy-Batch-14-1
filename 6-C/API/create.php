<?php
    if(isset($_POST['submitADD'])) {
        include 'koneksi.php';

        $Cashier = $_POST["Cashier"];
        $Product = $_POST["Product"];
        $Category = $_POST["Category"];
        $Price = $_POST["Price"];

        $sql = "INSERT INTO Product 
            (name, price, id_category, id_cashier) 
            VALUES 
            ('$Product', '$Price', '$Category', '$Cashier' )";
        
        if ($koneksi->query($sql) == TRUE) {
            header("Location: ../index.php"); 
        } else {
            echo "<br>-> $Product";
            echo "<br>-> $Price";
            echo "<br>-> $Category";
            echo "<br>-> $Cashier";
        }
    }
?>