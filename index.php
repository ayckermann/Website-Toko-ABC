<?php
session_start();
    include "controller.php";
    $conn = new Controller();
    if(isset($_SESSION["login"])){
        if(isset($_GET['barang'])){
            $result = $conn->indexBarang();   
        }
        else if(isset($_GET['insert-barang'])){
            $conn->cInsertBarang();
        }
        else if(isset($_GET['editBarang'])){
            $kode_barang = $_GET['editBarang'];
            $conn->cEditBarang($kode_barang);
        }
        else if(isset($_GET['user'])){
            $result = $conn->indexUser(); 
        }
        else if(isset($_GET['insert-user'])){
            $conn->cInsertUser();
        }
        else if(isset($_GET['editUser'])){
            $kode_user = $_GET['editUser'];
            $conn->cEditUser($kode_user);
        }
        else if(isset($_GET['deleteBarang'])){
            $kode_barang = $_GET['deleteBarang'];
            $conn->cDeleteBarang($kode_barang);
            
        }
        else if(isset($_GET['deleteUser'])){
            $kode_user = $_GET['deleteUser'];
            $conn->cDeleteUser($kode_user);

        }
        else {
            $conn->index();
        }
       

    }
    else{
        $conn->login();
    }
?>
<html>
    <head>
        <!--Boostrap-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <!--CSS-->
		<link rel="stylesheet" href="style.css" />
        <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    </head>
    <body>
		<!-- jQuery, Popper.js, Boostrap-->
        <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/js/popper.min.js"></script>
		<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    </body>
</html>
