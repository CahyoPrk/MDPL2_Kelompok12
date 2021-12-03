<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-daftar-buku.css">
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
        <a href="daftar-buku.php"><img src="book.png" alt=""></i><span>Daftar Buku</span></a>
        <a class="logout" href="login.php">&ensp;&ensp;&ensp;LOGOUT</a>
    </div>

    <div class="container">
        <h1>Pinjam Buku</h1>
        <h2>Daftar Buku</h2>
        <div class="daftar">
            <div class="book">
                <div>"The Lost Symbol"</div>
                <a href="The Lost Symbol.pdf" target="_blank"><button>READ</button></a>
            </div>
            <div class="book">
                <div>"Inferno"</div>
                <a href="inferno.pdf" target="_blank"><button>READ</button></a>
            </div>
            <div class="book">
                <div>"Origins"</div>
                <a href="The Lost Symbol.pdf" target="_blank"><button>READ</button></a>
            </div>
            <div class="book">
                <div>"Da Vinci Code"</div>
                <a href="The Lost Symbol.pdf" target="_blank"><button>READ</button></a>
            </div>
            <div class="book">
                <div>"Da Vinci Code"</div>
                <a href="The Lost Symbol.pdf" target="_blank"><button>READ</button></a>
            </div>
            <div class="book">
                <div>"Da Vinci Code"</div>
                <a href="The Lost Symbol.pdf" target="_blank"><button>READ</button></a>
            </div>
        </div>
    </div>
</body>
</html> 