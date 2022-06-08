<html>
    <head>
        <title>Tambah</title>
        <link rel="stylesheet" type="text/css" href="bentuk1.css"/>
    </head>
    <body>
        <header>
            <h1 align="left">Toko buku MI</h1>   
        </header>
        <h1>Tambah Data Buku</h1>
        <form action="Addproses.php" method="get">
        <table>   
                <tr>
                    <td> Kode buku : </td>
                    <td><input type="text" name="Id1"></td>
                </tr>
                <tr>
                    <td> Judul : </td>
                    <td><input type="text" name="Judul1"></td>
                </tr>
                <tr>
                    <td> Pengarang : </td>
                    <td><input type="text" name="Pengarang1"></td>
                </tr>
                <tr>
                    <td> Penerbit : </td>
                    <td><input type="text" name="Penerbit1"></td>
                </tr>
                <tr>
                    <td> Deskripsi : </td>
                    <td><textarea name="deskripsi1" rows="10" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="send" value="Tambah"></td>
                </tr>
        </table>
        </form>
    <footer>
        <p align="center">rohmawatimultimedia@gmail.com</p>
    </footer>
    </body>
</html>