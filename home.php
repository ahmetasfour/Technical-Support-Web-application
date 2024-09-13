<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>teknik çozum merkezi</title>

   <!-- swiper css baglantısı  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- yazı awesome cdn baglantısı  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- temal css dosya baglantısı  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header kısmın baslangıcı  -->

<section class="header">

   <a href="home.php" class="logo">TÇM.</a>

   <nav class="navbar">
      <a href="home.php">Anasayfa</a>
      <a href="books.php">makaleler</a>

      <a href="about.php">Hakkında</a>
      <a href="book.php" hidden>rezervasyon</a>
      <a href="login_form.php" >üye ol</a>

   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header kısmı bitmesi -->

<!-- Anasayfa kısmı baslangıcı  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/1co.jpeg) no-repeat" style="filter: 56px;">
            <div class="content">
               <span>teknik, çözümler, danişmanlık</span>
               <h3>Her zaman yanında </h3>
               <a href="kesfet.php" class="btn">keşfet</a>
               <a href="https://www.google.com/maps/place/Kastamonu+%C3%9Cniversitesi+M%C3%BChendislik+ve+Mimarl%C4%B1k+Fak%C3%BCltesi/@41.4383302,33.765281,16.91z/data=!4m13!1m7!3m6!1s0x4084fa1240163891:0xd819b0a02911d532!2sKastamonu,+Kastamonu+Merkez%2FKastamonu!3b1!8m2!3d41.376625!4d33.776497!3m4!1s0x4084fb3ca356dc11:0x8276cd69885e00e9!8m2!3d41.4381515!4d33.7635136" class="btn" target="_blank">yol tarifi</a>
               <br><a  href="login_form.php" class="btn" >renduvu al</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/2cov.webp) no-repeat">
            <div class="content">
               <span>Deneyimli ekip, sosyal medya e_ticaret, reklamcılık</span>
               <h3>Yaptığın iş dijatal ortamlara taşı</h3>
               <a href="kesfet.php" class="btn">Hizmetlerimizi keşfet</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/3cov.png) no-repeat">
            <div class="content">
               <span>Network, control system, Ai</span>
               <h3>işletmede teknik alt yapı kurma</h3>
               <a href="kesfet.php" class="btn">keşfet</a>
            </div>
         </div>

         
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Hizmetlerimiz</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cc.png" alt="">
         <h3>Network altyapı</h3>
      </div>

      <div class="box">
         <img src="images/sh.png" alt="">
         <h3>Akıllı evler sistemleri</h3>
      </div>

      <div class="box">
         <img src="images/ai.png" alt="">
         <h3>Yapay zeka destekli otomasyon</h3>
      </div>

      <div class="box">
         <img src="images/cs.png" alt="">
         <h3>control sistemleri</h3>
      </div>

      <div class="box">
         <img src="images/dm.png" alt="">
         <h3>e_ticaret pazarlama</h3>
      </div>

      <div class="box">
         <img src="images/wma.png" alt="">
         <h3>Web mobil uygulamaları</h3>
      </div>

      <div class="box">
         <img src="images/cl.png" alt="">
         <h3>Bulut depolama</h3>
      </div>

      <div class="box">
         <img src="images/bd.png" alt="">
         <h3>Büyük veri</h3>
      </div>

      <div class="box">
         <img src="images/rb.png" alt="">
         <h3>Robotik sistemler</h3>
      </div>

      <div class="box">
         <img src="images/ui.png" alt="">
         <h3>Uİ/UX Tasarım</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/a1.jpeg" alt="">
   </div>

   <div class="content">
      <h3>Hakkında</h3>
      <p>Teknik çozum merkezi deneyimli ekipiyle IT desteği vermektedir. işlerini geliştirebilecek satişlarinizi artırabilecek teknikler çözümler bizden destek alarak hedeflediniz noktaya gelebileceksiniz.
         bizden danişma veya destek isterseniz üye olduktan sonra rendevu alma imkanınız vardır
      </p>
      <a href="about.php" class="btn">Daha fazla oku</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> HİZMETLERİMİZ </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/1b.jpeg" alt="">
         </div>
         <div class="content">
            <h3>e_ticaret & veri analizi</h3>
            <p>SEO arama motorları , veri analizi ,e_ticaret sistemi kurma, kurulan sistemi güncellmeler yapmak satişlarınızı artma vadiyle hizmet veriyoruz !</p>
            <a href="book.php" class="btn">Rendevu al</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/nwb.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Network & Güvenlik</h3>
            <p>Kurumların sahip olduğu tüm altyapı sistemlerinin hızlı ve verimli çalışabilmesi için network altyapısı çok önemlidir. Network sistemlerinin işletmenizin ihtiyacına uygun, güvenilir, ekonomik ve sürdürülebilir olarak tasarlanıp, uygulanmasını sağlamaktayız.

            </p>
            <a href="login_form.php" class="btn">Rendevu al</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/aeo.png" alt="">
         </div>
         <div class="content">
            <h3>Akıllı evler</h3>
            <p>Akıllı ev sistemleri ile bütün bileşenlerin entegrasyonu evinizde.
               Ev otomasyon sistemine uyumlu tüm cihazlarınız istek ve
               alışkanlıklarınıza uyum içinde çalışır.
               SHOWROOM RANDEVU TALEP ET!</p>
            <a href="login_form.php" class="btn">Rendevu al</a>
         </div>
      </div>

   </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>hızlı bağlantılar</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Anasayfa</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> Hakkında</a>
            <a href="login_form.php"> <i class="fas fa-angle-right"></i> rezervasyon</a>
         </div>


         <div class="box">
            <h3>iletişim bilgileri</h3>
            <a href="#"> <i class="fas fa-phone"></i> 05373849311 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ahmet.asfour@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> istanbu, turkiye - 374534 </a>
         </div>

         <div class="box">
            <h3>bizi takip edin</h3>
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook"></i> facebook </a>
            <a href="https://www.linkedin.com/in/ahmed-6097031b9/"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>

      <div class="credit"> created by <span>Ahmed asfour</span> | all rights reserved! </div>

   </section>
<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>