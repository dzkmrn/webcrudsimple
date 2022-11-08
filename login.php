<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Login</title>
    </head>
    <body>
        <div class="kotak_login">
            <p class="tulisan_login">LOGIN</p>
            <form action="ceklogin.php" method="post" role="form">  
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off">
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password" autocomplete="off">
                <div class="inputan">
                <button type="submit" name="masuk">Login</button>
                <button type="submit" name="beli_barang">Beli Barang</button>
                </div>
            </form>
        </div>
    </body>
</html>