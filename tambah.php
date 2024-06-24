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
        <h2>Tambah Barang</h2>
        <form action="login_action.php" method="POST"> 
            <div class="form-group">
                <label for="Merek_baju">Merek Baju</label>
                <input type="text" class="form-control" name="merek_baju" placeholder="Masukkan Merek Baju">
            </div>
            <div class="form-group">
                <label for="Jenis_baju">Jenis Baju</label>
                <input type="text" class="form-control" name="jenis_baju" placeholder="Masukkan Jenis Baju">
            </div>
            <div class="form-group">
                <label for="Ukuran_baju">Ukuran Baju</label>
                <input type="text" class="form-control" name="ukuran_baju" placeholder="Masukkan Ukuran Baju">
            </div>
            <a class="btn btn-warning mt-5" href="index.php" role="button">Kembali</a>
            <button class="btn btn-primary mt-5" type="submit" name="tambah">Tambah</button>
        </form>
    </div>
</body>
</html>