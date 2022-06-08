<html>
    <head>
        <title>Detail</title>
        <link rel="stylesheet" type="text/css" href="bentuk1.css"/>
    </head>
    <body>
        <header>
            <h1 align="left">Toko buku MI</h1>
            <a align="right" href="home.php">Home</a>
            <a align="right" href="LoginForm.php">Login</a>   
        </header>
        <h1>Detail Buku</h1>
        <?php
            include "myconnect.php";
            $id_buku = $_GET['Id_buku'];
            $query = "SELECT * FROM buku where Id_buku = '$id_buku'";
            $result = mysqli_query($connect,$query);
        ?>
        <table>
            <?php
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td width="100px">Kode buku</td>
                        <td><?php echo $row['Id_buku']?></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td><?php echo $row['Judul']?></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td><?php echo $row['Pengarang']?></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><?php echo $row['Penerbit']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?php echo $row['Deskripsi']?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <br>
        <br>
        <tr>
            <td><input type="button" onclick='top.location="home.php"' value="Kembali ke Home"> </td>
        </tr>
        <footer>
        <p align="center">rohmawatimultimedia@gmail.com</p>
        </footer>
    </body>
</html>