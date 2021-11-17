<?php
    require_once 'libs/conection.php';
    require_once 'models/employee.php';

    class employeeController{
        private $Connection;
        public function __construct(){
            $conn=new Connection();
            $this->Connection=$conn->Connection();
        }
        public function run($action){
            switch($action){
                case "index":
                    $this->index();
                    break;
                    case "details":
                        $this->details();
                        break;
                        case "delete":
                        $this->delete();
                        break;
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
        $empObj = $emp->getById($id);
        $this->view("details", array(
        "emp" => $empObj,
        "title" => "MVC Obj"
        )); 
        }
        public function delete(){
        $emp = new Employee($this->Connection) ;
        $id = $_GET["id"];
        $empObj = $emp->deleteByID($id);
        $this->view("delete", array(
        "emp" => $empObj,
        "title" => "MVC Obj"
        )); 
        }

        public function view($path, $dt){
            $data = $dt;
            require_once "views/".$path.".php";
        }
    }
?>