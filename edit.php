<?php
    include 'koneksi.php';

    $id_baju = $_GET['id_baju'];
    $query = "SELECT * FROM tb_baju WHERE id_baju = '$id_baju'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit item</title>
</head>
<body>
<div class="container">
        <h1>Edit Pesanan</h1>
        <p>Silahkan isi form dibawah ini</p>
        <form action="edit_action.php?id_baju=<?php echo $id_baju;?>" method="POST">
        <?php
            $hasil = mysqli_query($koneksi, $query);
            if (mysqli_num_rows($hasil)> 0) {
              while ($data = mysqli_fetch_assoc($hasil)) {
                $id_baju = $data['id_baju'];
                ?>

            <p>ID Barang</p>
            <input type="text" name="id_baju" value="<?php echo $data['id_baju'];?>" disabled>
            <p>Merek Barang</p>
            <input type="text" placeholder="Masukan Merek Baju" name="merek_baju" value="<?php echo $data['merek_baju'];?>">
            <p>Jenis Barang</p>
            <input type="text" placeholder="Masukan Jenis Baju" name="jenis_baju" value="<?php echo $data['jenis_baju'];?>">
            <p>Ukuran Barang</p>
            <input type="text" placeholder="Masukan Ukuran Baju" name="ukuran_baju" value="<?php echo $data['ukuran_baju'];?>">
            <button type="submit" name="edit_pesanan">Edit</button>

                <?php
              }
            }
        ?>
            
       </form>
    
        <div class="register"></div>
    </form>
    
</body>
</html>