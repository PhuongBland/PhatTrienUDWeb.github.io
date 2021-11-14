<?php
    require_once 'controller/employeeController.php';
    $controller = new EmployeeController();
    if(!isset($_GET["action"]))
    $controller ->run("index");
    else
    $controller ->run("details");
?>