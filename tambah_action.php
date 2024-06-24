<?php
    include 'koneksi.php';

    $merekBaju = $_POST["merek_baju"];
    $jenisBaju = $_POST["jenis_baju"];
    $ukuranBaju = $_POST["ukuran_baju"];
    
    $query = "INSERT INTO tb_baju (merek_baju, jenis_baju, ukuran_baju) VALUES ('$merekBaju', '$jenisBaju', '$ukuranBaju');";
    $sql = mysqli_query($koneksi, $query);
      
?>

<script>
    alert("Berhasil Memesan!");
    window.location = "dashboard.php";
</script>