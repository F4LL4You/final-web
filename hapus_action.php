<?php
    include 'koneksi.php';
    $id_baju = $_GET['id_baju'];
    $query ="DELETE FROM tb_baju WHERE id_baju = '$id_baju'";
    $berhasil_hapus = mysqli_query($koneksi, $query);
 
    if($berhasil_hapus){
        echo"
        <script>
        alert('Pesanan Berhasil Dihapus')
        window.location = 'dashboard.php'
        </script>";
 
    } else {
        echo"
        <script>
        alert('Pesanan Gagal Dihapus!')
        window.location = 'dashboard.php'
        </script>";
    }
?>