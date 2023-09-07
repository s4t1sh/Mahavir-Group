<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Mahavir Suncity</title>

    <!-- favicon -->
    <link rel="icon" type="image/ico" href="../../assets/media/img/UI/favicon.ico">

    <!-- Custom styles -->
    <link href="../../assets/css/projects.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/override.css" rel="stylesheet">
    <!-- Custom styles -->
  <body>
    
<?php include "data.php"; ?>

<!-- SUB NAVBAR -->

<?php include '../overview/overview_frame_1.php'; ?>

<div class="container-fluid project-nav  bg-black">
      <div class="row ps-5  pt-3 pb-3 d-none d-md-flex">
        <div class="col-1"><a href=<?php echo $overview; ?> style='color:#C9C281'>Overview</a></div>
        <div class="col-1"><a href=<?php echo $amenities; ?>>Amenities</a></div>
        <div class="col-1"><a href=<?php echo $location; ?>>Location</a></div>
        <div class="col-1"><a href=<?php echo $download; ?>>Download</a></div>
        <div class="col-1"><a href=<?php echo $contact; ?>>Contact</a></div>
      </div>
      <div class="row pt-3 pb-3 d-sm-flex d-md-none fw-bold" style='font-size: 11px;'>
        <div class="col"><a href=<?php echo $overview; ?> style='color:#C9C281'>Overview</a></div>
        <div class="col"><a href=<?php echo $amenities; ?>>Amenities</a></div>
        <div class="col"><a href=<?php echo $location; ?>>Location</a></div>
        <div class="col"><a href=<?php echo $download; ?>>Download</a></div>
        <div class="col"><a href=<?php echo $contact; ?>>Contact</a></div>
      </div>
</div>

<!-- overview frame -->
<?php 

$overview_desc ="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$video_desc= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of ";

?>

<!-- CARDS FRAME -->

<?php

$card1 = (object) [
  'date' => '24 May 2023',
  'title' => 'real estate being a new problem',
  'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s...'
];

$card2 = (object) [
  'date' => '24 May 2023',
  'title' => 'real estate being a new problem',
  'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s...'
];

$card3 = (object) [
  'date' => '24 May 2023',
  'title' => 'real estate being a new problem',
  'desc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s...'
];

$myArray = [$card1, $card2, $card3];

?>
<?php include '../overview/overview_frame_2.php'; ?>

<?php
//  include '../overview/new_at_glance.php'; 
 ?>

<!-- footer starts -->
<?php $footer_img="../../assets/media/img/footer/mahavir_white.png" ?>
  <?php include '../../layout/footer.php' ?>
  <!-- footer ends -->

    <script src="../../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>