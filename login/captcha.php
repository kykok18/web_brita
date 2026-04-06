<?php
session_start();

// karakter (besar + kecil + angka)
$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789';
$captcha = substr(str_shuffle($chars), 0, 4);

$_SESSION['captcha'] = $captcha;

// buat gambar
$image = imagecreate(120, 40);

// warna
$bg = imagecolorallocate($image, 31, 41, 55);
$text_color = imagecolorallocate($image, 255, 255, 255);

// background
imagefilledrectangle($image, 0, 0, 120, 40, $bg);

// teks captcha
imagestring($image, 5, 20, 10, $captcha, $text_color);

// output
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
