<?php
    require_once 'libs/conection.php';
    require_once 'models/employee.php';

    class employeeController{
        private $Connection;
        
        public function __construct(){
            $conn = new Connection();
            $this->Connection=$conn->Connection();
        }
      
        public function run($action){
           
                if($action == 'index'){
                    $this->index();
                }elseif($action == 'details'){
                    $this->details();
                }elseif($action == 'edit'){
                    $this->edit();
                }elseif($action == 'update'){
                    $this->update();
                }elseif($action == 'delete'){
                    $this->delete();
                }elseif($action == 'insertData'){
                    $this->insertData();
                }
        }
    
        
         public function index(){
            $emp=new Employee($this->Connection);
            $empList=$emp->getAll();
            $this->View("index",array(
                "ListEmp"=>$empList,
                "title"=>"MVC List"
            )) ;
        }
        
      public function details(){
        $emp = new Employee($this->Connection) ;
        $id = $_GET["id"];
         $empObj=$emp->getByID($id);
        if(isset($_GET['return'])){
            header('location:index.php');
        };
        
        $this->view("details", array(
        "emp" => $empObj,
        "title" => "MVC Obj"
        )); 
        }
        
        public function delete(){
            
        $emp = new Employee($this->Connection) ;
        if(isset($_GET['id'])){
            $id = $_GET["id"];
        }
        $tbltable='';
        $deleEmp='';
       if($emp->deleteData($id,$tbltable)){
            header('location:index.php');
        }
        $this->view("delete", array(
        "emp" => $deleEmp,
        "title" => "MVC Obj"
        )); 
        }
        public function insertData(){
            $emp = new Employee($this->Connection) ;
            
            $empAdd ='';
            
           if(isset($_POST['add_employee'])){
            $name = $_POST['Name']; 
            $surName = $_POST['surname']; 
            $email = $_POST['email']; 
           $phone = $_POST['phone']; 
           
           if($emp->insertEmployee($name,$surName,$email,$phone)){
             header('location:index.php');
              
           };
           }
            $this->view("add", array(
            "emp" => $empAdd,
            "title" => "MVC Obj"
            )); 
        }
     
        public function edit(){
        
            $id = $_GET["id"];
            $emp = new Employee($this->Connection);
    
            $empObj = $emp->getById($id);
            $this->view("edit", array(
                "empO" => $empObj,
                "title" => "MVC Obj"
            ));
        }

        public function update(){
                
        $emp = new Employee($this->Connection);
        $name = (isset($_POST['Name'])) ? $_POST['Name'] : '';
        $surname = (isset($_POST['SurName'])) ? $_POST['SurName'] : '';
        $email = (isset($_POST['email'])) ? $_POST['email'] : '';
        $phone = (isset($_POST['phone'])) ? $_POST['phone'] : '';
        $id = $_GET['id'];

        $emp->updateData($id, $name, $surname, $email, $phone);

        $this->index();
    }

        public function view($path, $dt){
            $data = $dt;
            require_once "views/".$path.".php";
        }
    }

?>