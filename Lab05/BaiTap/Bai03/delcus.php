<?php
require_once 'customer.php';
$ms = $_GET['CustomerCode'];
$kh = new Customer('milk');
$kh ->Delete($ms);
header('location:index.php');
?>
