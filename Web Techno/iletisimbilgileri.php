<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/iletisimbilgileri.css">
    <link rel="shortcut icon" href="assets/hacker.png" type="image/x-icon">
    <title>N.A. | İletişim Bilgileri</title>
</head>
<body>
    <div class="container">
        <h1>Bilgileriniz</h1>
        <div class="contact-info">
            <table>
                <tr>
                    <td>Ad Soyad</td>
                    <td>:</td>
                    <td style="padding: 10px;"><?php echo" ".$_GET["name"]." "; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Email adresiniz</td>
                    <td>:</td>
                    <td style="padding: 10px;"><?php echo" ".$_GET["email"]." "; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Telefonunuz</td>
                    <td>:</td>
                    <td style="padding: 10px;"><?php echo" ".$_GET["phone"]." "; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Konu</td>
                    <td>:</td>
                    <td style="padding: 10px;"><?php echo" ".$_GET["subject"]." "; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mesajınız</td>
                    <td>:</td>
                    <td style="padding: 10px;"><?php echo" ".$_GET["message"]." "; ?></td>
                </tr>
            </table>
            <button type="submit" class="btn-home" onclick="redirectToHakkimda()">Anasayfaya dön</button>
        </div>
    </div>
    <script>
        function redirectToHakkimda() {
            window.location.href = "hakkimda.php";
        }
    </script>
</body>
</html>