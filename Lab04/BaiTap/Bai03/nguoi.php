<?php
    class Nguoi{
        $hoten;
        $gioitinh;
        $tuoi;

        function __construct($hoten,$gioitinh, $tuoi){
            $this->hoten=$hoten;
            $this->gioitinh=$gioitinh;
            $this->tuoi=$tuoi;
        }
        public static function Nhap($hoten,$gioitinh, $tuoi)
        {
              $this->hoten=$hoten;
            $this->gioitinh=$gioitinh;
            $this->tuoi=$tuoi;
        }
        public static function Xuat($nguoi)
        {
           echo $nguoi->hoten."|".$nguoi->gioitinh."|".$nguoi->tuoi;
        }
    }
?>