<?php
session_start();
?>
<!DOCTYPE html>
<html class="login-bg">
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
    <div class="container_login">
        <div class="subtitle_login">
            <p>Log in</p>
        </div>
        <form action="includes/login.inc.php" method="post" class="login">
           
                <label for="email" class="log_mail">Email</label>
                <input type="text" id="log_mail" name="email" placeholder="Email...">
           
           
                <label for="pass" class="log_pass">Password</label>
                <input type="password" id="log_pass" name="pass" placeholder="Password...">


                <button type="submit"  name="submit" class="login-btn">
                  Log in
                </button>
                <a href="register.php" class="register-link">You don't have an account?</a>
        
        </form>
       
    </div>
        


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
</body>
<footer class="login-footer">
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