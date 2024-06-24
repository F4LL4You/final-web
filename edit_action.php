
<?php
    include 'koneksi.php';
    $idBaju = $_GET['id_baju'];
    $merekBaju = $_POST['merek_baju'];
    $jenisBaju = $_POST['jenis_baju'];
    $ukuranBaju = $_POST['ukuran_baju'];

    echo $merek_baju;
    $query = "UPDATE tb_baju SET merek_baju = '$merekBaju', jenis_baju = '$jenisBaju', ukuran_baju = '$ukuranBaju' WHERE tb_baju.id_baju = '$idBaju'";
    if($berhasil = mysqli_query($koneksi, $query)){
        ?>
        <script>
            alert('Pesanan Berhasil Diedit')
            window.location = 'dashboard.php'
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Pesanan Gagal Diedit')
        </script>
        <?php
    }
?>
