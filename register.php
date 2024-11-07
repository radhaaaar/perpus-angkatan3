<?php
include 'koneksi.php';
//jika button daftar di klik atau ditekan
if (isset($_POST['daftar'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_pengguna = $_POST['nama_pengguna'];

    //masukan data kedalam tabel user kolom kolom tabel user() dan nilainya diambil dari inputan sesuai dengan urutan kolomnya
    mysqli_query($koneksi, "INSERT INTO user (email,password,nama_lengkap,nama_pengguna) VALUES('$email','$password','$nama_lengkap','$nama_pengguna')");
    //jika berhasil, maka akan dikembalikan ke halaman login
    header('location:login.php?register=berhasil');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mx-auto mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h3>Medsos X - Reza Ibrahim</h3>
                            </div>
                            <form action="" method="post">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">
                                        email
                                    </label>
                                    <input type="text" class="form-control" name="email" placeholder="masukan email anda">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="password">
                                        password
                                    </label>
                                    <input type="password" name="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">
                                        Nama Lengkap
                                    </label>
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="masukan nama lengkap">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">
                                        Nama Pengguna
                                    </label>
                                    <input type="text" class="form-control" name="nama_pengguna" placeholder="masukan nama pengguna">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="d-grid">
                                        <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body"></div>
                        <p>Sudah Punya akun?<a href="register.php" class="text-secondary">Buat akun</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>