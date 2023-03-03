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
      <?php
        include "./header.php";
      ?>

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