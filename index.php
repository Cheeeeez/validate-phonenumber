<?php
function checkPhoneNumber($str)
{
    $regex = '/^\(\d{2}\)-\(0([\d]{9})\)$/';
    if (preg_match($regex, $str)) {
        echo "Phone number is valid";
    } else {
        echo "Phone number is invalid";
    }
}

checkPhoneNumber('(84)-(0978489648)');
echo "<br>";
checkPhoneNumber('(84)-(1978489648)');
echo "<br>";
checkPhoneNumber('(84)(0978489648)');
echo "<br>";
checkPhoneNumber('(849)-(0978489648)');
echo "<br>";
checkPhoneNumber('(a8)-(22222222)');
echo "<br>";
checkPhoneNumber('09-(22222222)');
echo "<br>";
checkPhoneNumber('84-0978489648');
echo "<br>";