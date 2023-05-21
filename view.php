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
                            <li  class="active">
                                <a href="#" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                            </li>
                            <div class="small-screen navbar-display">
                                <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                                    <a href="logout.php"><i class="material-icons">logout</i><span>logout</span></a>
                                    
                                </li>
                            </div>
                            <li class="">
                                <a href="?user="><i class="material-icons">person</i><span>User</span></a>
                            </li>
                            <li class="">
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
                                        <a class="navbar-brand" href="#"> Toko ABC </a>			
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
                            <div class="main-content">
                                <!-- Database -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="card card-stats">
                                             <div class="card-header">
                                                <div class="icon icon-warning2">
                                                    <span class="material-icons">table_chart</span>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="category py-2"><strong>Data Barang</strong></p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <a href="?barang=" id="lidata">Lihat Tabel Barang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="card card-stats" >
                                            <div class="card-header">
                                                <div class="icon icon-person">
                                                    <span class="material-icons">person</span>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="category py-2"><strong>Data User</strong></p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <a href="?user=" id="lidata">Lihat Tabel User</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <!-- Akhir Database -->
                                <!-- Card -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header">
                                                <div class="icon icon-warning">
                                                    <span class="material-icons">equalizer</span>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="category"><strong>Pengunjung</strong></p>
                                                <h3 class="card-title">892</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons text-info">info</i>
                                                    <a>Lihat Laporan Lengkap</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header">
                                                <div class="icon icon-rose">
                                                    <span class="material-icons">shopping_cart</span>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="category"><strong>Penjualan</strong></p>
                                                <h3 class="card-title">60</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons">local_offer</i> Data Penjualan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header">
                                                <div class="icon icon-success">
                                                    <span class="material-icons">
                                                        attach_money
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="category"><strong>Pemasukan</strong></p>
                                                <h3 class="card-title">Rp. 930.000</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons">date_range</i> Pemasukan perminggu
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="card card-stats">
                                            <div class="card-header">
                                                <div class="icon icon-info">
                                                    <span class="material-icons">
                                                        follow_the_signs
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <p class="category"><strong>Followers</strong></p>
                                                <h3 class="card-title">+90</h3>
                                            </div>
                                            <div class="card-footer">
                                                <div class="stats">
                                                    <i class="material-icons">update</i> Lihat Data Lengkap
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>        
                                </div>
                                <!-- Album & Tabel  -->
                                <div class="row ">
                                    <div class="album py-2 ">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="card shadow-sm" style="border-radius: 8px;">
                                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Barang 1</text></svg>
                                                        <div class="card-body" style="padding-top: 5px;">
                                                            <p class="card-text" style="margin-top:2px;">Contoh Gambar Barang 1</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="card shadow-sm" style="border-radius: 8px;">
                                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Barang 2</text></svg>
                                                        <div class="card-body" style="padding-top: 5px;">
                                                            <p class="card-text" style="margin-top:2px;">Contoh Gambar Barang 2</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="card shadow-sm" style="border-radius: 8px;">
                                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Barang 3</text></svg>
                                                        <div class="card-body" style="padding-top: 5px;">
                                                            <p class="card-text" style="margin-top:2px;">Contoh Gambar Barang 3</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6">
                                                    <div class="card shadow-sm" style="border-radius: 8px;">
                                                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Barang 4</text></svg>
                                                        <div class="card-body" style="padding-top: 5px;">
                                                            <p class="card-text" style="margin-top:2px;">Contoh Gambar Barang 4</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card" style="min-height:485px;">
                                            <div class="card-header card-header-text">
                                                <h4 class="card-title"> Jadwal Matkul Kel. 4203 </h4>
                                                
                                            </div>
                                            <div class="card-content table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Hari</th>
                                                            <th>Kdmk</th>
                                                            <th>Matkul </th>
                                                            <th>Jam</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Senin</td>
                                                            <td>A11.54102 & A11.54206</td>
                                                            <td> Fisika 1 & Alpro </td>
                                                            <td>07.00 - 08.40 & 10.00 - 12.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Selasa</td>
                                                            <td>A11.54207 & A11.54405</td>
                                                            <td>RLD & RPL</td>
                                                            <td>10.20 - 12.00 & 12.30 - 15.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Rabu</td>
                                                            <td>A11.54207 & A11.54405</td>
                                                            <td>Basis Data & Logif</td>
                                                            <td>09.30 - 12.00 & 12.30 - 15.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Kamis</td>
                                                            <td>A11.54408</td>
                                                            <td>P.Web Lanjut</td>
                                                            <td>14.10 - 15.50</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Jumat</td>
                                                            <td>A11.54102 & A11.54206</td>
                                                            <td>Fisika 1 & Alpro</td>
                                                            <td>10.20 - 12.00 & 12.30 - 14.10</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
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
