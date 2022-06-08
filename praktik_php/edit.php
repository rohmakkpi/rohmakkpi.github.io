<html>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" type="text/css" href="bentuk1.css"/>
    </head>
    <body>
        <header>
            <h1 align="left">Toko buku NDF</h1>   
        </header>
        <h1>Edit Buku</h1>
        <?php
            include "myconnect.php";
            $id = $_GET['Id_buku'];
            $query = "SELECT * FROM buku WHERE Id_buku = '$id'";
            $result = mysqli_query($connect, $query);
        ?>
        <form enctype="multipart/form-data" action="editProses.php" method="get">
        <table>
            <?php
                while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td> Kode buku : </td>
                    <td><input type="text" name="id1" value="<?php echo $row['Id_buku'];?>"></td>
                </tr>
                <tr>
                    <td> Judul : </td>
                    <td><input type="text" name="judul1" value="<?php echo $row['Judul'];?>"></td>
                </tr>
                <tr>
                    <td> Pengarang : </td>
                    <td><input type="text" name="pengarang1" value="<?php echo $row['Pengarang'];?>"></td>
                </tr>
                <tr>
                    <td> Penerbit : </td>
                    <td><input type="text" name="penerbit1" value="<?php echo $row['Penerbit'];?>"></td>
                </tr>
                <tr>
                    <td> Deskripsi : </td>
                    <td><textarea name="deskripsi1" rows="10" cols="50"><?php echo $row['Deskripsi'];?></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Simpan"></td>
                </tr>
                <?php
                }
            ?>
        </table>
        </form>
    <footer>
        <p align="center">rohmawatimultimedia@gmail.com</p>
    </footer>
    </body>
</html>