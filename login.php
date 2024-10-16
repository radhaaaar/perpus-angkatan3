

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
                            <div class="card-title">
                                <h3>selamat datang diperpus kami</h3>
                                <p>silahkan masuk dengan akun anda</p>
                            </div>
                            <form action="actionLogin.php" method="post">
                                <div class="form-group mb-3"></div>
                                <label for="" class="form-label">
                                    email
                                </label>
                                <input type="text" class="form-control" name="email" placeholder="masukan email anda">
                                <div class="form-group mb-3">
                                    <label for="" class="password">
                                        password
                                    </label>
                                    <input type="password" name="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                </div>
                                <div class="form-group mb-3">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">masuk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>