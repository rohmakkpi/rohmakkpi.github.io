<?php
    include "myconnect.php";

    $id = $_GET["id1"];
    $judul = $_GET["judul1"];
    $pengarang = $_GET["pengarang1"];
    $penerbit = $_GET["penerbit1"];
    $deskripsi = $_GET["deskripsi1"];

    $query = "UPDATE buku SET Judul = '$judul', Pengarang = '$pengarang', Penerbit = '$penerbit', Deskripsi = '$deskripsi'
    WHERE Id_buku = '$id'";

    if(mysqli_query($connect, $query)){
        header("Location:homeCrud.php");
    }else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>