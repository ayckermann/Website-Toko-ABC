<?php
    class Controller{
        public $model;

        function __construct(){
            require_once('model.php');
            $this->model = new Model();
        }
        function login(){   
            include 'login.php';
            if(!isset($_SESSION["login"])){  
                if(isset($_POST['submit'])){
                    
                    $kode_user = $_POST['kode_user'];
                    $password = $_POST['password'];
                    
                    $data = $this->model->selectUser($kode_user);
                    
                    if($password === $data['password']){

                        $_SESSION["login"]=true;
                        $_SESSION["peran"]=$data['peran'];
                        return $this->model->refresh();
                    }
                    
                    else{
                        echo "<script>
                        alert('Username / password salah');
                        </script>";
                    }
                }
            }
        }

           
        
        function index(){
            
            if(isset($_SESSION["login"])){
                require_once 'view.php';
            }
            else{
                exit;
            }
            
        }
        function indexBarang(){
            error_reporting(0);
            
            $rdata = $this->model->selectAllBarang();
            while($qdata = $this->model->fetch($rdata)){
            $result[] = $qdata;
            }
            include "viewBarang.php";
            return $result;
        }
        function indexUser(){
            error_reporting(0);
            $rdata = $this->model->selectAllUser();
            while($qdata = $this->model->fetch($rdata)){
            $result[] = $qdata;
            }
            include "viewUser.php";
            return $result;
        }

        function upload(){
            $namaFile = $_FILES['gambar']['name'];
            $ukuranFile = $_FILES['gambar']['size'];
            $error = $_FILES['gambar']['error'];
            $tmpName = $_FILES['gambar']['tmp_name'];

            if ($error === 4){
                echo "<script> alert('Tidak ada gambar yang diupload') </script>";
                return false;
            }
            
            $formatGambarValid = ['jpg','jpeg','png'];
            $formatGambar = explode('.', $namaFile);
            $formatGambar = strtolower(end($formatGambar));
            if(!in_array($formatGambar,$formatGambarValid)){
                echo "<script> alert('Format gambar salah') </script>";
                return false;
            }
            if ($ukuranFile>100000){
                echo "<script> alert('Ukuran gambar terlalu besar') </script>";
                return false;
            }
            move_uploaded_file($tmpName,'img/'.$namaFile);
            return $namaFile;
        }
        function cDeleteBarang($kode_barang){
            $this->model->deleteBarang($kode_barang);
            header("Location: ?barang");
            return $this->model->refresh();
        }

        function cDeleteUser($kode_user){
            $this->model->deleteUser($kode_user);
            header("Location: ?user");
            return $this->model->refresh();
        }
        function cInsertBarang(){
            require 'viewInsertBarang.php';

            if(isset($_POST['submit'])){
                $data = array(
                'kode_barang' => $_POST['kode_barang'],
                'nama' => $_POST['nama'],
                'harga' => $_POST['harga'],
                'gambar' => $this->upload(),
                'jml_stok' => $_POST['jml_stok'],
                );
                
                if(!$data['gambar']){
                    echo "<script>alert('gambar gagal diupload')</script>";
                    return false;
                }

                $this->model->insertBarang($data);
                header("Location: ?barang");
                return $this->model->refresh();
            
            }


        }
        function cInsertUser(){
            require 'viewInsertUser.php';

            if(isset($_POST['submit'])){
                $data = array(
                'kode_user' => $_POST['kode_user'],
                'nama' => $_POST['nama'],
                'email' => $_POST['email'],
                'telp' => $_POST['telp'],
                'password' => $_POST['password'],
                'peran' => $_POST['peran'],
                );

                $this->model->insertUser($data);
                
                header("Location: ?user");
                return $this->model->refresh();
            
            }


        }
        function cEditBarang($kode_barang){
            include 'viewEditBarang.php';

            if(isset($_POST['submit'])){
        
                if($_FILES['gambar']['error']===4){
                    $data = array(
                        'nama' => $_POST['nama'],
                        'harga' => $_POST['harga'],
                        'gambar' => $_POST['gambarLama'],
                        'jml_stok' => $_POST['jml_stok'],
                    );
                }
                else{
                    $data = array(
                        'nama' => $_POST['nama'],
                        'harga' => $_POST['harga'],
                        'gambar' => $this->upload(),
                        'jml_stok' => $_POST['jml_stok'],
                        );
                }
                

                $this->model->editBarang($data,$kode_barang);
                header("Location: ?barang");
                return $this->model->refresh();
            
            }
        
        }
        function cEditUser($kode_user){
            include 'viewEditUser.php';
            
            if(isset($_POST['submit'])){
                $data = array(
                'kode_user' => $_POST['kode_user'],
                'nama' => $_POST['nama'],
                'email' => $_POST['email'],
                'telp' => $_POST['telp'],
                'password' => $_POST['password'],
                'peran' => $_POST['peran'],
                );

                $this->model->editUser($data,$kode_user);
                header("Location: ?user");
                return $this->model->refresh();
                
            
            }
        }
        
    }   
    
?>
