<?php include '../config.php' ?>
<?php $page = 'contacts' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- link preview -->
  <meta property="og:url" content="https://valero.kharkov.ua" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="ДВЕРИ | Valero" />
  <meta property="og:description" content="..." />
  <meta property="og:image" content="/assets/covers/cover.jpg" />

  <!-- meta -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="..." />
  <meta name="keywords" content="..." />

  <!-- canonical link-->
  <link rel="canonical" href="https://valero.kharkov.ua/" />

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Courgette&display=swap" rel="stylesheet" />

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/ccca2d81be.js" crossorigin="anonymous"></script>
  <!-- aos animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <!-- custom script -->
  <script src="/js/index.js"></script>
  <script src="/js/navbar.js"></script>

  <!-- font -->
  <link href='http://fonts.googleapis.com/css?family="Roboto", sans-serif;' rel="stylesheet" type="text/css" />

  <!-- custom css -->
  <link rel="stylesheet" href="/styles/global.css" />
  <link rel="stylesheet" href="/styles/home.css" />
  <link rel="stylesheet" href="/styles/carousel.css" />
  <link rel="stylesheet" href="/styles/header.css" />
  <link rel="stylesheet" href="/styles/footer.css" />
  <link rel="stylesheet" href="/styles/contacts.css" />

  <!-- favicon -->
  <link rel="shortcut icon" href="/assets/icons/icon-white.png" />
  <title><?php echo $lang['title'] ?></title>
</head>

<body>
  <section class="header-section">
    <?php include('../components/header.php') ?>
  </section>
  <div class="contact-block">
    <div class="contact-item">
      <div class="contact-info">
        <div class="title">
          <h2><?php echo $lang['contacts-title'] ?></h2>
        </div>
        <p>
          <?php echo $lang['footer_address'] ?>
        </p>
      </div>
      <div class="contact-info">
        <div class="title">
          <h2><?php echo $lang['working_hours'] ?></h2>
        </div>
        <p>
          <?php echo $lang['working_mode'] ?><br />
          <?php echo $lang['regular_days'] ?><br />
          <?php echo $lang['weekends'] ?><br />
          <?php echo $lang['sunday'] ?>
        </p>
      </div>
      <div class="contact-images">
        <img src="/assets/IMG_1350.JPG" alt="location" />
        <img src="/assets/IMG_1351.JPG" alt="location" />
      </div>
    </div>
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.703129563683!2d36.24953981571441!3d49.97942567941315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a088b673ec4d%3A0x66361b95137e4edd!2z0KHQsNC70L7QvSDQvNC10LbQutC-0LzQvdCw0YLQvdGL0LUg0LTQstC10YDQuCBWYWxlcm8!5e0!3m2!1sen!2sua!4v1640857025407!5m2!1sen!2sua" style="border: 0" allowfullscreen="" loading="lazy" class="map"></iframe>
    </div>
  </div>
  <?php include('../components/footer.php') ?>

</body>

</html>