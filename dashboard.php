<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Dashboard Admin</title>
</head>
<body>
    <div class="overflow-hidden p-3 p-md-5 mx-auto w-100 text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Merek Barang</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Ukuran Barang</th>
                <th scope="col">Pilihan</th>
                </tr>
            </thead>

            <?php
                include 'koneksi.php';
                $query = "SELECT * FROM tb_baju";

                $hasil = mysqli_query($koneksi, $query);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $id_baju = $data['id_baju'];
                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $data["id_baju"]; ?></td>
                        <td><?php echo $data["merek_baju"]; ?></td>
                        <td><?php echo $data["jenis_baju"]; ?></td>
                        <td><?php echo $data["ukuran_baju"]; ?></td>
                        <td>
                            <a href="edit.php?id_baju=<?php echo $id_baju;?>" class="btn btn-warning" role="button">Edit Barang</a>
                            <a href="hapus_action.php?id_baju=<?php echo $id_baju;?>" class="btn btn-danger" role="button">Hapus barang</a>
                        </td>
                    </tr>
                    </tbody>
                    <?php
                }
            ?>
        </table>
        <a class="btn btn-dark mt-5" href="index.php" role="button">Kembali</a>
        <a class="btn btn-dark mt-5" href="tambah.php" role="button">Tambah Barang</a>
    </div>
</body>
</html>