<?php
session_start();
$random_number = rand(1000, 9999);
$_SESSION['captcha'] = $random_number;
$font  = 4;

header('Content-Type: image/jpeg');
$image = imagecreate(120, 40);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, $font, 40, 12, $random_number, $text_color);
imagejpeg($image);
imagedestroy($image);
?>
