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

    <div class="row mt-5">
        
               
                <div class='col-md-6 col-sm'>
                    <div class='card'>
                        <img src=<?php echo $img ?> class='card-img-top zoom' alt='...'>
                    </div>
                </div>
                <div class='col-md-1 d-none d-md-block'></div>
                <div class='col-md-4 col-sm pt-3r' style='padding-left: 2rem'>
                    <ul style='list-style-type:square; line-height:2rem;'>
                    <?php 
                        for ($i=0; $i < count($amenities); $i++) { 
                            echo "<li>".$amenities[$i]."</li>";
                        }
                    ?>
                    </ul>
                </div>
              
            

        <?php
            // for ($i=1; $i < 1; $i++) { 
            //     echo "
            //     <div class='col-md d-md-none d-sm-block' style='margin-top:200px;'>
            //         <div class='card position-relative'>
            //             <img src=". $myAmenities[$i]->img." class='card-img-top' alt='...'>
            //             <div class='card-body text-center position-absolute translate-middle bg-white' style='top: 120%;left: 50%;right: -22%;'>
            //                 <h5 class='card-title text-dark title'>". $myAmenities[$i]->title."</h5>
            //                 <hr>
            //                 <p class='card-text overview-desc mt-4'>". $myAmenities[$i]->desc."</p>
            //             </div>
            //         </div>
            //     </div>
            //     ";
            // }
        ?>
        
        
    </div>
</div>