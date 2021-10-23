<?php
require_once 'profilemilk.php';
$ten = $_GET['ten'];
$tts = new profilemilk('milk');
$result = $tts -> Delete($ten);
if($result)
 header("location:index_profilemilk.php");
 
 ?>
