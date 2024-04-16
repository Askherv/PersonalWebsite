<?php
    ob_start();
    $user='b211210554@sakarya.edu.tr';
    $pass='b211210554';

    if(isset($_POST['submit']))
    {
        $username=$_POST['email'];
        $password=$_POST['password'];

        if ($username==$user && $password==$pass)
        {
            header('location:hakkimda.html');
            exit();
        }
        else 
        {
            header('location:login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="shortcut icon" href="assets/hacker.png" type="image/x-icon">
    <title>N.A. | Giriş</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <form id="form" method="POST">
                <div class="page-box">
                    <div class="login-title">
                        <h1 style="font-size: 60px;"><i class="fa-solid fa-user-secret" style="color: #ffffff; margin-right: 10px;"></i>N.A.</h1>
                        <h2 class="loginTitle-text">Giriş Yap</h2>
                    </div>
                    <div class="page email-page">
                        <div class="input-box">
                            <input type="text" class="email" name="email" autocomplete="off" placeholder="Email adresinizi giriniz">
                        </div>
                        <div class="input-box" style="margin-top: 15px;">
                            <input type="password" class="password" name="password" placeholder="Şifrenizi giriniz">
                        </div>
                        <div class="btn-box">
                            <button type="submit" name="submit" class="btn-login" style="margin: 15px 0 0 155px;">Giriş Yap</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('form');
            form.addEventListener('submit', function (event) {
                var emailInput = document.querySelector('.email');
                var passwordInput = document.querySelector('.password');
                if (emailInput.value.trim() === '' || passwordInput.value.trim() === '') {
                    alert('Lütfen e-posta ve şifre alanlarını doldurun');
                    event.preventDefault();
                    return;
                }
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value)) {
                    alert('Lütfen geçerli bir e-posta adresi girin');
                    event.preventDefault();
                    return;
                }
            });
        });
    </script>
    
</body>
</html>