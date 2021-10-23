<?php
require_once 'customer.php';
$ms = $_GET['customerCode'];
$kh = new Customer('milk');
$result = $kh -> Delete($CustomerCode);
if($result)
 header("location:index_customer.php");
?>
