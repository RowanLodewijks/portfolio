<?php
if(isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
}
?>
<!-- Uw gegevens zijn:<br><br> -->
  <!-- Naam:<br> -->
  <?php // echo $_POST["fname"] . " " .$_POST["lname"]; ?><!-- <br><br> -->
  <!-- Email:<br> -->
  <?php // echo $_POST["email"]; ?><!-- <br><br> -->
  <!-- Subject:<br> -->
  <?php // echo $_POST["subject"]; ?><!-- <br><br> -->
  <!-- Message:<br> -->
  <?php // echo $_POST["message"]; ?><!-- <br><br> -->


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
      
      <div class="contact_title">
        <h2>Bedankt, <?php echo $_POST["fname"]; ?></h2>
      </div>
      <div class="thanks">
        <ion-icon name="mail-outline"></ion-icon>
        Het formulier is verstuurd.<br><br>
        <a href="./" class="goback_link">
          <div class="goback">Go Back</div>
        </a>
      </div>
    </div>
  </section>

  <?php
    include "./footer.php";
  ?>
</body>

</html>