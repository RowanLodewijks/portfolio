<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rowan Lodewijks</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <section class="section1" id="section1">
    <div class="canvas_container">
      <canvas id="canv" width="32" height="32"></canvas>
    </div>
    <div class="container">
      <!-- HEADER START -->
      <header>
        <a href="./">
          <div class="logo">Rowan</div>
        </a>
        <ul>
          <li><a href="./">Home</a></li>
          <li><a href="./#section2">About Me</a></li>
          <li><a href="./#section3">My Projects</a></li>
          <li class="header_dropdown">
            <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
            <label for="dropdown">More</label>
            <div class="section-dropdown"> 
              <a href="./#section4">My Skills</a>
              <a href="./#section5">My Timeline</a>
            </div>
          </li>
        </ul>
        <a href="./contact" class="contact_link">
          <div class="contact_text">Contact Me<ion-icon name="chevron-forward-outline"></ion-icon></div>
        </a>
        <button class="menu_toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </button>
      </header>
      <div class="menu">
        <a href="./" onclick="closeMenu();">
          <div class="menu_logo">Rowan</div>
        </a>
        <ul>
          <a href="./" onclick="closeMenu();">
            <li>Home<ion-icon name="chevron-forward-outline"></ion-icon></li>
          </a>
          <a href="./#section2" onclick="closeMenu();">
            <li>About Me<ion-icon name="chevron-forward-outline"></ion-icon></li>
          </a>
          <a href="./#section3" onclick="closeMenu();">
            <li>My Projects<ion-icon name="chevron-forward-outline"></ion-icon></li>
          </a>
          <a href="./#section4" onclick="closeMenu();">
            <li>My Skills<ion-icon name="chevron-forward-outline"></ion-icon></li>
          </a>
          <a href="./#section5" onclick="closeMenu();">
            <li>My Timeline<ion-icon name="chevron-forward-outline"></ion-icon></li>
          </a>
        </ul>
        <a href="./contact" class="menu_contact_link" onclick="closeMenu();">
          <div class="menu_contact_text2">Contact Me<ion-icon name="chevron-forward-outline"></ion-icon></div>
        </a>
      </div>
      <!-- HEADER END -->

      <!-- MAIN START -->
      <div class="contact_title">
        <h2>Contact Me</h2>
      </div>
      <div class="contact">
        <form action="https://formsubmit.co/13ad722daa5c1b0c662b4e6b4566825f" method="POST">
        <!-- <form action="./thanks" method="POST"> -->
          <p>Uw Voornaam:</p>
          <input type="text" id="fname" name="fname" placeholder="Voornaam" required>
          <p>Uw Achternaam:</p>
          <input type="text" id="lname" name="lname" placeholder="Achternaam" required>
          <p>Uw E-mail:</p>
          <input type="email" id="email" name="email" placeholder="E-mail" required>
          <p>Het Onderwerp:</p>
          <input type="text" id="subject" name="subject" placeholder="Onderwerp">
          <p>Uw Bericht:</p>
          <textarea rows="5" cols="30" id="message" name="message" placeholder="Bericht" required></textarea>
          <input type="hidden" name="_next" value="https://rowanlodewijks.nl/thanks">
          <!-- <input type="hidden" name="_next" value="http://127.0.0.1:5500/thanks.php"> -->
          <!-- <input type="hidden" name="_next" value="http://10.52.7.34/Het%20Bureau/Portfolio_bestanden/portfolio/thanks"> -->
          <input type="hidden" name="_captcha" value="false">
          <input type="submit" id="submit" class="submit">
        </form>
      </div>
    </div>
  </section>
  <!-- MAIN END -->

  <?php
    include "./footer.php";
  ?>
</body>

</html>