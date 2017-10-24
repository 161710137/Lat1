<?php
// buat class data
class data {
 
   public $Nama,$Hobi,$Alamat ;
  
  
   public function __construct($Nama,$Hobi,$Alamat){
   $this->Nama =$Nama;
   $this->Hobi =$Hobi;
   $this->Alamat=$Alamat;
   }
  
   public function get_dt(){
     return $this->Nama;
   }
   public function get_hb(){
     return $this->Hobi;
 }
   public function get_al(){
    return $this->Alamat;
   }}
  ?>