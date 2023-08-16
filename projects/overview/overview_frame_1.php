

    <!-- header starts -->
  <?php 

    $logo = "../../assets/media/img/UI/MG-logo.png";
    $home_page="../../index.php"; 
    $index = "../../index.php";
    $about = "../../index.php#welcome";
    $projects ="../../project.php";
    $client = "../../client.php";
    $enquire = "../../index.php#enquire";

  ?>
  <?php include '../../layout/header.php' ?>  
  <!-- header ends -->
    <!-- frame 1 -->
    <div class='bg-img-durg container-fluid position-relative' style="background-image: url(<?php echo $bg; ?>);">
        <div class="row">
            <div class="col-md-6 position-absolute bottom-0 start-0 text-light pt-3 pb-3 ps-5">
                <p class='frame1-title'><?php echo $title ?></p>

                <p id='more' class='frame1-desc'><?php echo $desc_short ?><span class='fw-bold select' onclick="toggleMore()">...MORE</span></p>
                <p id='less' style='display: none;'  class='frame1-desc'><?php echo $desc_full ?><span class='fw-bold select' onclick="toggleLess()">...LESS</span></p>
            </div>
        </div>
    </div>