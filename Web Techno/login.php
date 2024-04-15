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
                            <input type="text" class="email" name="email" autofocus placeholder="Email adresinizi giriniz">
                        </div>
                        <div class="btn-box">
                            <button class="btn-next">Devam</button>
                        </div>
                    </div>

                    <div class="page password-page">
                        <div class="input-box">
                            <input type="password" class="password" name="password" placeholder="Şifrenizi giriniz">
                        </div>
                        <div class="show">
                            <label>
                                <input type="checkbox" class="checkbox-pass">
                                Şifreyi göster
                            </label>
                        </div>
                        <div class="btn-box">
                            <button class="btn-back">Geri</button>
                            <button type="submit" name="submit" class="btn-login">Giriş Yap</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const pageBox = document.querySelector('.page-box');
        const btnNext = document.querySelector('.btn-next');
        const btnBack = document.querySelector('.btn-back');
        const checkboxPass = document.querySelector('.checkbox-pass');
        const passwordInput = document.querySelector('.password');
        const loginTitle = document.querySelector('.loginTitle-text');

        btnNext.onclick = (e) => {
            e.preventDefault();
            pageBox.classList.add('active-pass');
            setTimeout(() => passwordInput.focus(), 500);
            loginTitle.innerHTML = 'Hoşgeldiniz!'
        };

        btnBack.onclick = (e) => {
            e.preventDefault();
            pageBox.classList.remove('active-pass');
            loginTitle.innerHTML = 'Giriş Yap!'
        };

        checkboxPass.onclick = () => {
            if(checkboxPass.checked) {
                passwordInput.type = 'text';
            }
            else {
                passwordInput.type = 'password';
            }
        };
    </script>
</body>
</html>