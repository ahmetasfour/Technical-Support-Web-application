<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rezerevasyon</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo">TÇM.</a>

      <nav class="navbar">
         <a href="home.php">Anasayfa</a>
         <a href="about.php">Hakkında</a>
         <a href="book.php" hidden>rezervasyon</a>
         <a href="login_form.php" >üye ol</a>
      </nav>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>Danışma talebi alınız!</h1>
   </div>

   <!-- booking section starts  -->

   <section class="booking">

      <h1 class="heading-title">taleb bilgileri gir!</h1>

      <form action="book_form.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>Ad :</span>
               <input type="text" placeholder="adınızı giriniz" name="name">
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="email giriniz" name="email">
            </div>
            <div class="inputBox">
               <span>telefon numarası :</span>
               <input type="int" placeholder="numarayi giriniz" name="phone">
            </div>
            <div class="inputBox">
               <span>adress :</span>
               <input type="text" placeholder="adressi giriniz" name="address">
            </div>
            <div class="inputBox">
               <span> Danişmanın konusu giriniz:</span>
               <input type="text" placeholder="uç kelime ile konuyu ifade ediniz" name="danismak">
            </div>
            <div class="inputBox">
               <span>siyans sayısı :</span>
               <input type="number" placeholder="tahmini sure" name="sure">
            </div>
            <div class="inputBox">
               <span>taleb tarihi :</span>
               <input type="date" name="tarih">
            </div>
            <div class="inputBox">
               <span>saati seçiniz :</span>
               <input type="time" name="saat">
            </div>
         </div>

         <input type="submit" value="talebi gonder" class="btn" name="send">

      </form>

   </section>

   <!-- booking section ends -->


   <!-- footer section starts  -->

   <section class="footer">

         <div class="box-container">

            <div class="box">
               <h3>hızlı bağlantılar</h3>
               <a href="home.php"> <i class="fas fa-angle-right"></i> Anasayfa</a>
               <a href="about.php"> <i class="fas fa-angle-right"></i> Hakkında</a>
               <a href="rezervasyon.php"> <i class="fas fa-angle-right"></i> rezervasyon</a>
            </div>


            <div class="box">
               <h3>iletişim bilgileri</h3>
               <a href="05373849311"> <i class="fas fa-phone"></i> 05373849311 </a>
               <a href="ahmet.asfour@gmail.com"> <i class="fas fa-envelope"></i> ahmet.asfour@gmail.com </a>
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

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>
</html>