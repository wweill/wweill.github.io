<?php
require_once 'functions.php';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="William WEILL">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>
    <?php
    if (isset($title)) {
      echo $title;
    } else {
      echo "Getronics";
    }
    ?>
  </title>
  <link rel="icon" href="media/Logo_lettre.svg">
  <link rel="stylesheet" href="/ICA1_php/<?= $title ?>.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.2.0/dist/simpleParallax.min.js"></script>
</head>
