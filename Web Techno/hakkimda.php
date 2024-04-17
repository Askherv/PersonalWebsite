<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="styles/hakkimda.css">
    <link rel="shortcut icon" href="assets/hacker.png" type="image/x-icon">
    <title>N.A. | Anasayfa</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['expire_time'] = time() + 5; 
    if(isset($_SESSION["password"])){
        echo '<div class="alert alert-success" role="alert" id="myDiv" style="background-color: #D9EDBF; padding: 10px; border-radius: 5px; margin:5px; border: 1px solid #90D26D;">';
        echo 'Hoş geldiniz, ' . $_SESSION["password"] . '!';
        echo '</div>';
        unset($_SESSION["password"]);
    }
    if(isset($_SESSION['expire_time']) && time() > $_SESSION['expire_time']) {
        session_unset();   // Oturum değişkenlerini sil
        session_destroy(); // Oturumu sonlandır
    }
    ?>
    <!--============Navbar Starts============-->
    <nav>
        <div class="logo"><i class="fa-solid fa-user-secret"></i><a href="hakkimda.php">N.A.</a></div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li><a href="ozgecmisim.html">Özgeçmişim</a></li>
            <li>
                <label for="btn-1" class="show">Şehrim +</label>
                  <a href="sehrim.html">Şehrim</a>
                  <input type="checkbox" id="btn-1">
              <ul>
                  <li><a href="takimimiz.html">Takımımız</a></li>
                  <li><a href="mirasimiz.html">Mirasımız</a></li>
              </ul>
            </li>
            <li><a href="ilgialanlarim.html">İlgi Alanlarım</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
            <li><a href="login.php">Giriş Yap</a></li>
        </ul>
    </nav>
    <!--============Navbar Ends============-->
    <!--============Header Starts============-->
    <header>
        <div><hr></div>
        <div>
            <p>Hoş Geldiniz!</p>
        </div>
        <div class="bottom"><hr></div>
    </header>
    <!--============Header Ends============-->
    <!--============Introduction Section Starts============-->
    <section class="introduction">
        <div class="text"><p>Merhabalar, ben <br> <span class="name">Nihad Asgarov</span> <br> Bilgisayar Mühendisliği <br> öğrencisi </p></div>
        <div class="image"><img src="assets/hacker.png"></div>
    </section>
    <!--============Introduction Section Ends============-->
    <div><hr></div>
    <h2 style="color: white; font-size: 30px; text-align: center; margin: 10px 0 10px 0;">Hobilerim</h2>
    <section id="portfolio" style="margin: 20px;">
    <div class="portfolio">
        <div class="portfolio-item">
            <img src="https://www.mksm.com.tr/upload/hizmetler/mksm_604eccd3bb680.jpg">
            <div class="overlay">Keman</div>
        </div>
        <div class="portfolio-item">
            <img src="https://im.haberturk.com/l/2023/05/14/ver1684064242/3591545/jpg/640x360">
            <div class="overlay">Eurovision</div>
        </div>
        <div class="portfolio-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Flag_of_Azerbaijan.svg/1200px-Flag_of_Azerbaijan.svg.png">
            <div class="overlay">Azerbaycan</div>
        </div>
        <div class="portfolio-item">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/4f/7d/fc/caption.jpg?w=1200&h=1200&s=1">
            <div class="overlay">Seyahat</div>
        </div>
        <div class="portfolio-item">
            <img src="https://www.pandatree.com/images/book/book-link01.jpg">
            <div class="overlay">Yabancı dil</div>
        </div>
        <div class="portfolio-item">
            <img src="https://www.mooc.org/hubfs/web-programming-languages.jpg">
            <div class="overlay">Web programlama</div>
        </div>
        <div class="portfolio-item">
            <img src="https://millersmusic.co.uk/cdn/shop/articles/Blog_Image_16.png?v=1674043943">
            <div class="overlay">Piyano</div>
        </div>
        <div class="portfolio-item">
            <img src="https://www.lifeinlifedergisi.com/wp-content/uploads/2020/06/baku.jpg">
            <div class="overlay">Bakü</div>
        </div>
    </div>
</section>
    <!--============Skills Section Starts============-->
    <section class="skill">
        <div><hr></div>
        <div class="abilities">
            <p>Yeteneklerim:</p>
            <div class="technologies">
                <table>
                    <tr>
                        <td><i class="fa-brands fa-html5 fa-2xl" style="color: #ffffff;"></i></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i></td>
                        <td></td>
                        <td><i class="fa-brands fa-css3-alt fa-2xl" style="color: #ffffff;"></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-c fa-2xl" style="color: #ffffff;"></i><i class="fa-solid fa-hashtag" style="color: #ffffff;"></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i></td>
                        <td></td>
                        <td><i class="fa-solid fa-n fa-2xl" style="color: #ffffff;"></i><i class="fa-solid fa-e fa-2xl" style="color: #ffffff;"></i><i class="fa-solid fa-t fa-2xl" style="color: #ffffff;"></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-js fa-2xl" style="color: #ffffff;"></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i></td>
                        <td></td>
                        <td><i class="fa-brands fa-java fa-2xl" style="color: #ffffff;"></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-c fa-2xl" style="color: #ffffff;"></i><i class="fa-solid fa-plus" style="color: #ffffff;"></i><i class="fa-solid fa-plus" style="color: #ffffff;"></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i></td>
                        <td></td>
                        <td><i class="fa-solid fa-c fa-2xl" style="color: #ffffff;"></i></td>
                        <td><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #16ff00;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i><i class="fa-solid fa-star fa-xl" style="color: #ffffff;"></i></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="accounts">
            <p>Hesaplarım:</p>
            <div class="media">
                <table>
                    <tr>
                        <td><a href="https://github.com/Askherv?tab=repositories"><i class="fa-brands fa-github fa-2xl" style="color: #ffffff;"></i></a></td>
                        <td></td>
                        <td><a href="https://www.linkedin.com/in/nihad-asgarov-2113b9279?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i></a></td>
                        <td></td>
                        <td><a href="https://www.instagram.com/nihadsgrv/"><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a></td>
                        <td></td>
                        <td><a href="https://open.spotify.com/intl-tr?"><i class="fa-brands fa-spotify fa-2xl" style="color: #ffffff;"></i></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!--============Skills Section Ends============-->
    <!--============Footer Starts============-->
    <footer>
        <div><hr></div>
        <p><i class="fa-regular fa-copyright" style="color: #ffffff;"></i> 2024 Personal, Inc</p>
    </footer>
    <!--============Footer Ends============-->
</body>
</html>