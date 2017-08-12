<?php

// https://api.telegram.org/bot414753725:AAENDyA3eOdFzDPC9HeWn0hnRH9EDGkn8A
$token = "414753725:AAENDyA3eOdFzDPC9HeWn0hnRH9EDGkn8A";
$website = "https://api.telegram.org/bot".$token;

$getme = file_get_contents($website."/getme");

print_r($getme);
?>
