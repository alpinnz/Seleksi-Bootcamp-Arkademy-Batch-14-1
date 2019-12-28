<?php
    include 'koneksi.php';

    $sql = "SELECT
    Cashier.name AS cashier, 
    Product.name AS product, 
    Category.name AS category, 
    Product.price AS price
    FROM Product 
    INNER JOIN Category ON Product.id_category = Category.id 
    INNER JOIN Cashier ON Product.id_cashier = Cashier.id";

    
?>