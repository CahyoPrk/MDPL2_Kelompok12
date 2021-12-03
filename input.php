<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-input.css">
</head>

<body>
    <div class="sidebar">
        <h1 class="logo">ZERALIA <br> &ensp;&ensp;LIBRARY</h1>
        <div class="vl"></div>
        <hr>
        <a href="home.php"><img src="book.png" alt=""></i><span>Book Data</span></a>
        <a href="input.php"><img src="upload.png" alt=""></i><span>Input</span></a>
        <a class="logout" href="login.php">&ensp;&ensp;&ensp;LOGOUT</a>
    </div>

    <div class="container">
        <h1>Input Buku</h1>
        <h1> Input Data Buku</h1>
        <div class="input">
            <form>
                <div>Judul Buku</div>
                <input type="text" id="Judul Buku" name="Judul Buku" placeholder="  Masukkan judul buku..">
                <p></p>
                <div>Kode Buku</div>
                <input type="text" id="Kode Buku" name="Kode Buku" placeholder="  Masukkan kode buku..">
                <p></p>
                <div>Penulis</div>
                <input type="text" id="Penulis" name="Penulis" placeholder="  Masukkan penulis..">
                <p></p>
                <div>Penerbit</div>
                <input type="text" id="Penerbit" name="Penerbit" placeholder="  Masukkan penerbit..">
                <p></p>
                <div>Tahun</div>
                <input type="text" id="Tahun" name="Tahun" placeholder="  Masukkan tahun terbit..">
                <p></p>
                <div>Deskripsi</div>
                <input type="text" id="Deskripsi" name="Deskripsi" placeholder="  Masukkan deskripsi..">
                <p></p>
            </form>
            <p><button>Input</button></p>
        </div>
    </div>
</body>

</html>