<link rel="stylesheet" href="css/s.css">
<link rel="stylesheet" href="css/style.css">

<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="header">

<a href="home.php" class="logo">TÇM.</a>

<nav class="navbar">
   <a href="home.php">Anasayfa</a>
   <a href="about.php">Hakkında</a>
   <a href="book.php" hidden>rezervasyon</a>
   <a href="logout.php" >çıkış</a>

</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
   
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="configbook.php" class="btn">danişma talebleri</a>
      <a href="config_user.php" class="btn">sistemin kullanıcıları</a>
      <a href="register_admin.php" class="btn">user ekle</a>
      <a href="books.php" class="btn">makaleler</a>
      <a href="admin_add.php" class="btn">makale ekle</a>
      <a href="admin_book.php" class="btn">makale düzenle</a>




   </div>

</div>

</body>
</html>