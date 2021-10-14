<?php
    class VeMayBay{
        public $tenchuyen;
        public $ngaybay;
        public $giave;

        function __construct($tenchuyen,$ngaybay,$giave)
        {
            $this->tenchuyen=$tenchuyen;
            $this->ngaybay=$ngaybay;
            $this->giave=$giave;
        }
        public static function Nhap($tenchuyen,$ngaybay,$giave)
        {
            $this->tenchuyen=$tenchuyen;
            $this->ngaybay=$ngaybay;
            $this->giave=$giave;
        }
        public static function Xuat($vemyabay)
        {
            echo "{ $vemyabay->tenchuyen}."|".{$vemyabay->ngaybay}."|".{$vemyabay->giave}";
        }
        public function getGiaVe(){
            return $this->giave;
        }
        
    }

?>