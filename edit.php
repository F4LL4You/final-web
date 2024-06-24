<?php
    include 'koneksi.php';

    $id_baju = $_GET['id_baju'];
    $query = "SELECT * FROM tb_toko WHERE id_baju = '$id_baju'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit item</title>
</head>
<body>
<h1>Edit data</h1>
    
</body>
</html>