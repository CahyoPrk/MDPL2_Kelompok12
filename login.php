<?php 
if( isset($_SESSION["login"]) ) {
    header("Location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <!-- membuat card -->
    <div class="card">
        <!-- tampilan gambar -->
        <div class="gambar">
            <img src="gambar.jpg" >
        </div>

        <?php 
        
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Id dan Password tidak sesuai !</div>";
            }
        }
        ?>

        <!-- tampilan form login -->
        <div class="login">    
            <h1>SIGN IN</h1>     
            <form action="cek_login.php" method="post">
                <p>ID:</p>
                <input type="text" name="text" class="text" placeholder="Enter your ID"><br>
                <p>PASSWORD:</p>
                <input type="password" name="password" class="text" placeholder="Enter your password">
                <p><input type="checkbox" >Remember Me</p>
                <button><a href="daftar-buku.html" style="color: aliceblue;">Log In</a></button>            
            </form>           
            <p class="keterangan"><a href="" style="color: rgb(177, 175, 175);">Lupa Password?</a></p>
            <p class="keterangan">Tidak punya akun?<a href="register.html" style="font-weight: bold; color: black;"> Daftar sekarang</a></p>  
        </div> 
    </div>
</body>
</html>