<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Boostrap-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <title>Toko ABC</title>
        <!--CSS-->
        <link rel="stylesheet" href="style.css" />
    </head>
    <body id="bodylogin">
        <!--Utama-->
        <section>
            <div class="container-fluid">
                <div class="box">
                    <!-- Form Login -->
                    <div class="row justify-content-center">
                        <div class="col-sm-12">
                            <div class="row ">
                                <div id="boxlogin" class="col-md-8 position-absolute top-50 start-50 translate-middle ">
                                    <div class="row justify-content-center">
                                        <div id="boxdalam" class="col-md-8">
                                            <form action="" method="post">
                                                <h1 class="h2 mb-3 fw-normal text-center" >TOKO ABC</h1>
                                                <hr>
                                                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" name="kode_user" id="kode_user" placeholder="Kode User Toko ABC">
                                                    <label for="kode_user">Kode User</label>
                                                </div>
                                                <div class="form-floating mb-5">
                                                    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                                                    <label for="Password">Password</label>
                                                </div>
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <button id="tombollogin" class="btn btn-lg btn-primary" type="submit" value="submit" name="submit" id="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Form Login-->
                </div>
            </div>
        </section>
        <!--AKhir Utama-->
        <!--Boostrap-->
		<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>