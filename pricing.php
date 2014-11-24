<?php 
    // include the configs / constants for the database connection
    require_once("config/db.php");
    // load the login class
    require_once("classes/Login.php");
    // Process the page loading
    require("classes/ProcessPage.php");
    // Load header
    include './assets/header.php';

    $activeTab = "Pricing";

    // Load navbar
    include './assets/navbar.php';

    // if logged in display content
    if ($login->isUserLoggedIn() == true) {
        include("views/v-pricing.php");
    } else {
        include("views/v-pricing.php");
    }


    // Load footer
    include("assets/footer.php");
?>