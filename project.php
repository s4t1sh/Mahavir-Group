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
    <!-- Custom styles -->
</head>

<body>

    <?php include 'project_data.php'; ?>

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
    
    <?php
        $desc_short = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum";
        $desc_full = "lorem Ipsum is simply dummy text of the printing and typesetting industry that is not covered by our standards. Lorem Ipsum is not a print company but is a print export company that"
    ?>
    <div class='position-relative bg-project'>
        <div class="position-absolute top-50 start-50 translate-middle text-center text-light">
            <p class='frame1-title'>Our Projects</p>
            <!-- <p id='more' class='frame1-desc'><?php echo $desc_short ?><br><span class='fw-bold select' onclick="toggleMore()">...MORE</span></p>
            <p id='less' class='frame1-desc' style='display: none;'><?php echo $desc_full ?> <br><span class='fw-bold select' onclick="toggleLess()">...LESS</span></p> -->
        </div>
    </div>

    <div class="container mt-5 mb-5">

    <?php 
        for ($i=0; $i <count($heading) ; $i++) { 
            if(($i+1)%2 != 0) {
                echo"
                    <div class='row mt-5'>
                        <div class='col-md-4'>
                            <img src='assets/media/".$img[$i].".webp' class='zoom project-img shadow-sm' alt='' srcset=''>
                        </div>
                        <div class='col-md mt-5'>
                            <p class='contact-font'>".$heading[$i]."</p>
                            <p class='project-desc mt-5 mb-5'>".$desc[$i]."</p>
                            <a href='projects/". $redirect[$i]."/overview.php' class='mt-5 fw-bold btn-primary border border-dark' >Enquire Now</a>
                        </div>
                    </div>
                ";
            }
            else{
                echo "
                <div class='row mt-5 d-none d-md-flex'>
            
                    <div class='col-md mt-5'>
                        <p class='contact-font'>".$heading[$i]."</p>
                        <p class='project-desc mt-5 mb-5'>".$desc[$i]."</p>
                        <a href='projects/". $redirect[$i]."/overview.php' class='mt-3 fw-bold btn-primary border border-dark' >Enquire Now</a>
                    </div>
        
                    <div class='col-md-4'>
                        <img src='assets/media/".$img[$i].".webp' alt='' class='zoom project-img shadow-sm' srcset=''>
                    </div>
                
                </div>

                <div class='row mt-5 d-md-none d-sm-flex'>

                    <div class='col-md-4'>
                        <img src='assets/media/".$img[$i].".webp' alt='' class='zoom project-img shadow-sm' srcset=''>
                    </div>
            
                    <div class='col-md mt-5'>
                        <p class='contact-font'>".$heading[$i]."</p>
                        <p class='project-desc mt-5 mb-5'>".$desc[$i]."</p>
                        <a href='projects/". $redirect[$i]."/overview.php' class='mt-3 fw-bold btn-primary border border-dark' >Enquire Now</a>
                    </div>
        
                    
                
                </div>
                ";
            }
    }
    ?>

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