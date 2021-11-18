<?php
// trang index này chỉ có code php , thấy không ? , và nó chỉ gọi tới controllers 
// thấy đường dẫn khác ko 
// từ trang index này nó sẽ gọi sang trnag employeeController 
// từ employeeController sẽ gọi tới view thông qua các case 
    require_once 'controller/employeeController.php';
    $controller = new EmployeeController();
    if(!isset($_GET["action"]))
    $controller ->run("index");
    elseif($_GET["action"] == 'details'){
    $controller ->run("details");
    }
    elseif($_GET["action"] == 'insertData'){
    $controller ->run("insertData");
    }
    // elseif($_GET["action"] == 'delete'){
    // $controller->run("delete");
    // }
     elseif($_GET["action"] == 'update'){
    $controller->run("update");
    }

    
    // $controller->run("update");
    // $controller->run("insertData");
    // $controller->run("delete");
?>