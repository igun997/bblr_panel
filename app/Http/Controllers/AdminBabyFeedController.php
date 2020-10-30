<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminBabyFeedController extends CBController {


    public function cbInit()
    {
        $this->setTable("baby_feed");
        $this->setPermalink("baby_feed");
        $this->setPageTitle("Baby Feed");

        $this->addSelectTable("Nama Bayi","baby_id",["table"=>"babies","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addDate("Tanggal Perekaman","record_date")->format('d-m-Y');
		$this->addSelectOption("Makan Dari","feed_from")->options([1=>'Payudara',2=>'Botol',3=>'Cup']);
		$this->addRadio("Bayi Bersendawa ?","is_brought_wind")->options([0=>'Tidak',1=>'Iya']);
		$this->addRadio("Kondisi Popok Berubah  ?","is_nappy_changed")->options([1=>'Iya',0=>'Tidak']);
		$this->addRadio("Bayi BAB ?","is_soiled_nappy")->options([1=>'Iya',0=>'Tidak']);
		$this->addRadio("Bayi BAK ?","is_wet_nappy")->options([0=>'Tidak',1=>'Iya']);
		$this->addNumber("Lama Menyusui (Payudara Kiri)","breast_left_long")->help("Dalam Hitungan Menit");
		$this->addNumber("Lama Menyusui (Payudara Kanan)","breast_right_long")->help("Dalam Hitungan Menit");
		$this->addNumber("Lama Minum","feed_min")->help("Dalam Hitungan Menit");
		$this->addNumber("Jumlah Yang Di Berikan","amount_offer")->help("Dalam CC");
		$this->addNumber("Jumlah Yang Di Minum","amount_taken")->help("Dalam CC");
		

    }
}
