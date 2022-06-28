<?php
session_start();
?>
<!DOCTYPE html>
<html class="register-bg">
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
    <div class="container_register">
        <div class="subtitle_register">
            <p>Sign up</p>
        </div>
        <form action="includes/signup.inc.php" method="post" class="register">
 
          <label for="first_name" class="reg-name"><b>First Name *</b></label>
          <input type="text" placeholder="Your name..." name="first_name" id="name" required>

          <label for="last_name" class="reg-name"><b>Last Name</b></label>
          <input type="text" placeholder="Your name..." name="last_name" id="name">

          <label for="birthday" class="bday"><b>Birthday *</b></label>
          <input type="date" name="birthday" id="bday" required>

          <label for="city" class="reg-psw"><b>Location</b></label>
          <input type="text" placeholder="Your City" name="city" id="loc">

          <label for="email" class="reg-email"><b>Email *</b></label>
          <input type="email" placeholder="Enter Email..." name="email" id="email" required>

          <label for="gender" class="reg-uname"><b>Gender</b></label>
          <select name="gender" id="uname" required>
            <option>Choose your gender</option>
            <option>Men</option>
            <option>Woman</option>
            <option>Another</option>
          </select>
          <label for="passowrd" class="password"><b>Password *</b></label>
          <input type="password" placeholder="Password..." name="pass" id="psw" required>

          <label for="psw-repeat" class="reg-psw"><b>Repeat Password *</b></label>
          <input type="password" placeholder="Repeat Password" name="pswRepeat" id="psw" required>

          <label for="hobby" class="reg-psw"><b>Hobby *</b></label>
          <input type="text" placeholder="Hobby..." name="hobby" id="psw" required>


           
                

                <button type="submit" class="register-btn" name="submit">Register</buttont>
        
        </form>
       
    </div>
        


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
</body>
<footer class="register-footer">
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
