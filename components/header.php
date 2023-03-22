<!-- NAVBAR -->
<nav class="jnavbar jpadding-nav">
  <!-- logo and contacts-->
  <a class="navbar-brand" href="/">
    <img class="nav-logo" src="/assets/logo.png" alt="Doors logo">
  </a>
  <div class="right-nav-parent">
    <ul class="nav">
      <li class="nav-item">
        <a href="/<?php echo $_SESSION['lang']; ?>/about" class="nav-link txt-red">
          <?php echo $lang['about_us_tab'] ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="/<?php echo $_SESSION['lang']; ?>/catalog" class="nav-link txt-red">
          <?php echo $lang['doors_tab'] ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="/<?php echo $_SESSION['lang']; ?>/gallery" class="nav-link txt-red">
          <?php echo $lang['mounted_doors_tab'] ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="/<?php echo $_SESSION['lang']; ?>/furniture" class="nav-link txt-red">
          <?php echo $lang['furniture_doors_tab'] ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="/<?php echo $_SESSION['lang']; ?>/contacts" class="nav-link txt-red">
          <?php echo $lang['contacts_tab'] ?>
        </a>
      </li>
      <div class="language-bar">
        <a href="/en/<?php if ($page != 'index') echo $page; ?>" class="<?php echo (($page != 'door') ? 'nav-link txt-red' : 'nav-disable') ?>">
          <img src="/assets/icons/uk.png" alt="" class="nav-icon">
        </a>
        <a href="/ukr/<?php if ($page != 'index') echo $page; ?>" class="<?php echo (($page != 'door') ? 'nav-link txt-red' : 'nav-disable') ?>">
          <img src="/assets/icons/ukraine.png" alt="" class="nav-icon">
        </a>
      </div>
    </ul>
  </div>
  <div class="contact-phone-block">
    <a class="phone" href="tel:050-566-41-79"><i class="fas fa-phone-alt"></i> (050) 566-41-79</a>
    <a class="mail" href="mailto:valero02@ukr.net"> valero02@ukr.net</a>
  </div>

  <!-- NAVBAR TOGGLE BTN -->
  <div class="toggle-container">
    <div class="toggle-button" id="toggle">
      <span class="top"></span>
      <span class="middle"></span>
      <span class="bottom"></span>
    </div>
  </div>
  <!-- NAVBAR OVERLAY -->
  <div class="overlay" id="overlay">
    <div class="overlay-brand">
      <a href="/"> <img class="nav-logo" src="/assets/logo.png" alt="Doors logo"></a>
    </div>

    <nav class="overlay-menu">
      <ul>
        <li><a href="/<?php echo $_SESSION['lang']; ?>/about">
            <?php echo $lang['about_us_tab'] ?></span>
          </a></li>
        <li><a href="/<?php echo $_SESSION['lang']; ?>/catalog">
            <?php echo $lang['doors_tab'] ?></span>
          </a></li>
        <li><a href="/<?php echo $_SESSION['lang']; ?>/gallery">
            <?php echo $lang['mounted_doors_tab'] ?></span>
          </a></li>
        <li><a href="/<?php echo $_SESSION['lang']; ?>/furniture">
            <?php echo $lang['furniture_doors_tab'] ?></span>
          </a></li>
        <li><a href="/<?php echo $_SESSION['lang']; ?>/contacts">
            <?php echo $lang['contacts_tab'] ?></span>
          </a></li>
        <div class="mobile-language-bar">
          <a href="/en/<?php if ($page != 'index') echo $page; ?>" class="<?php echo (($page != 'door') ? 'nav-link txt-red' : 'nav-disable') ?>">
            <img src="/assets/icons/uk.png" alt="" class="nav-icon">
          </a>
          <a href="/ukr/<?php if ($page != 'index') echo $page; ?>" class="<?php echo (($page != 'door') ? 'nav-link txt-red' : 'nav-disable') ?>">
            <img src="/assets/icons/ukraine.png" alt="" class="nav-icon">
          </a>
        </div>
      </ul>
      <div class="ml-auto mr-auto overlay-bottom">
        <div class="contact-phone-block-burger-menu">
          <a class="phone" href="tel:050-566-41-79"><i class="fas fa-phone-alt"></i> (050) 566-41-79</a>
          <a class="mail" href="mailto:valero02@ukr.net"> valero02@ukr.net</a>
        </div>
      </div>
    </nav>
  </div>
  <script src="/js/navbar.js"></script>
</nav>