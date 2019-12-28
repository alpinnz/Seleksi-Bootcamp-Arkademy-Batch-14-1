<?php
    if(isset($_GET['id_product'])) {
        include 'koneksi.php';
        $Product = $_GET['id_product'];

        $sql = "DELETE FROM Product WHERE id='$Product' ";
    
        if ($koneksi->query($sql) == TRUE) {
            header("Location: ../index.php"); 
        } else {
            echo "<br>-> $Product";
        }
    }
?>