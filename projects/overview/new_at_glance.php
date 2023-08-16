<div class="container mt-5">
    <div class="row">
        <div class="col text-center pt-5">
            <p class='overview-title' style=''>New At Glance</p>
            
            <span class='weight'></span><span class="pipe"></span><span class='weight'></span>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col text-center new-at-glance">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        </div>
    </div>

    <!-- CARDS -->
    <div class="row mt-3">
        <?php
            for ($i=0; $i < 3; $i++) { 
                echo "
                    <div class='col-md ms-3 d-none d-md-block bg-glance position-relative '>
                            <div class='container position-absolute read_more'>
                                <div class='row'>
                                    <div class='col position-absolute text-white top-50' style='left: 25%;'>
                                        <button class='btn border border-white ps-5 pe-5 rounded-0 text-white'>Read More</button>
                                    </div>
                                </div>
                            </div>
                        <div class='position-absolute top-0 start-0 date mt-4'>
                            <span style='background-color: #C9C281' class=' pt-2 pb-2 ps-3 pe-3'>". $myArray[$i]->date."</span>
                        </div>
                        <div class='position-absolute bottom-0 start-0 ps-3 pe-3 bg-grad'>
                            <p class='card-title '>".$myArray[$i]->title."</p>
                            <p class='card-pipe '></p>
                            <p class='card-desc '>".$myArray[$i]->desc."<span class='fw-bold'>read more</span></p>
                        </div>
                    </div>
                ";
            }

            for ($i=0; $i < 3; $i++) { 
                echo "
                    <div class='col-md d-md-none                                                                                                                                                                                                                                                                d-sm-block mt-3 bg-glance position-relative read_more_show'>
                        <div class='position-absolute top-0 start-0 date mt-4'>
                            <span style='background-color: #C9C281' class=' pt-2 pb-2 ps-3 pe-3'>". $myArray[$i]->date."</span>
                        </div>
                        <div class='position-absolute bottom-0 start-0 ps-3 pe-3 bg-grad'>
                            <p class='card-title '>".$myArray[$i]->title."</p>
                            <p class='card-pipe '></p>
                            <p class='card-desc '>".$myArray[$i]->desc."<span class='fw-bold'>read more</span></p>
                        </div>
                    </div>
                ";
            }
        ?>
    </div>
</div>

<div class="container bg-frame6 mb-5">
        <div class="row mt-5 pb-5 position-relative">
                     
            <div class="col-md-4 pt-5 mt-5 pb-5 mb-5">
                <p class='desc_frame6_update mt-5'>We are a full-service residential marketing and sales group, with long-held and deep-seated expertise in the luxury sector.</p>

                <p class='sub_frame6_update' id="project_more">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry ....<span class='fw-bold select' onclick="toggleMoreProject()" >MORE</span></p>

                <p class='sub_frame6_update' id="project_less" style='display: none;'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry residential marketing and sales group, with long-held and deep-seated expertise ....<span class='fw-bold select' onclick="toggleLessProject()" >LESS</span></p>
            </div>
            <div class="col-1 d-none d-md-block"></div>
            <div class="col-md text-center rounded shadow-lg ps-5 pe-5">
                <p class='contact-font mt-5'>Discuss Your Unique Requirements With Us</p>
                <div class="row text-start pt-3">
                    <div class="col-md">
                        <input type="text" name="" id="" placeholder='First Name*' required><hr>
                    </div>
                    <div class="col-md ps-3">
                        <input type="text" name="" id="" placeholder='Last Name' ><hr>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="col-md">
                        <input type="number" name="" id="" placeholder='Phone Number*' required><hr>
                    </div>
                    <div class="col-md ps-3">
                        <input type="email" name="" id="" placeholder='Email' ><hr>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="col-md">
                        <input type="text" name="" id="" placeholder='Message' required><hr>
                    </div>
                </div>
                <div class="row text-start">
                    <div class="col-md">
                        <input type="checkbox" name="" id="terms" style='width: auto;'>
                        <span for="terms" class='ps-2 terms-font'>I Have read all the terms & Condition of Mahavir group</span>
                    </div>
                </div>
                <div class="row text-end mb-3">
                    <div class="col-md mt-3">
                    <span class='view-frame2 bg-black text-white' style='padding: 15px 26px 16px;'>Submit</span><button class='rounded-0 btn' style='background: #C9C281;padding: 9px 20px 13px;'><i class="fa-solid fa-arrow-right text-white"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>