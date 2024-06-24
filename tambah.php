<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Buat Pesanan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div class="container">
        <h1>Buat Pesanan!</h1>
       
        <div class="container mt-5">
        <h2>Tambah Baju</h2>
        <form action=""koneksi.php method="POST"> 
            <div class="form-group">
                <label for="namaBarang">Form Tambah Baju</label>
                <input type="text" class="form-control" name="merek_baju" placeholder="Masukkan Nama Barang">
            </div>
            <div class="form-group">
                <label for="jenisBarang">Jenis Barang</label>
                <input type="text" class="form-control" name="jenis_baju" placeholder="Masukkan Jenis Barang">
            </div>
            <div class="form-group">
                <label for="jumlahBarang">Jumlah Barang</label>
                <input type="number" class="form-control" name="ukuran_baju" placeholder="Masukkan Jumlah Barang">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" rows="3" placeholder="Masukkan Keterangan"></textarea>
            </div>
            <a class="btn btn-warning mt-5" href="index.php" role="button">Kembali</a>
            <a class="btn btn-primary mt-5" href="index.php" role="button">Tambah pesanan</a>
        </form>
    </div>
</body>
</html>