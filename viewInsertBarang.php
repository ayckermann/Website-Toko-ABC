<!DOCTYPE html>
<html lang="en" id="htmlview">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Boostrap-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <title>Toko ABC</title>
        <!--CSS-->
        <link rel="stylesheet" href="style.css" />
        <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    </head>
    <body id="bodyview">
        <div class="wrapper">
            <div class="body-overlay"></div>
                <!-- sidebar -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3><img src="img/logoabc.png" class="img-fluid"/><span>Toko ABC<span></h3>
                    </div>
                    <ul class="list-unstyled components">
                            <li class="">
                                <a href="?view=" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                            </li>
                            <div class="small-screen navbar-display">
                                <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                                    <a href="logout.php"><i class="material-icons">logout</i><span>logout</span></a>
                                    
                                </li>
                            </div>
                            <li class="">
                                <a href="?user="><i class="material-icons">person</i><span>User</span></a>
                            </li>
                            <li class="active">
                                <a href="?barang="><i class="material-icons">grid_on</i><span>Barang</span></a>
                            </li>
                            <li class="">
                                <a href="#"><i class="material-icons">border_color</i><span>Update Data</span></a>
                            </li>
                            <li class="">
                                <a href="#"><i class="material-icons">content_copy</i><span>Laporan</span></a>
                            </li>
                            <li class="">
                                <a href="#"><i class="material-icons">date_range</i><span>Kalender</span></a>
                            </li>
                        </ul>
                </nav>
                <!-- Akhir sidebar -->
                <!-- Utama -->
                    <div id="content">
                        <!-- Navbar Atas -->
                            <div class="top-navbar">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="container-fluid">
                                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                                            <span class="material-icons">arrow_back_ios</span>
                                        </button>				
                                        <a class="navbar-brand" href="?view="> Toko ABC </a>			
                                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="material-icons">more_vert</span>
                                        </button>
                                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                                            <ul class="nav navbar-nav ml-auto">   
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">
                                                    <span class="material-icons">apps</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="logout.php">
                                                    <span class="material-icons">logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        <!-- Akhir Navbar Atas -->
                        <!-- Halaman -->
                            <div class="main-content" id="main-content-data">
                                <!-- Form Barang  -->
                                <div class="row ">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card" style="min-height:580px;">
                                            <div class="card-header card-header-text">
                                                <span class="material-symbols-outlined"></span>
                                                <h3 class="card-title"> Input Barang </h3>
                                                <hr>
                                            </div>
                                            <div class="card-content table-responsive">
                                                <form ACTION="" METHOD="POST" enctype="multipart/form-data">
                                                    <div class="form-floating mb-3">
                                                        <input style="background-color: #EEEEEE;" type="number" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode_barang">
                                                        <label for="kode_barang">Kode Barang</label>
                                                    </div>  
                                                    <div class="form-floating mb-3">
                                                        <input style="background-color: #EEEEEE;" type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                                                        <label for="nama">Nama</label>
                                                    </div>  
                                                    <div class="form-floating mb-3">
                                                        <input style="background-color: #EEEEEE;" type="number" class="form-control" name="harga" id="harga" placeholder="harga">
                                                        <label for="harga">Harga</label>
                                                    </div>  
                                                    <div class="form-floating mb-3">
                                                        <input style="background-color: #EEEEEE;" type="file" class="form-control" name="gambar" id="gambar" placeholder="gambar">
                                                    </div>  
                                                    <div class="form-floating mb-3">
                                                        <input style="background-color: #EEEEEE;" type="number" class="form-control" name="jml_stok" id="jml_stok" placeholder="jml_stok">
                                                        <label for="jml_stok">Jumlah Stok</label>
                                                    </div>
                                                    <div class="row pt-3">
                                                        <div class="col-md-12 d-flex justify-content-between">
                                                            <div class="d-grid gap-2 col-3 mx-auto">
                                                                <input id="tombollogin" type="submit" value="Submit" name="submit" id="liveToastBtn">
                                                            </div>
                                                            <div class="d-grid gap-2 col-3 mx-auto">
                                                                <input id="tombollogin" type="reset" value="Reset" name="reset" id="reset">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Halaman -->    
                        <!-- Footer -->
                            <footer class="footer">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <nav class="d-flex">
                                                <ul class="m-0 p-0">
                                                    <li>
                                                        <a href="#"> Bintang </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> Nibras </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> Ayatullah </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="copyright d-flex justify-content-end"> 
                                                Tugas Kelompok Pemrograman WEB Lanjut MVC
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        <!-- Akhir Footer -->
                    </div>
                <!-- Akhir Utama -->
                
        </div>    
            <!-- jQuery, Popper.js, Boostrap-->
                <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
                <script src="bootstrap/js/popper.min.js"></script>
                <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                                $('#sidebarCollapse').on('click', function () {
                                    $('#sidebar').toggleClass('active');
                                    $('#content').toggleClass('active');
                                });
                                
                                $('.more-button,.body-overlay').on('click', function () {
                                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                                });
                                
                            });
                </script>
        </div>
    </body>
</html>
