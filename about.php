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
    <link href="assets/css/projects.css" rel="stylesheet">
    <!-- Custom styles -->

    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
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
        $career = "careers.php";
    ?>
    <?php include 'layout/header.php' ?>
    <!-- Header : END -->

    <!-- Main : START -->
    <div class='bg-img-about position-relative'>
        <div class="position-absolute bottom-0 ps-3 text-center text-light">
            <p class='frame1-title'>ABOUT US</p>
        </div>
    </div>
    <!-- Main : END -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
                <h1 class='about-title'><strong>MAHAVIR GROUP</strong></h1>
                <div class="row mt-4">
                    <div class="col-sm">
                        <p class='about-desc'>Mahavir Group was formed in 2004 with the aim of creating modern homes that represent the new India. Based in Durg, Chattisgarh, the group was formed with some of the most renowned Builders and Developers coming together to change the face of the building industry in the region. Under the guidance and stewardship of Mr. Vinod Bohra and Mr. Vikas Bohra, Mahavir Group has gone from strength to strength, With utmost</p>
                    </div>
                    <div class="col-sm">
                        <p class='about-desc'>importance given to building quality, spacious and modern homes, Mahavir Group is now considered as the epitome of modernization in its region of Operations. It is our strong belief that Customer truly is the king. With this as our mantra, our team continues to strive towards providing every customer with value for money, superior quality and the best Customer Service in the industry. At Mahavir Group, we just don't build, we build it better!</p>
                    </div>
                </div>
            </div>
            
            <div class="col-sm mt-5 ms-4 d-none d-md-block">
                <h1 class='about-title'>"VISION"</h1>
                <p class='about-desc'>To be a leader and model participant in the real estate development sector.</p>
                <h1 class='about-title'>"MISSION"</h1>
                <p class='about-desc'>To build, maintain and perpetuate a loyal and continuing relationship with every client through total commitment to quality, transparency, and timely completion.</p>
            </div>
            <div class="col-sm mt-5 d-sm-block d-md-none">
                <h1 class='about-title'>"VISION"</h1>
                <p class='about-desc'>To be a leader and model participant in the real estate development sector.</p>
                <h1 class='about-title'>"MISSION"</h1>
                <p class='about-desc'>To build, maintain and perpetuate a loyal and continuing relationship with every client through total commitment to quality, transparency, and timely completion.</p>
            </div>
        </div>
    </div>
    
    <?php $footer_img="./assets/media/img/footer/mahavir_white.png" ?>
    <?php include 'layout/footer.php' ?>

    <script src="assets/js/script.js"></script>
    <!--  Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>