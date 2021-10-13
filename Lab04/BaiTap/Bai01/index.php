<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
    <?php
    class PhanSo{
        public $tuSo;
        public $mauSo;

        public function __construct($phanSo){
            $this->tuso=$tuSo;
            $this->mauso=$mauSo;
        }

        public void PhanSo($tuSo,$mauSo){
              $this->tuso=$tuSo;
            $this->mauso=$mauSo;
        }
        public void Nhap(){

        }
        public void Xuat(){

        }
        public void Cong(){
          
        }
        public void Tru(){
        }
        public void Nhan(){
           
        }
        public void Chia(){
            
        }
        public function message(){
            echo "Tong {$Tong}";
        }
    }
     $phs= new PhanSo("5","4");
     $phs->message();
    ?>
</body>
</html>