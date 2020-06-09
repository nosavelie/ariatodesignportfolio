<?php 
  require_once "php/worksbase.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея работ</title>
    <link rel="stylesheet" href="style/works-gallery.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body>
    <div class="content">
    <div id="page-preloader" class="preloader">
        <div class="loader"></div>
      </div>
    
    
        <section class="active-menu" id="menu">
            <div class="close-menu" id="close_menu_icon">&times;</div>
            <div class="menu-list">
              <a href="index.html" class="munu-list__item">Главная</a>
              <a href="Aboutme.html" class="munu-list__item">Обо мне</a>
              <a href="#" class="munu-list__item">Галерея работ</a>
              <a href="news.php" class="munu-list__item">Мой блог</a>
              <a href="contacts.html" class="munu-list__item">Контакты</a>
            </div>
          </section>
    
    
          <section class="start-page">
            <div class="works__home">
                <div class="works__title">
                    <div class="rgline">
                        <div id="rectangle1"></div>
                        <div id="rectangle2"></div>
                    </div>
                    <p>Работы</p>
                    <div class="rgline">
                        <div id="rectangle3"></div>
                        <div id="rectangle4"></div>
                    </div>
                </div>
            </div>
            <div class="start-page__menu-wrap">
              <a href="#" class="start-page__menu" id="open_menu_icon">
                <span>Меню</span>
                <img src="/img/menu.svg" alt="" />
              </a>
              <a href="index.html">
                <img class="logo" src="/img/LogoWhite 1.png" alt="" />
              </a>
              <div class="start-page__contact">
                <a href="\contacts.html#contact__link">
                  <img src="/img/Home__contact-form.png" alt="" />
                </a>
              </div>
            </div>
          </section>

          <section class="works-gallery">
              <div class="wrapper">
                <div class="works-gallery-items">
                  <?php

                    while($article = mysqli_fetch_assoc($query1)) {
                    echo
                    '<a href="'.$article['link'].'" class="works-gallery__item" target="_blank" style="background-image: url(img/'.$article['img'].')">
                    </a>';
                    }
                  ?>
                </div>
              </div>
          </section>

          <footer class="home-footer">
            <div class="wrapper">
              <div class="footer-block">
                <div class="footer-block__item">
                <h1>Давайте работать вместе</h1>
            <p>Есть проект, который вы хотели бы обсудить?</p>
                  <a href="\contacts.html#contact__link" class="footer-block__button">Напишите мне</a>
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