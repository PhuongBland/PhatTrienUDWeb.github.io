<?php

use Department as GlobalDepartment;

require_once 'libs/conection.php';
    require_once 'models/department.php';

    class DepartmentController{
        private $Connection;
        public function __construct(){
            $conn=new Connection();
            $this->Connection=$conn->Connection();
        }
        public function run($action){
            switch($action){
                case 'index':
                    $this->index();
                    break;
                case 'details':
                    $this->details();
                    break;
                // case 'update':
                //  $this->update();
                // case 'delete':
                //     $this->delete();
                //     break;
                // case 'insertData':{
                //     $this->insertData();
                    
                //     break;
                
        }
    }

        
        public function index(){
            $dpm=new Department($this->Connection);
            $dpmList=$dpm->getAll();
            $this->View("index",array(
                "ListDpm"=>$dpmList,
                "title"=>"MVC List"
            )) ;
        }
        
      public function details(){
       $dpm = new Department($this->Connection) ;
        $id_dpm = $_GET["id_dpm"];
        $dpmObj = $dpm->getById($id_dpm);
        $this->view("details", array(
        "emp" => $dpmObj,
        "title" => "MVC Obj"
        )); 
        }
        
        // $this->view("details", array(
        // "dpm" => $dpmObj,
        // "title" => "MVC Obj"
        // )); 
        // }
        
        public function delete(){
        $dpm = new Department($this->Connection) ;
        if(isset($_GET['id_dpm'])){
            $id_dpm = $_GET["id_dpm"];
        }
        $tbltable='';
        $deleDpm='';
       if($dpm->deleteData($id_dpm,$tbltable)){
            header('location:index.php');
        }
        $this->view("delete", array(
        "dpm" => $deleDpm,
        "title" => "MVC Obj"
        )); 
        }
    //     public function insertData(){
    //         $emp = new Employee($this->Connection) ;
            
    //         $empAdd ='';
            
    //        if(isset($_POST['add_employee'])){
    //         $name = $_POST['Name']; 
    //         $surName = $_POST['surname']; 
    //         $email = $_POST['email']; 
    //        $phone = $_POST['phone']; 
           
    //        if($emp->insertEmployee($name,$surName,$email,$phone)){
    //          header('location:index.php');
              
    //        };
    //        }
    //         $this->view("add", array(
    //         "emp" => $empAdd,
    //         "title" => "MVC Obj"
    //         )); 
    //     }
     

    //     public function update(){
    //     $emp = new Employee($this->Connection) ;
    //     $empUp='';
    //         if(isset($_POST['update_employee'])){
    //             $id=$_POST['id'];
    //             $name=$_POST['Name'];
    //              $surName = $_POST['surname']; 
    //              $email = $_POST['email']; 
    //             $phone = $_POST['phone']; 
    //             $emp->updateData($id,$name,$surName,$email,$phone);
    //         }
            
    //       echo   $this->view("update", array(
    //         "emp" => $empUp,
    //         "title" => "MVC Obj"
    //         )); 
    // }

        public function view($path, $dt){
            $data = $dt;
            require_once "views/".$path.".php";
        }
    }
?>