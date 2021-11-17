<?php
    require_once 'controller/employeeController.php';
    $controller = new EmployeeController();
    if(!isset($_GET["action"]))
    $controller ->run("index");
    else{
        //   $controller->run("delete");
    $controller ->run("details");
  
    // $controller->run("update");
    // $controller->run("add");
    }
    
?>