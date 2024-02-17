<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            background-color: paleturquoise;
        }
        .login-box {
            width: 300px;
            margin: 100px auto;
            padding: 20px;          
            background-color: whitesmoke;
            border-radius: 5px;
        }
        h1 {
            text-align: center;
        }
        td {
            padding: 6px;         
        }       
        input[type="submit"] {
            width: 83%;
            padding: 10px;
            margin: 10px 0;
            background-color: skyblue;
            border: none;   
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="proses_login.php" method="post">
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
                    <td></td>
                    <td>
                        <input type="submit" value="Login">
                        <p>Belum Punya Akun? Silahkan <a href="register.php">Daftar</a></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>


