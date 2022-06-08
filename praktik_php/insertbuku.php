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

    $query = "INSERT into buku(Id_buku, Judul, Pengarang, Penerbit, Deskripsi)
        VALUES ('TI0000121', 'Buku Ajar Konsep Dasar Pemrograman Website Dengan PHP', 'Elgamar', 'Setya Budi', 'Menjelaskan KOnsep dasar pemrograman dengan menggunakan PHP'),
        ('TI0000122', 'Aplikasi Website Profesional dengan PHP da jQuery', 'Wardana S.Hut', 'Elex Media Komputindo', 'Menyajikan informasi bagaimana membuat aplikasi webasite yang profesional'),
        ('TI0000123', 'Pemrograman Web dengan PHP dan MySQL', 'Achmad Solichil', 'Erika Wibowo', 'Membahas seputar pemrograman web dengan PHP dan MySQL'),
        ('TI0000124', 'Ses : Pemrograman Web Database PHP', 'Arief Ramadhan', 'Rahman Hakim', 'Menyajikan informasi mengenai pemrograman web database PHP')";

    if(mysqli_query ($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>

