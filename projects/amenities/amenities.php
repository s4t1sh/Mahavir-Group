<div class="container pb-5">
    <div class="row pt-5">
        <div class="col text-center pt-5">
            <p class='overview-title' style=''>Enjoy Our Amenities</p>
            
            <span class='weight'></span><span class="pipe"></span><span class='weight'></span>
        </div>
    </div>
    <div class="row">
        <div class="col ps-5 pe-5 overview-desc text-center mt-5"><?php echo $amenities_desc ?></div>
    </div>

    <div class="row mt-5 pb-5">
        <?php
            for ($i=0; $i < 3; $i++) { 
                echo "
                <div class='col-md d-none d-md-block'>
                    <div class='card position-relative'>
                        <img src=". $myAmenities[$i]->img." class='card-img-top' alt='...'>
                        <div class='card-body text-center position-absolute translate-middle bg-white' style='top: 120%;left: 50%;right: -22%;'>
                            <h5 class='card-title text-dark title'>". $myAmenities[$i]->title."</h5>
                            <hr>
                            <p class='card-text overview-desc mt-4'>". $myAmenities[$i]->desc."</p>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>

                <div class='col-md d-md-none d-sm-block'>
                    <div class='card position-relative'>
                        <img src=<?php echo $myAmenities[0]->img ?> class='card-img-top' alt='...'>
                        <div class='card-body text-center position-absolute translate-middle bg-white' style='top: 120%;left: 50%;right: -22%;'>
                            <h5 class='card-title text-dark title'><?php echo $myAmenities[0]->title ?></h5>
                            <hr>
                            <p class='card-text overview-desc mt-4'><?php echo $myAmenities[0]->desc ?></p>
                        </div>
                    </div>
                </div>

        <?php
            for ($i=1; $i < 3; $i++) { 
                echo "
                <div class='col-md d-md-none d-sm-block' style='margin-top:200px;'>
                    <div class='card position-relative'>
                        <img src=". $myAmenities[$i]->img." class='card-img-top' alt='...'>
                        <div class='card-body text-center position-absolute translate-middle bg-white' style='top: 120%;left: 50%;right: -22%;'>
                            <h5 class='card-title text-dark title'>". $myAmenities[$i]->title."</h5>
                            <hr>
                            <p class='card-text overview-desc mt-4'>". $myAmenities[$i]->desc."</p>
                        </div>
                    </div>
                </div>
                ";
            }
        ?>
        
        
    </div>
</div>