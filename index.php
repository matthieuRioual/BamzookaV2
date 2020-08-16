<?php
require('Controller/frontend.php');

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        displayHomePage();
    }

    elseif($_GET['page'] == 'pricing'){
        displayPricingPage();
    }

    elseif($_GET['page'] == "contact"){
        displayContactPage();
    }
}
else
displayHomePage();