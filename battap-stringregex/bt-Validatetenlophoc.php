<?php
function validateTheNameOfTheClass ($name){
    $pattern = '/^[ACP][0-9]{4,}+[GM]$/';
    if(preg_match($pattern,$name)){
        echo $name . " is a valid account. We can accept it."."<br>";
    } else {
        echo $name . " is an invalid account. Please try again."."<br>";
    }
}
validateTheNameOfTheClass('C0318G');
validateTheNameOfTheClass('M0318G, P0323A');
