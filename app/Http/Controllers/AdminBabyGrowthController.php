<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminBabyGrowthController extends CBController {


    public function cbInit()
    {
        $this->setTable("baby_growth");
        $this->setPermalink("baby_growth");
        $this->setPageTitle("Baby Growth");

        $this->addNumber("Berat","weight")->help("Dalam Kg");
		$this->addNumber("Panjang Badan","body_long")->help("Dalam CM");
		$this->addNumber("Diameter Kepala","diameters")->help("Dalam CM");
		$this->addSelectTable("Nama Bayi","baby_id",["table"=>"babies","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
