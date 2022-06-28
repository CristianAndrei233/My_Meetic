<?php
session_start();
?>
<!DOCTYPE html>
<html class="home-bg">
<head>
  <meta charset="UTF-8">
  <title>title</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Purple+Purse&family=Qwigley&family=Rammetto+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css"> 
</head>

<header>
    <div class="logo">
        <img src="Images/Tindar-logo.png" alt="logo">  
        <p>Tindar</p>
    </div>
    <div class="hrefs">
        <a href="index.php">Home</a>
        <?php
          if(isset($_SESSION["userid"]))
          {
        ?>

            <a href="profile.php">Profile</a>
            <a href="includes/logout.inc.php">Logout</a>
        <?php
          }
          else
          {
        ?>
            <a href="login.php">Log-in</a>
            <a href="register.php">Sign-up</a>
        <?php
          }
        ?>
        <a href="#">About Us</a>
    </div>
</header>
<body>
  <div class="conn">
     
  </div>
    <div class="title">
        <h1>Welcome to Tindar ! <h1>
    </div>

    
    <div class="conatiner">
        <div class="subtitle">
            <p>You are </p>
        </div>

          <button type="submit" class="woman">
          <a href="login.php"> In search of a woman </a>
          </button>

          <button type="submit" class="men">
            <a href="login.php"> In search of a men </a>
          </button>

    </div>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
</body>
<footer>
    <div class="footer_text">
        <p>About: Some text , not lorem ipsum cuz im lazy to search on internet to copy/paste</p>
    </div>
  <img src="Images/email.png" alt="email">
  <img src="Images/facebook.png" alt="facebook">
  <img src="Images/pinterest.png" alt="pinterest">
  <img src="Images/rss.png" alt="rss">
  <img src="Images/twitter.png" alt="twitter">
  

</footer>
</html>