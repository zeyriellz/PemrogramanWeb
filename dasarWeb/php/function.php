<?php

function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Nety";
$ucapanSalam = "Selamat pagi";

perkenalan($saya,$ucapanSalam);
?>

