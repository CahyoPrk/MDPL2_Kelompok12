<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-home.css">
</head>
<body>
    <?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:login.php?pesan=gagal");
    }

    ?>

    <div class="sidebar">
        <h1 class="logo">ZERALIA <br> &ensp;&ensp;LIBRARY</h1>
        <div class="vl"></div>
        <hr>
        <a href="home.php"><img src="book.png" alt=""></i><span>Book Data</span></a>
        <a href="input.php"><img src="upload.png" alt=""></i><span>Input</span></a>
        <a class="logout" href="login.php">&ensp;&ensp;&ensp;LOGOUT</a>
    </div>

    <div class="container">
        <h1>List Buku</h1>
        <div class="content">
            <h2>Data List Buku</h2>
            <h3>Search <input type="text" placeholder="Cari buku..."><button>Cari</button></h3>
            <table border="1">
                <tr>
                    <th style="width: 50px;">No</th>
                    <th style="width: 200px;">Judul Buku</th>
                    <th style="width: 100px;">Kode Buku</th>
                    <th style="width: 150px;">Penulis</th>
                    <th style="width: 150px;">Penerbit</th>
                    <th style="width: 70px;">Tahun</th>
                    <th style="width: 250px;">Deskripsi</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>The Lost Symbol</th>
                    <th>A001</th>
                    <th>Dan Brown</th>
                    <th>Mizan</th>
                    <th>2017</th>
                    <th>-</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Inferno</th>
                    <th>A001</th>
                    <th>Dan Brown</th>
                    <th>Mizan</th>
                    <th>2017</th>
                    <th>-</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Origin</th>
                    <th>A001</th>
                    <th>Dan Brown</th>
                    <th>Mizan</th>
                    <th>2012</th>
                    <th>-</th>
                </tr>

                <tr>
                    <th>4</th>
                    <th>Da Vinci Code</th>
                    <th>A004</th>
                    <th>Dan Brown</th>
                    <th>Mizan</th>
                    <th>2007</th>
                    <th>-</th>
            </table>
        </div>
    </div>
</body>
</html> 