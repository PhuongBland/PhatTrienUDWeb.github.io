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
                case 'index':
                    $this->index();
                    break;
                    case 'details':
                        $this->details();
                        break;
                    case 'update':
                        $this->update();
                    case 'delete':
                        $this->delete();
                        break;
                        //index.php?action=insertData , nó tới chỗ này trước
                    case 'insertData':{
                        $this->insertData();
                        // chỗ này sẽ xây dựng hàm thực thi
                        break;
                    }
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
        if(isset($_GET['id'])){
            $id = $_GET["id"];
        }
        $tbltable='';
       if($emp->deleteData($id,$tbltable)){
            header('location:index.php');
        }
        $this->view("delete", array(
        "emp" => $deleEmp,
        "title" => "MVC Obj"
        )); 
        }
        // tên phương thức này đã được trùng với hàm trong class
        //phải đổi tên hàm
        public function insertData(){
            $emp = new Employee($this->Connection) ;
            // khi mới vào thì chưa có gì để truyền
            $empAdd ='';
            // chưa có biến id mà gọi nó báo lỗi thấy không 
            // tương tự với mấy các biến dươ
            // tool đểu rồi
            // nếu bấm nút sumbit thì mới chèn dữ liệu
           if(isset($_POST['add_employee'])){
            $title = $_POST['Name']; 
            $date = $_POST['surname']; 
            $description = $_POST['email']; 
           $content = $_POST['phone']; 
           // hàm chèn của t đâu , ủa
           // bth m code nó có gợi ý ra ko
            // khi muốn bấm vào nút thêm nó sẽ chuyển qua màn hình danh sách nhân viên 
           if($emp->insertEmployee($title,$date,$description,$content)){
               // trả về trang index
               header('location:index.php');
               //mấy chức năng khác tương tự nhan , làm thử đi
           };
           }
            // nếu bấm nút thêm , thì sẽ chèn vào
            // mà khi mới qua trang chèn thì chưa có mấy cái biến 
            // phải kiểm tra có bấm nút thêm thì mới xét tới mấy giá trị
            // giờ làm giao diện tới trang thêm trước
           // $title = $_POST['Name']; 
           // $date = $_POST['surname']; 
           // $description = $_POST['email']; 
           // $content = $_POST['phone']; 
           // $empObj = $emp->insertData($Id,$Name,$SurName,$Email,$phone);
           // tới view thêm dữ liệu
            $this->view("add", array(
            "emp" => $empAdd,
            "title" => "MVC Obj"
            )); 
        }
     

        public function update(){
        $emp = new Employee($this->Connection) ;
        $empUp='';
        if(isset($_GET['update_employee'])){
            $title = $_GET['Name']; 
            $date = $_GET['surname']; 
            $description = $_GET['email']; 
           $content = $_GET['phone'];
         $emp->updateData($title,$date,$description,$content);
        }
        $this->view("update", array(
        "emp" => $empUp,
        "title" => "MVC Obj"
        )); 
    }

        public function view($path, $dt){
            $data = $dt;
            require_once "views/".$path.".php";
        }
    }
?>