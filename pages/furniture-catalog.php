<?php include '../config.php' ?>
<?php $page = 'furniture' ?>
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
  <link rel="stylesheet" href="/styles/about-us.css">
  <link rel="stylesheet" href="/styles/carousel.css">
  <link rel="stylesheet" href="/styles/header.css">
  <link rel="stylesheet" href="/styles/footer.css">
  <link rel="stylesheet" href="/styles/furniture.css">


  <!-- favicon -->
  <link rel="shortcut icon" href="/assets/icons/icon-white.png" />
  <title><?php echo $lang['title'] ?></title>
</head>

<body>
  <section class='header-section'>
    <?php include('../components/header.php') ?>

  </section>
  <div class="furniture-block">
    <div class="furniture-block-item">
      <div class="title">
        <h2><?php echo $lang['furniture-title'] ?></h2>
      </div>
      <p class="about-us-header"><?php echo $lang['furniture-description'] ?></p>
    </div>
    <div class="furniture-block-catalogs">
      <div class="furniture-catalog-item">
        <a href="/assets/pdf/163066125350756.pdf" download>
          <div class="furniture-catalog-image twin-catalog"></div>
          <p class="furniture-catalog-title"><?php echo $lang['twin-catalog'] ?> </p>
        </a>
      </div>
      <div class="furniture-catalog-item">
        <a href="/assets/pdf/каталог MVM.pdf" download>
          <div class="furniture-catalog-image mvm-catalog "></div>
          <p class="furniture-catalog-title"><?php echo $lang['mvm-catalog'] ?></p>
        </a>
      </div>
    </div>
  </div>
  <?php include('../components/footer.php') ?>

</body>

</html>