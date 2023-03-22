<?php

session_start();

$root = "/";

if (!isset($_SESSION['lang']))
  $_SESSION['lang'] = "ukr";

else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
  if ($_GET['lang'] == "ukr")
    $_SESSION['lang'] = "ukr";
  else if ($_GET['lang'] == "en")
    $_SESSION['lang'] = "en";
}

require_once "lang/"  . $_SESSION['lang'] . ".php";
