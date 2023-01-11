<?php

require_once("function/helper.php");
require_once('function/koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css'?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
</head>

<body style="background-image: url('https://images.pexels.com/photos/270360/pexels-photo-270360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); font-family: 'Rowdies', cursive;">
    

    <div class="content">
        <div class="card-login" style="background: transparent;">
            <div class="card-main">
                
                <div class="card-body">
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                        <label class="form-label">Username</label>
                        <input type="username" name="username" class="form-input">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-input">
                        <button style="background-color:black;" type="submit" class="btn btn-login">Login</button>
                    </form>
                    <p style="text-align: center;">Belum punya akun?<span><a href="<?= BASE_URL . "register.php" ?>" class=""> Daftar disini</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>