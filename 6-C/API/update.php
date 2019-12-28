<?php
    if(isset($_POST['submitEDIT'])) {
        include 'koneksi.php';
        $id = $_POST["Id"];
        $Cashier = $_POST["Cashier"];
        $Product = $_POST["Product"];
        $Category = $_POST["Category"];
        $Price = $_POST["Price"];

        $sql = "UPDATE Product 
        SET name = '$Product', price = '$Price',id_category = '$Category', id_cashier = '$Cashier' 
        WHERE id='$id' ";
    
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