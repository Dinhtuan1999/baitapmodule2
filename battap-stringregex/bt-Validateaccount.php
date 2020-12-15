<?php
function validateAccount ($account)
{
    $pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern, $account)) {
        echo $account . " is a valid account. We can accept it."."<br>";
    } else {
        echo $account . " is an invalid account. Please try again."."<br>";
    }
}
validateAccount('123abc_');
validateAccount('_abc123');
validateAccount('______');
validateAccount('123456');
validateAccount('abcdefg');
validateAccount('.@');
validateAccount('12345');
validateAccount('1234_');
validateAccount('abcde ');
?>
