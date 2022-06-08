<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel = "stylesheet" type="text/css" href="bentuk.css"/>
    </head>
    <body>
        <header>
            <h1 align ="center">Toko buku MI</h1>
            <a href="home.php">Home</a>
            <a href="LoginForm.php">Login</a> 
        </header>
        <h1>Selamat Datang di Toko Buku MI</h1>
        <form action="search.php" method="get" align="right">
            Cari Judul Buku:
            <input type="text" name="carinama">
            <input type="submit" value="Cari">
        </form>
            <table align="center">
                <tr>
                    <th> Kode Buku </th>
                    <th> Judul </th>
                    <th> Pengarang </th>
                    <th>  </th>
                    
                </tr>
                <?php
                include "myconnect.php";
                $query = "SELECT *FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row["Id_buku"]; ?></td>
                    <td><?php echo $row["Judul"]; ?></td>
                    <td><?php echo $row["Pengarang"]; ?></td>
                    <td> 
                        <a href="detail.php?Id_buku=<?php echo $row["Id_buku"];?>">
                        <button>Detail</button></a>
                    </td>
                    
                </tr>
                <?php
                    }
                }else {
                    echo "0 result";
                }
                ?>

            </table>
    </body>
</html>