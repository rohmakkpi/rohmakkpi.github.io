<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobuku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if ($connect){
        echo "Koneksi ke MySQL berhasil <br>";
    } else {
        echo "Koneksi ke MySQL gagal".mysqli_connect_error();
    }

    $query = "CREATE TABLE admin(
        Id_admin INT PRIMARY KEY AUTO_INCREMENT,
        Username VARCHAR(20) NOT NULL,
        Password VARCHAR(500) NOT NULL)";
		
    if(mysqli_query ($connect, $query)){
        echo "Tabel admin berhasil dibuat";
    } else {
        echo "Tabel admin gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
