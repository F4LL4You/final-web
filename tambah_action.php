<?php
    include 'koneksi.php';

    $Merek_baju = $_POST["merek_baju"];
    $Jenis_baju = $_POST["jenis_baju"];
    $Ukuran_baju = $_POST["ukuran_baju"];
    
    $query = INSERT INTO `tb_baju` (`merek_baju`, `jenis_baju`, `ukuran_baju`) VALUES ('insurjennn', 'work shirt', 'L');
    $sql = mysqli_query($koneksi, $query);
      
?>

<script>
    alert("Berhasil Menambah Barang!");
    window.location = "dashboard.php";
</script>
