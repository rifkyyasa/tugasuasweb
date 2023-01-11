<?php
require_once('function/helper.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css'?>">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
</head>
<body>


        <div class="content">
        <div class="card-login" style="background:transparent;">
            <div class="card-main" >
            <h3 style="text-align: center; font-family: 'Metal Mania', cursive; font-size:50px; margin-bottom: 0px; color: black;">Daftar</h3>
            <div class="card-body">
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_register.php' ?>" style="color: black; font-family: 'Share Tech Mono', monospace;">
                        <label class="form-label" style="color: black; " for="username">Username</label>
                        <input type="username" name="username" class="form-input" style="border-color: blue;" id="username">
                        <label class="form-label" style="color: black; " for="password">Password</label>
                        <input type="password" name="password" class="form-input" style="border-color: blue;" id="password">
                        <label class="form-label" style="color: black; ">Ulangi Password</label>
                        <input type="password" name="pass" class="form-input" style="border-color: blue;">
                        <button type="submit" class="btn btn-login" style="font-family: 'Share Tech Mono', monospace; background-color: black;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>