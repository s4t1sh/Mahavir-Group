<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Riddhi Siddhi L and M Series</title>

    <!-- favicon -->
    <link rel="icon" type="image/ico" href="../../assets/media/img/UI/favicon.ico">

    <!-- Custom styles -->
    <link href="../../assets/css/projects.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/override.css" rel="stylesheet">
    <link href="../../assets/css/amenities.css" rel="stylesheet">
    <link href="../../assets/css/contact.css" rel="stylesheet">
    <!-- Custom styles -->
  <body>

  <?php include "data.php";?> 

<!-- SUB NAVBAR -->

<?php include '../overview/overview_frame_1.php'; ?>

<div class="container-fluid project-nav  bg-black">
      <div class="row ps-5  pt-3 pb-3 d-none d-md-flex">
        <div class="col-1"><a href=<?php echo $overview; ?> >Overview</a></div>
        <div class="col-1"><a href=<?php echo $amenities; ?>>Amenities</a></div>
        <div class="col-1"><a href=<?php echo $location; ?>>Location</a></div>
        <div class="col-1"><a href=<?php echo $download; ?>>Download</a></div>
        <div class="col-1"><a href=<?php echo $contact; ?> style='color:#C9C281'>Contact</a></div>
      </div>
      <div class="row pt-3 pb-3 d-sm-flex d-md-none fw-bold" style='font-size: 11px;'>
        <div class="col"><a href=<?php echo $overview; ?>>Overview</a></div>
        <div class="col"><a href=<?php echo $amenities; ?>>Amenities</a></div>
        <div class="col"><a href=<?php echo $location; ?>>Location</a></div>
        <div class="col"><a href=<?php echo $download; ?>>Download</a></div>
        <div class="col"><a href=<?php echo $contact; ?> style='color:#C9C281'>Contact</a></div>
      </div>
</div>

<?php include '../contact/contact.php'; ?>

<!-- footer starts -->
<?php $footer_img="../../assets/media/img/footer/mahavir_white.png" ?>
  <?php include '../../layout/footer.php' ?>
  <!-- footer ends -->

    <script src="../../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>