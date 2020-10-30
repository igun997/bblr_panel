<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminBabiesController extends CBController {


    public function cbInit()
    {
        $this->setTable("babies");
        $this->setPermalink("babies");
        $this->setPageTitle("Babies");

        $this->addText("Nama Bayi","name")->filterable(true)->strLimit(150)->maxLength(255);
		$this->addSelectTable("Nama Ibu","user_id",["table"=>"users","value_option"=>"id","display_option"=>"name","sql_condition"=>""])->filterable(true);
		$this->addDate("Tanggal Lahir","birth")->format('d-m-Y');
		$this->addSelectOption("Jenis Kelamin","jk")->options([1=>'Laki - Laki',2=>'Perempuan']);
		$this->addNumber("Born Weight","born_weight");
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
