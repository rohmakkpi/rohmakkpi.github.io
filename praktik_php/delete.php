<?php
    include "myconnect.php";

    $id = $_GET['Id_buku'];

    $query = "DELETE FROM buku WHERE Id_buku = '$id'";

    if(mysqli_query($connect, $query)){
        header('Location:homeCrud.php');
    } else {
        echo "Data gagal dihapus <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
