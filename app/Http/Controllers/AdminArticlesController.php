<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminArticlesController extends CBController {


    public function cbInit()
    {
        $this->setTable("articles");
        $this->setPermalink("articles");
        $this->setPageTitle("Articles");

        $this->addText("Title","title")->filterable(true)->strLimit(150)->maxLength(255);
		$this->addText("Short Desc","short_desc")->strLimit(150)->maxLength(255);
		$this->addWysiwyg("Content","content")->strLimit(150);
		$this->addImage("Img","img")->encrypt(true)->resize(500,500);
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
