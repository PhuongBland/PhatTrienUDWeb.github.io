<?php
include 'nguoi.php';
class HanhKhach extends Nguoi {
    public $hoten;
    public $vemaybay;
    public $soluong;

    function __construct($hoten, $vemaybay, $soluong) {
        $this->hoten = $hoten;
        $this->vemaybay = $vemaybay;
        $this->soluong = $soluong;
      }
      function get_vemaybay() {
        return $this->vemaybay;
      }
      function get_soluong() {
        return $this->soluong;
      }
      function tongTien($vemaybay, $soluong){
       return $vemaybay*$soluong;
      }
}
?>