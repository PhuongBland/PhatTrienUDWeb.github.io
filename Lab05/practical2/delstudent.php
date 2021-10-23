<?php
require_once 'student.php';
$mssv = $_GET['mssv'];
$sinhvien = new SinhVien('qlsinhvien');
$result = $sinhvien -> Delete($mssv);
if($result)
 header("location:index.php");
 
 ?>
