<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>たぐちの宿</title>
  <meta name="description" content="This site is a test site.">
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="styles/loader.css">
  <script src="scripts/vendors/pace.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400;700&family=Noto+Sans+JP:wght@500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="styles/vendors/bootstrap-reboot.css" />
  <link rel="stylesheet" href="styles/vendors/swiper.min.css" />
  <link rel="stylesheet" href="styles/style.css" />

</head>

<body>
  <div id="global-container">
    <div id="container">
      <div class="mobile-menu__cover"></div>
      <div class="nav-trigger"></div>
      <header class="header">
        <div class="header__inner appear up">
          <div class="logo item">
            <a href="index.php">
              <img src="images/logo.svg" alt="" class="logo__img" />
              <span class="logo__taguchi">たぐちの</span>
              <span class="logo__world">宿</span></a>
          </div>
          <nav class="header__nav">
            <ul class="header__ul">
              <li class="header__li item"><a href="#">トップ</a></li>
              <li class="header__li item"><a href="about.html">サイトについて</a></li>
              <li class="header__li item">
                <a class="btn filled" href="contact.php">お問合わせ</a>
              </li>
            </ul>
          </nav>
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </header>




      <div id="content">
        <div class="hero">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="hero__title">Enjoy Rich</div>
                <img src="images/image-1.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <div class="hero__title">Fantastic</div>
                <img src="images/image-2.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <div class="hero__title">Experience</div>
                <img src="images/image-3.jpg" alt="" />
              </div>
            </div>
            <div class="hero__footer">
              <img class="hero__downarrow" src="images/arrow.svg" />
              <span class="hero__scrolltext">scroll</span>
            </div>
          </div>
        </div>


        <h1 class="midasi">業界最高レベルの衛生環境完備！</h1>

        <div id="main-content">
          <aside class="side left">
            <div class="side__inner">
              <a class="twitter icon tween-animate-title" href="https://twitter.com/">Twitter</a>
              <a class="fb icon tween-animate-title" href="https://ja-jp.facebook.com/">Facebook</a>
            </div>
          </aside>
          <main>
            <section class="travel">
              <div class="travel__inner">
                <div class="travel__img cover-slide">
                  <img class="img-zoom" src="images/image-travel.jpg" alt="" />
                </div>
                <div class="travel__texts appear left">
                  <div class="travel__texts-inner">
                    <div class="travel__title main-title item">
                      <span class="purple">Travel</span>
                      <span>the world</span>
                    </div>
                    <div class="travel__sub sub-title item">世界中を旅しよう</div>
                    <div class="travel__description item">
                      <p>
                        世界１５０ヶ国で<br />利用できる民泊サービスです。
                      </p>
                      <p>あなたの望む宿がきっと見つかります。</p>
                    </div>
                    <div class="travel__btn item">
                      <a href="contact.php"><button class="btn filled">もっと詳しく</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="houses">
              <div>
                <h2 class="main-title tween-animate-title">Find Your House</h2>
                <p class="sub-title tween-animate-title">お気に入りの宿泊先を見つけましょう</p>
              </div>
              <div class="houses__inner">
               
                  <div class="houses__item">
                    <div class="cover-slide hover-darken">

                      <div class="bg-img-zoom img-bg50" style="background-image: url(images/villa-1.jpg)"></div>

                    </div>
               
                <p class="houses__title">House 1</p>
              </div>
              <div class="houses__item">

                <div class="cover-slide hover-darken">
                  <div class="bg-img-zoom img-bg50" style="background-image: url(images/villa-2.jpg)"></div>
                </div>

                <p class="houses__title">House 2</p>
              </div>
              <div class="houses__item">
                <div class="cover-slide hover-darken">
                    <div class="bg-img-zoom img-bg50" style="background-image: url(images/villa-3.jpg)"></div>
              
                </div>
                <p class="houses__title">House 3</p>
              </div>
              <div class="houses__item">
                <div class="cover-slide hover-darken">
                    <div class="bg-img-zoom img-bg50" style="background-image: url(images/villa-4.jpg)"></div>
                 
                </div>
                <p class="houses__title">House 4</p>
              </div>
              <div class="houses__item">
                <div class="cover-slide hover-darken">
                    <div class="bg-img-zoom img-bg50" style="background-image: url(images/villa-5.jpg)"></div>
               
                </div>
                <p class="houses__title">House 5</p>
              </div>
              <div class="houses__item">
                <div class="cover-slide hover-darken">
                    <div class="bg-img-zoom img-bg50" style="background-image: url(images/villa-6.jpg)"></div>
                
                </div>
                <p class="houses__title">House 6</p>
              </div>
              <div class="houses__btn appear up">
                <a href="contact.php"><button class="btn slide-bg item">もっと詳しく</button></a>
              </div>
        </div>
        </section>
        <section class="popular">
          <div class="popular__header">
            <h2 class="main-title tween-animate-title">Popular Place</h2>
            <p class="sub-title tween-animate-title">人気の観光地で宿泊先を見つけましょう</p>
          </div>
          <div class="popular__inner appear up">
            <div class="popular__container">
              <div class="popular__item item">
                <div class="popular__img">
                  <img src="images/image-p1.jpg" alt="" />
                </div>
                <div class="popular__title">パリ</div>
              </div>
              <div class="popular__item item">
                <div class="popular__img">
                  <img src="images/image-p2.jpg" alt="" />
                </div>
                <div class="popular__title">ニューヨーク</div>
              </div>
              <div class="popular__item item">
                <div class="popular__img">
                  <img src="images/image-p3.jpg" alt="" />
                </div>
                <div class="popular__title">香港</div>
              </div>
              <div class="popular__item item">
                <div class="popular__img">
                  <img src="images/image-p4.jpg" alt="" />
                </div>
                <div class="popular__title">大阪</div>
              </div>
              <div class="popular__btn appear up">
                <a href="contact.php"><button class="btn cover-3d item">
                  <span>
                  もっと詳しく
                  </span>
                </button></a>
              </div>
            </div>
          </div>
        </section>
        </main>
        <aside class="side right">
          <div class="side__inner">
            <span class="tween-animate-title">&copy;Code Mafia</span>
          </div>
        </aside>
      </div>
    </div>
    <footer class="footer appear up">
      <div class="logo item">
        <img src="images/logo.svg" alt="" class="logo__img" />
        <span class="logo__stay">たぐちの</span>
        <span class="logo__world">宿</span>
      </div>
      <nav class="footer__nav">
        <ul class="footer__ul">
          <li class="footer__li item"><a href="#">トップ</a></li>
          <li class="footer__li item"><a href="about.html">サイトについて</a></li>
          <li class="footer__li item"><a href="contact.php">お問合わせ</a></li>

        </ul>

      </nav>
    </footer>
  </div>
  <nav class="mobile-menu">
    <div class="logo">
      <img src="images/logo.svg" alt="" class="logo__img" />
      <span class="logo__stay">たぐちの</span>
      <span class="logo__world">宿</span>
    </div>
    <ul class="mobile-menu__main">
      <li class="mobile-menu__item">
        <a class="mobile-menu__link" href="#">
          <span class="main-title">TOP</span>
          <span class="sub-title">トップ</span>
        </a>
      </li>
      <li class="mobile-menu__item">
        <a class="mobile-menu__link" href="about.html">
          <span class="main-title">ABOUT</span>
          <span class="sub-title">サイトについて</span>
        </a>
      </li>
      <li class="mobile-menu__item">
        <a class="mobile-menu__link" href="contact.php">
          <span class="main-title">CONTACT</span>
          <span class="sub-title">お問合わせ</span>
        </a>
      </li>
    </ul>
  </nav>
  </div>
  <script src="scripts/vendors/swiper.min.js"></script>
  <script src="scripts/vendors/TweenMax.min.js"></script>
  <script src="scripts/vendors/scroll-polyfill.js"></script>
  <script src="scripts/libs/scroll.js"></script>
  <script src="scripts/libs/text-animation.js"></script>
  <script src="scripts/libs/hero-slider.js"></script>
  <script src="scripts/libs/mobile-menu.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>