<!-- overview of the project -->

<div class="container bg-img-overview">
    <div class="row pt-5">
        <div class="col text-center pt-5">
            <p class='overview-title' style=''>Overview Of The Project</p>
            
            <span class='weight'></span><span class="pipe"></span><span class='weight'></span>
        </div>
    </div>
    <div class="row mt-5r" >
        <!-- <div class="col ps-5 pe-5 overview-desc mt-5">
            <?php 
                // echo $overview_desc 
            ?>
        </div> -->
        
                <!-- <div class="col-1 d-none d-md-block"></div> -->
                <div class="col-sm ps-8">
                    <h1 class='overview-heading'><?php echo $overview_heading_1 ?> <br> <b><?php echo $overview_heading_2 ?></b></h1>
                    <?php
                        if ($completed) {
                            echo "<p class='mt-5'>Completed Project</p>";
                        }
                        else{
                            echo "<p>On Going Project
                                    <br>CG-RERA Reg No : $rera_no
                                </p>";
                        }
                    ?>
                    
                </div>
                <div class="col-sm lh-lg ps-8 ps-override-2" style='border-left: 1px solid #dfdfdf'>
                    <ul style='color: #777777; list-style-type:square'>
                        <?php

                            for ($i=0; $i <count($details) ; $i++) { 
                                echo "<li>".$details[$i]."</li>";
                            }

                        ?>
                    </ul>
                </div>
           
    </div>
</div>

<?php
if($isVideo){
    echo "
        <div class='container mt-5'>
            <div class='row pb-5 '>
                <div class='col-sm'>
                    <p class='video-title '>Flagship. Sustainable.</p>
                    <p class='overview-desc mb-5'>".$video_desc."</p>
                </div>
                <div class='col-sm'>
                    <video width='580' height='300' class='shadow-lg d-none d-md-block' controls autoplay>
                        <source src='../../assets/media/dtc/dtc_video.mp4' type='video/mp4'>
                    </video>
                    <video width='350' height='240' class='shadow-lg d-md-none d-sm-block' controls autoplay>
                        <source src='../../assets/media/dtc/dtc_video.mp4' type='video/mp4'>
                    </video>
                </div>
            </div>
        </div>
    ";
}
?>
<div class="container">
    <div class="row">
        <div class="col text-center pt-5">
            <p class='overview-title' style=''>Project Gallery</p>
            
            <span class='weight'></span><span class="pipe"></span><span class='weight'></span>
        </div>
    </div>
    <div class="row mt-5 mb-5">
       <div class="col"><img src="../../assets/media/<?php echo $folder ?>/main.webp" alt="" class='img-fluid zoom'></div>
    </div>

    <div class='row'>
    <?php
        for ($i=1; $i <= $gallery; $i++) { 
            echo "
                
                    <div class='col-sm-4 mt-3'><img src='../../assets/media/".$folder."/". ($i) . ".webp' alt='' class='img-fluid zoom'></div>
                    
                
            ";
        }
    ?>
    </div>
</div>

