<html>
    <head>
        <title>Home CRUD</title>
        <link rel="stylesheet" type="text/css" href="bentuk.css"/>
    </head>
    <body>
        <header>
            <h1 align="left">Toko buku MI</h1>
            <a align="right" href="homeCrud.php">CRUD</a>
            <a align="right" href="LoginForm.php">Logout</a> 
        </header>
        <h1>Selamat Datang Administrator</h1>
        <td><input type="button" onclick='top.location="tambahData.php"' value="Tambah Data Buku"></td><br><br>
        <table align="center">
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> </th>
            </tr>
            <?php
                include "myconnect.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect,$query);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["Id_buku"]; ?></td>
                <td><?php echo $row["Judul"]; ?></td>
                <td><?php echo $row["Pengarang"]; ?></td>
                <td>
                    <a href="detail.php?id_buku=<?php echo $row["Id_buku"];?>">
                    <button>detail</button></a>
                    <a href="edit.php?id_buku=<?php echo $row["Id_buku"];?>">
                    <button>edit</button></a>
                    <a href="delete.php?id_buku=<?php echo $row["Id_buku"];?>">
                    <button>delete</button></a>
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 result";
                }
            ?>
        </table>
        <footer>
        <p align="center">rohmawatimultimedia@gmail.com</p>
        </footer>
    </body>
</html>