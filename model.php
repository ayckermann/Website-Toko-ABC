<?php
    class Model{
        public $connect;
        private $query;

        function __construct()
        {
            $this->connect = new mysqli('localhost','root', '', 'tokoabc') or die("gagal mulu dah");
        }

        function execute($query){
            return mysqli_query($this->connect,$query);
        }

        function fetch($data){
            $this->query = mysqli_fetch_array($data);
            return $this->query;       
        }

        function selectAllBarang(){
            $this->query = "SELECT * FROM barang";
            return $this->execute($this->query);
        }
        function selectAllUser(){
            $this->query = "SELECT * FROM user";
            return $this->execute($this->query);
        }

        function selectBarang($kode_barang){
            $this->query = "SELECT * FROM barang WHERE kode_barang = '$kode_barang' ";
            $data = $this->execute($this->query);
            return $this->fetch($data);
        }
        function selectUser($kode_user){
            $this->query = "SELECT * FROM user WHERE kode_user = '$kode_user' ";
            $data = $this->execute($this->query);
            return $this->fetch($data);
        }

        function deleteBarang($kode_barang){
            $this->query = "DELETE FROM barang WHERE kode_barang = '$kode_barang' ";
            $this->execute($this->query);
        }
        function deleteUser($kode_user){
            $this->query = "DELETE FROM user WHERE kode_user = '$kode_user' ";
            $this->execute($this->query);
        }

        function insertBarang($data){
            $columns = implode(",",array_keys($data));
            foreach($data as $k => $v ) {
                $prep["'".$v."'"] = $k;
            }
            $values = implode(", ",array_keys($prep));

            $this->query = "INSERT INTO barang ($columns) VALUES ($values)";

            return $this->execute($this->query);
        }
        function insertUser($data){
            $columns = implode(",",array_keys($data));
            foreach($data as $k => $v ){
                $prep["'".$v."'"] = $k;
            }
            $values = implode(", ",array_keys($prep));
            var_dump($data);
            $this->query = "INSERT INTO user ($columns) VALUES ($values)";

            return $this->execute($this->query);
        }

        function editBarang($data,$kode_barang){
            $nama = $data["nama"];
            $harga = $data["harga"];
            $gambar = $data["gambar"];
            $jml_stok = $data["jml_stok"];

            $this->query = "UPDATE barang SET 
            nama = '$nama',
            harga = '$harga',
            gambar = '$gambar',
            jml_stok = '$jml_stok'
            WHERE kode_barang='$kode_barang'";
            return $this->execute($this->query);

        }
        function editUser($data,$kode_user){
            $nama = $data["nama"];
            $email = $data["email"];
            $telp = $data["telp"];
            $password = $data["password"];
            $peran =$data["peran"];
            var_dump($data);
            $this->query = "UPDATE user SET 
            nama = '$nama',
            email = '$email',
            telp = '$telp',
            password = '$password',
            peran = '$peran'
            WHERE kode_user='$kode_user'";

            return $this->execute($this->query);
        }
        function refresh(){
            echo "<script> window.parent.location=window.parent.location; </script>";
        }
    }
?>
