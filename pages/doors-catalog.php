<?php include '../config.php' ?>
<?php $page = 'catalog' ?>
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="...">
  <meta name="keywords" content="...">

  <!-- canonical link-->
  <link rel="canonical" href="https://valero.kharkov.ua/" />

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Courgette&display=swap" rel="stylesheet">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/ccca2d81be.js" crossorigin="anonymous"></script>
  <!-- aos animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <!-- custom script -->
  <script src="/js/index.js"></script>
  <script src="/js/navbar.js"></script>

  <!-- font -->
  <link href='http://fonts.googleapis.com/css?family="Roboto", sans-serif;' rel='stylesheet' type='text/css'>

  <!-- custom css -->
  <link rel="stylesheet" href="/styles/global.css">
  <link rel="stylesheet" href="/styles/home.css">
  <link rel="stylesheet" href="/styles/carousel.css">
  <link rel="stylesheet" href="/styles/header.css">
  <link rel="stylesheet" href="/styles/footer.css">
  <link rel="stylesheet" href="/styles/about-us.css">

  <!-- favicon -->
  <link rel="shortcut icon" href="/assets/icons/icon-white.png" />
  <title>Салон дверей Valero</title>
</head>

<body>
  <section class='header-section'>
    <?php include('../components/header.php') ?>
  </section>
  <input type="text" value="<?php echo $_SESSION['lang'] ?>" id="lang" hidden>
  <section class="door-tabs">
    <div class="tabs-block">
      <div class="tab-item" id="tab1" onclick="onDoorSetHandler('ФАДО')">
        <p class="tab-item-title"><?php echo $lang['fado'] ?></p>
      </div>
      <div class="tab-item" id="tab2" onclick="onDoorSetHandler('АРТ_ДОР')">
        <p class="tab-item-title"><?php echo $lang['art_door'] ?></p>
      </div>
      <div class="tab-item" id="tab3" onclick="onDoorSetHandler('ДОРИС')">
        <p class="tab-item-title"><?php echo $lang['dooris'] ?></p>
      </div>
      <div class="tab-item" id="tab4" onclick="onDoorSetHandler('ПАПА_КАРЛО')">
        <p class="tab-item-title"><?php echo $lang['papa_carlo'] ?></p>
      </div>
      <div class="tab-item" id="tab5" onclick="onDoorSetHandler('ПАОЛО_РОССИ')">
        <p class="tab-item-title"><?php echo $lang['paolo_rossi'] ?></p>
      </div>
      <div class="tab-item" id="tab6" onclick="onDoorSetHandler('ART_LINE')">
        <p class="tab-item-title" style="text-align: center;"><?php echo $lang['art_line'] ?></p>
      </div>
    </div>
    <div class="doors-preview" id="doors-catalog"></div>
  </section>
  <?php include('../components/footer.php') ?>
  <script src="/js/doorsCatalog.js"></script>
</body>

</html>