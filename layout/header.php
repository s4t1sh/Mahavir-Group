<header class="worldHeader">
    <div class="worldHeader-container position-relative">
        <div class="logo">
            <a href=<?php echo $home_page ?>><img src=<?php echo $logo ?> alt="Mahavir Group Logo" width="150"></a>
        </div>
        <div class="menu d-none d-md-block">
            <nav class="worldNavigation">
                <ul>
                    <li><a href=<?php echo $index ?>>Home</a></li>
                    <li><a href=<?php echo $about ?> class='ps-3'>About us</a></li>
                    <li><a href=<?php echo $projects ?> class='ps-3'>Projects</a></li>
                    <li><a href=<?php echo $client ?> class='ps-3'>Our Clients</a></li>
                </ul>
            </nav>
        </div>
        <div class="button d-none d-md-block">
            <a href=<?php echo $enquire ?> class="btn-primary fw-bold border border-dark">ENQUIRE NOW</a>
        </div>
        <div class="d-sm-block d-md-none" id="bars">
            <i class="fa-solid fa-bars fs-3" onclick="toggle_bars()"></i>
        </div>
        <div class=" mobile-menu text-center" id="mobile-menu">
            <ul class='p-3 fs-3'>
                <li class='text-end'><i class="fa-regular fa-circle-xmark fs-3 text-white" onclick="hide_menu()"></i></li>
                <li class='mt-5'><a href=<?php echo $index ?> class='text-white'>Home</a></li>
                <li class='mt-3'><a href=<?php echo $about ?> class='text-white'>About us</a></li>
                <li class='mt-3'><a href=<?php echo $projects ?> class='text-white'>Projects</a></li>
                <li class='mt-3'><a href=<?php echo $client ?> class='text-white'>Our Clients</a></li>
            </ul>
        </div>
    </div>
</header>