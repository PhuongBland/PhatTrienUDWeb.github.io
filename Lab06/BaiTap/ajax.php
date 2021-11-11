<?php 
    $A = $_REQUEST['so_a'];
    $B = $_REQUEST['so_b'];
    $pheptinh=$_REQUEST['pheptinh'];
    $kq = 0;
    switch($pheptinh)
    {
        case "plus":
            $kq = $A+$B;
            break;
        case "-":
            $kq = $A-$B;
            break;
        case "*":
            $kq = $A*$B;
            break;
        case "/":
            $kq = $A/$B;
            break;
    }

    echo  $kq;
   
?>