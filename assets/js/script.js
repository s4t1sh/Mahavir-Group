function toggleMore() {
    document.getElementById("more").style.display = "none";
    document.getElementById("less").style.display = "block";

}

function toggleLess() {
    document.getElementById("less").style.display = "none";
    document.getElementById("more").style.display = "block";

}

function toggleMoreProject() {
    document.getElementById("project_more").style.display = "none";
    document.getElementById("project_less").style.display = "block";

}

function toggleLessProject() {
    document.getElementById("project_less").style.display = "none";
    document.getElementById("project_more").style.display = "block";

}

function toggle_bars() {
    document.getElementById("mobile-menu").style.display = "block";
    document.getElementById("bars").style.display = "none";
}

function hide_menu() {
    document.getElementById("mobile-menu").style.display = "none";
    document.getElementById("bars").style.display = "block";
}