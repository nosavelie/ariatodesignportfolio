<?php 
  require_once "php/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Works Gallery</title>
    <link rel="stylesheet" href="style/news.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
<div class="content">
    <div class="content">
        <div id="page-preloader" class="preloader">
        <div class="loader"></div>
    </div>
          <section class="news-page">
            <div class="wrapper">
            <div class="exit-single-news">
                <a href="news.php"><img src="img/close.png" alt="closeNews"></a>
            </div>
            <div class="news-container">
          <?php
            $query2 = mysqli_query($connection, "SELECT * FROM news WHERE id=".$_GET['id']." ORDER BY id DESC");
            $c=0;
            while($article = mysqli_fetch_assoc($query2)) {
              $c++;
              echo 
              '<div class="news-main-article">
                <img src="'.$article['img'].'" alt="">
                <h2>'.$article['title'].'</h2>
                <p>'.$article['full_text'].'</p>
                <a href="\contacts.html#contact__link" class="button">Свяжитесь со мной</a>
              </div>';
            }
            if($c==0) {
              echo ("<h2>Статья не найдена, попробуйте снова!</h2>");
            }
          ?>
              </div>
            </div>
          </section>

          <footer class="home-footer">
            <div class="wrapper">
              <div class="footer-block">
                <div class="footer-block__item">
                  <h1>Let's Work Together</h1>
                  <p>Have a project you'd like to discuss?</p>
                  <a href="#" class="footer-block__button">Contact Me</a>
                </div>
                <div class="footer-block__item">
                  <div class="footer-block__contact">
                    <img src="/img/mail.png" alt="">
                    <a href="promchek@icloud.com" target="_blank">promchek@icloud.com</a>
                  </div>
                  <div class="footer-block__contact">
                    <img src="/img/vk.png" alt="">
                    <a href="https://vk.com/ariato" target="_blank">on vk</a>
                  </div>
                  <div class="footer-block__contact">
                    <img src="/img/instagram-sketched.png" alt="">
                    <a href="https://www.instagram.com/_ariato/" target="_blank">on instagram</a>
                  </div>
                  <div class="footer-block__contact">
                    <img src="/img/twitter.png" alt="">
                    <a href="https://twitter.com/nosavelie" target="_blank">on twitter</a>
                  </div>
                </div>
              </div>
            </div>
          </footer>
</div>
<script src="./js/script.js"></script>
<script src="./js/preloader.js"></script>
</body>
</html>