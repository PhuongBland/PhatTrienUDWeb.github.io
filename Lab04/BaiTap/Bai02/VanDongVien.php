<?php 
class VanDongVien{
    public $hoten;
    public $tuoi;
    public $monthidau;
    public $cannang;
    public $chieucao;

    public function __construct(){
        $this->hoten =" ";
        $this->tuoi = 0;
        $this->monthidau = " ";
        $this->cannang = 0;
        $this->chieucao = 0;
    }

    public function __construct1($hoTen,$Tuoi,$monThidau,$canNang,$chieuCao){
        $this->hoten = $hoTen;
        $this->tuoi = $Tuoi;
        $this->monthidau = $monThidau;
        $this->cannang = $canNang;
        $this->chieucao = $chieuCao;
    }

    public function nhap($hoTen,$Tuoi,$monThidau,$canNang,$chieuCao){
        $this->hoten = $hoTen;
        $this->tuoi = $Tuoi;
        $this->monthidau = $monThidau;
        $this->cannang = $canNang;
        $this->chieucao = $chieuCao;
    }

    public static function xuat($vandongvien)
    {
        echo $vandongvien->hoten."|".$vandongvien->tuoi."|".$vandongvien->monthidau."|".$vandongvien->cannang."|".$vandongvien->chieucao;
    }

    public static function sosanh($vandongvien1,$vandongvien2)
    {
        if($vandongvien1->chieucao > $vandongvien2->chieucao){
            return true;
        }
        else if($vandongvien1->chieucao == $vandongvien2->chieucao){
            if($vandongvien1->cannang > $vandongvien2->cannang){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}

?>