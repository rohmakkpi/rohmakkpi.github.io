<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="bentuk2.css"/>
</head>
<body>
    <header>
            <h1 align="left">Toko buku MI</h1>
            <a align="right" href="home.php">Home</a>
            <a align="right" href="LoginForm.php">Login</a> 
        </header>
        <?php
            if(isset($_GET["error"])){
                $error=$_GET["error"];
            }
            else{
                $error = "";
            }

            $message = "";
            if($error=="gagal"){
                $message="Gagal login, silahkan coba lagi";
            }
        ?>
        <p style="color:red"><?php echo $message?></p>
        <form action="loginProses.php" method="post">
            <table align="center">
                <tr>
                    <td>Mohon login terlebih dahulu</td>
                </tr>
                <tr>
                    <td>Username </td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
