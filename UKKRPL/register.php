<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            background-color: palegreen;
        }
        .regis-box {
            width: 300px;
            margin: 100px auto;
            padding: 20px;          
            background-color: whitesmoke;
        }
        h1 {
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: left;
        }     
        input[type="submit"] {
            width: 93%;
            padding: 10px;
            margin: 10px 0;
            background-color: skyblue;
            border: none;   
        }
    </style>
</head>
<body>
    <center>
    <div class="regis-box">
    <h1> Registrasi</h1>
    <form action="proses_register.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Masukan Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Masukan Password"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Masukan Email"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap" placeholder="Masukan Nama Lengkap"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Masukan Alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Registrasi">
                <p>Sudah Punya Akun? Silahkan <a href="login.php">Login</a></p>
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>