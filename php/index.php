<?php

require ('dischi.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php dischi</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="box-logo">
          <img src="img/logo.png" alt="">
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <section class="cd-box">
          <?php
          foreach ($dischi as $disco) { ?>
            <div class="album-box">
            <img src=" <?php echo $disco['poster']?>" alt="<?php echo $disco['title'] ?>">
            <h3><?php echo $disco['title'] ?></h3>
            <p><?php echo $disco['author'] ?></p>
            <p><?php echo $disco['genre'] ?></p>
            <p><?php echo $disco['year'] ?></p>
            </div>
            <?php
          }
          ?>
        </section>
      </div>
    </main>
  </body>
</html>
