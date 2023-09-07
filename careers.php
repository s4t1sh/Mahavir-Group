<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/467d4a99f6.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Mahavir Group - Experience Quality Trust </title>

    <!-- favicon -->
    <link rel="icon" type="image/ico" href="assets/media/img/UI/favicon.ico">

    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/projects.css" rel="stylesheet">
    <link href="assets/css/override.css" rel="stylesheet">
    <link href="assets/css/careers.css" rel="stylesheet">
    <link href="assets/css/about.css" rel="stylesheet">

    <!-- Custom styles -->
</head>

<body>

    <!-- Header : START -->
    <?php 
    
        $logo = "assets/media/img/UI/MG-logo.png"; 
        $home_page="./index.php";
        $index = "index.php";
        $about = "about.php";
        $projects ="project.php";
        $client = "client.php";
        $enquire = "index.php#enquire";
        $career = "careers.php";
    ?>
    <?php include 'layout/header.php' ?>
    <!-- Header : END -->

    <!-- Main : START -->
    <div class='bg-img-career position-relative'>
        <div class="position-absolute bottom-0 ps-3 text-center text-light">
            <p class='frame1-title'>CAREERS</p>
        </div>
    </div>
    <!-- Main : END -->


    <div class="container mt-7r">
        <p class='about-desc'>At Mahavir Group, we strongly believe that the success of our organization is not just built upon strong governance and quality construction. Our team plays an equally important role. So if you are hard working, dedicated and have a passion for providing excellent customer service, Mahavir Group is the place for you. Please mail us your resume at hr@mahavirgroupindia.com</p>
        <h1 class='about-title mt-7r text-center'>LOOKING FOR <strong>A JOB!</strong></h1>

        <div class="row">
            <div class="col-sm-3 d-none d-md-block"></div>
            <div class="col-sm">
            <form method="post" action='send_email.php' enctype="multipart/form-data" class='career'>
                <div class="row mt-5" style='gap: 1rem;'>
                    <div class="col-sm">
                        <input type="text" name="first_name" placeholder="Name *" required> 
                        <input type="text" name="subject" id="" placeholder="Subject *" required>
                        <input type="text" name="email" placeholder="Email *" required> 
                        <input type="number" name="contact" id="" placeholder="Phone Number *" required>
                        <input type="file" name="pdf_file"> <br>
                    </div>
                    <div class="col-sm">
                         <textarea placeholder="Message *" rows="6" id="message" name="message" required></textarea>
                         <button type="submit" class='mt-4 career-btn' name="submit">SUBMIT MESSAGE</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-sm-3 d-none d-md-block"></div>
        </div>  
    </div>


    <!-- Footer : START -->
    <?php $footer_img="./assets/media/img/footer/mahavir_white.png" ?>
    <?php include 'layout/footer.php' ?>
    <!-- Footer : END -->

    <!--  Separate Popper and Bootstrap JS -->
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>