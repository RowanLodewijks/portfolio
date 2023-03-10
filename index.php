<?php
include "./db_conn.php";
$obj = new Connect();
$conn = $obj->connection();
?>

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
      <div class="home">
        <h3 class="home_title">Hi,<br>Im Rowan,<br>Web Developer</h3>
        <div class="home_grid">
          <a href="./contact" class="home_link">
            <div class="home_button">
              Contact me<ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
          </a>
          <div class="home_devices">
            <img src="./assets/img/devices.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section2" id="section2">
    <div class="container">
      <h3>About Me</h3>
      <p>
        Hallo, ik ben Rowan Lodewijks en ik ben een zeer gemotiveerd persoon met een passie voor programmeren. Ik ben 18 jaar en ik zit momenteel op het Grafisch Lyceum Utrecht. Ik doe daar de opleiding Webdeveloper en ik zit nu in het tweede jaar.
        Ik ben altijd op zoek naar nieuwe uitdagingen en kansen om mijn vaardigheden uit te breiden en te groeien als professional.
        Neem een kijkje in mijn portfolio om een aantal van mijn werk en realisaties te zien. Bedankt voor het bezoeken!
      </p>
      <div class="aboutme_buttons">
        <a href="./assets/img/CV.pdf">
          <div class="aboutme_button">My CV</div>
        </a>
        <a href="https://github.com/RowanLodewijks">
          <div class="aboutme_button">My Github</div>
        </a>
      </div>
    </div>
  </section>
  <section class="section3" id="section3">
    <div class="container">
      <h3>My Projects</h3>
      <div class="project_grid">
        <?php
          $query = "SELECT * FROM projecten ORDER BY id";
          $usersResult = mysqli_query($conn, $query);
          while ($rowUser = mysqli_fetch_assoc($usersResult)) {
        ?>
        <a href="./projectinfo?id=<?= $rowUser['id'] ?> ">
          <div class="project">
            <img src="./assets/img/<?= $rowUser["image"] ?>">
          </div>
        </a>
        <?php
          }
        ?>
      </div>
    </div>
  </section>
  <section class="section4" id="section4">
    <div class="container">
      <h3>My Skills</h3>
      <div class="myskills">
        <div class="skill">
          <i class="fa-brands fa-html5"></i>
          <h4>HTML</h4>
          <!-- <div class="progress">
            <div data-progress="85"></div>
          </div> -->
          <div class="skill_stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
          </div>
        </div>
        <div class="skill">
          <i class="fa-brands fa-css3-alt"></i>
          <h4>CSS</h4>
          <!-- <div class="progress">
            <div data-progress="75"></div>
          </div> -->
          <div class="skill_stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
        </div>
        <div class="skill">
          <i class="fa-brands fa-square-js"></i>
          <h4>Javascript</h4>
          <!-- <div class="progress">
            <div data-progress="40"></div>
          </div> -->
          <div class="skill_stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
        </div>
        <div class="skill">
          <i class="fa-brands fa-php"></i>
          <h4>PHP</h4>
          <!-- <div class="progress">
            <div data-progress="40"></div>
          </div> -->
          <div class="skill_stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section5" id="section5">
    <div class="container">
      <h3>My Timeline</h3>
      <div class="timeline">
        <div class="timeline_item">
          <i class="fa-solid fa-school"></i>
          <div class="timeline_item_text">
            <h6>2021 - present</h6>
            <strong>Webdeveloper</strong>
            <b>Grafisch Lyceum Utrecht</b>
            <p>Ik heb de opleiding Webdeveloper gedaan. Deze opleiding was 3 jaar lang.
            </p>
          </div>
        </div>
        <div class="timeline_item">
          <i class="fa-solid fa-school"></i>
          <div class="timeline_item_text">
            <h6>Comming - Soon</h6>
            <strong>Comming Soon</strong>
            <b>Comming Soon</b>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam itaque blanditiis sunt, nemo atque iure.
            </p>
          </div>
        </div>
        <div class="timeline_item">
          <i class="fa-solid fa-school"></i>
          <div class="timeline_item_text">
            <h6>Comming - Soon</h6>
            <strong>Comming Soon</strong>
            <b>Comming Soon</b>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam itaque blanditiis sunt, nemo atque iure.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    include "./footer.php";
  ?>
</body>

</html>