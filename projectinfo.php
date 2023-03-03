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
</head>

<body>
  <section class="section1">
    <div class="canvas_container">
      <canvas id="canv" width="32" height="32" id="section1"></canvas>
    </div>
    <div class="container">
      <?php
        include "./header.php";
      ?>

      <!-- MAIN START -->
      <div class="project_title">
        <h2>Project Informatie</h2>
      </div>
      <div class="project_info">
        <div class="project_info_title">
          <?php
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
          } else {
            $id = 1;
          }

          $query = "SELECT titel FROM projecten WHERE id = $id";
          $usersResult = mysqli_query($conn, $query);
          while ($rowUser = mysqli_fetch_assoc($usersResult)) {
          ?>
            <h3><?= $rowUser["titel"] ?></h3>
          <?php
          }
          ?>
        </div>
        <div class="project_info_img">
        <?php
        $query = "SELECT image FROM projecten WHERE id = $id";
        $usersResult = mysqli_query($conn, $query);
        while ($rowUser = mysqli_fetch_assoc($usersResult)) {
        ?>
          <img src="./assets/img/<?= $rowUser["image"] ?>">
        <?php
        }
        ?>
        </div>
        <?php
        $query = "SELECT tijd FROM projecten WHERE id = $id";
        $usersResult = mysqli_query($conn, $query);
        while ($rowUser = mysqli_fetch_assoc($usersResult)) {
        ?>
          <b class="project_tijd"><?= $rowUser["tijd"] ?></b>
        <?php
        }
        ?>
        <?php
        $query = "SELECT text FROM projecten WHERE id = $id";
        $usersResult = mysqli_query($conn, $query);
        while ($rowUser = mysqli_fetch_assoc($usersResult)) {
        ?>
          <p><?= $rowUser["text"] ?></p>
        <?php
        }
        ?>
        
        <div class="project_links">
        <?php
        $query = "SELECT link FROM projecten WHERE id = $id";
        $usersResult = mysqli_query($conn, $query);
        while ($rowUser = mysqli_fetch_assoc($usersResult)) {
        ?>
          <a href="<?= $rowUser["link"] ?>" class="project_link">Link Naar Project</a>
          <?php
        }
        ?>

        <?php
        $query = "SELECT gitlink FROM projecten WHERE id = $id";
        $usersResult = mysqli_query($conn, $query);
        while ($rowUser = mysqli_fetch_assoc($usersResult)) {
        ?>
          <a href="<?= $rowUser["gitlink"] ?>" class="project_link">Link Naar Code</a><br>
          <?php
        }
        ?>
        </div>
        
<!-- INSERT INTO texten (text) VALUES ('TEXT NUMMER 1'); -->
          <div class="project_goback_div">
            <a href="./" class="project_goback">Go Back</a>
          </div>
      </div>
    </div>
  </section>
  <!-- MAIN END -->
  
  <?php
    include "./footer.php";
  ?>
</body>

</html>