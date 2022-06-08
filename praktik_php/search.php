<html>
<head>
    <title>Home</title>
    <link rel = "stylesheet" type="text/css" href="bentuk2.css"/>
</head>
<body>
    <h3>Hasil Pencarian Yang Ditemukan</h3>
        <table>
            <tr>
                <th> Id_buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
            </tr>
            <?php
            $Judul = $_GET["carinama"];
            include "myconnect.php";

            $query = "SELECT * FROM Buku WHERE Judul LIKE '%$Judul%'";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["Id_buku"]; ?></td>
                <td><?php echo $row["Judul"]; ?></td>
                <td><?php echo $row["Pengarang"]; ?></td>
            </tr>
            <?php
                }
            }else {
                echo "0 result";
            }
            ?>
        </table>
        <a href="home.php">Kembali ke Home</a>
</body>
</html>