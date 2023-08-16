<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Mahavir Group - Experience Quality Trust </title>

    <!-- favicon -->
    <link rel="icon" type="image/ico" href="assets/media/img/UI/favicon.ico">

    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/about.css" rel="stylesheet">
    <link href="assets/css/override.css" rel="stylesheet">
    <!-- Custom styles -->
</head>

<body>

    <!-- Header : START -->
    <?php 
    
        $logo = "assets/media/img/UI/MG-logo.png"; 
        $home_page="./index.php";
        $index = "./index.php";
        $about = "./about.php";
        $projects ="./project.php";
        $client = "./client.php";
        $enquire = "./enquire.php";
    
    ?>
    <?php include 'layout/header.php' ?>
    <!-- Header : END -->

    
    <!-- Main : START -->
    <div class='bg-img1 mt-3'>
        <div class="bottom text-light pt-3 pb-3 ps-5">
            
        </div>
    </div>
    <!-- Main : END -->
    
    <?php $footer_img="./assets/media/img/footer/mahavir_white.png" ?>
    <?php include 'layout/footer.php' ?>
    <!--  Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>