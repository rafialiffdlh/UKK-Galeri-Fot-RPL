<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="album.php">Album</a></li>
        <li><a href="foto.php">Foto</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <p>Selamat Datang <b><?=$_SESSION['namalengkap']?></b></p>
    <marquee behavior="" direction="right"><h1>Selamat datang di Website Galeri Foto </h1></marquee>
    <h4>Di website ini anda bisa mengupload foto dengan cara anda mengisi data Album terlebih dahulu pada bagian Album setelah itu anda bisa mengupload foto pada bagian Foto anda juga bisa memberi like dan komentar pada bagian foto tersebut.</h4>
</body>

</html>