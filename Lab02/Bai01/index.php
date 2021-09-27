
<?php

require __DIR__ . '/MangMotChieu.php';

$random_array = [];
$length = 15;
$min = 100;
$max = 999;

for ($i = 0; $i < $length; $i++) {
    $random_number = rand($min, $max);
    $random_array[$i] = $random_number;
}

$xulymang = new MangMotChieu($random_array);
$xulymang->xuat_mang();
$xulymang->tim_min();
$xulymang->tim_max();
$xulymang->get_mang_tang_dan();
$xulymang->get_mang_giam_dan();
$xulymang->tim_gia_tri(120);
$xulymang->thay_the_gia_tri(120, 510);
$xulymang->xoa_gia_tri(120);


