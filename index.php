<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
        .bg-image {
            background-image: url('assets/background1.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white; 
        }
    
        .custom-text-color {
            color: #000000; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid bg-success">
        <a class="navbar-brand fw-bolder" href="#">Cek Toko Seblah</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active mx-3" aria-current="page" href="#barang">Daftar Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active mx-3" aria-current="page" href="#referensi">Referensi</a>
            </li> 
        </ul>
        <form class="d-flex" role="search">
            <a class="btn btn-outline-dark ms-4" href="login.php" role="button">Login</a>
        </form>
        </div>
    </div>
    </nav>

    <main>
        <div class="p-md-5 m-md-3 bg-body"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-image text-center">
            <div class="p-lg-5 mx-auto my-auto">
                <h1 class="display-4 fw-bold custom-text-color">Selamat Datang</h1>
                <h3 class="fs-5 text-muted mb-3 font-monospace">Selamat menjelajah di katalog kami, semoga harimu menyenangkan!</h3>
            </div>
        </div>
        <div class="p-md-5 m-md-3 bg-body"></div>
        <div class="p-md-5 m-md-3 bg-body"></div>

        <!-- Barang -->
        <div class="p-md-5 m-md-0 bg-dark" id="barang"></div>
        <div class="p-md-5 m-md-0 bg-dark"></div>
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-0 text-center bg-dark">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Merek Barang</th>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">Ukuran Barang</th>
                    </tr>
                </thead>

                <?php
                    include 'koneksi.php';
                    $query = "SELECT * FROM tb_baju";

                    $hasil = mysqli_query($koneksi, $query);
                    $no = 0;
                    while ($data = mysqli_fetch_array($hasil)) {
                        $id_barang = $data['id_baju'];
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $data["id_baju"]; ?></td>
                            <td><?php echo $data["merek_baju"]; ?></td>
                            <td><?php echo $data["jenis_baju"]; ?></td>
                            <td><?php echo $data["ukuran_baju"]; ?></td>
                        </tr>
                        </tbody>
                        <?php
                    }
                ?>
            </table>
        </div>
        <div class="p-md-5 m-md-0 bg-dark"></div>
        <div class="p-md-5 m-md-3 bg-body" id="referensi"></div>
        <div class="fs-4 p-md-5 m-md-3 bg-success">
            <h1>Referensi Toko</h1>
            <p>Silahkan kunjungi akun Media sosial toko di bawah ini!</p>
            <a target="_blank" href="https://www.instagram.com/insurgentclub_/">@insurgentclub_</a>
            <a target="_blank" href="https://www.instagram.com/thanksinsomnia/">@thanksinsomnia</a>
            <a target="_blank" href="https://www.instagram.com/starcrosskdi/">@starcrosskdi</a>
            <a target="_blank" href="https://www.instagram.com/legis.stuff/">@legis.stuff</a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>