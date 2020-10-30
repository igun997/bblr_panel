<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminVideosController extends CBController {


    public function cbInit()
    {
        $this->setTable("videos");
        $this->setPermalink("videos");
        $this->setPageTitle("Videos");

        $this->addText("Title","title")->strLimit(150)->maxLength(255);
		$this->addText("URL Youtube","url_yt")->strLimit(100)->minLength(3);
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);


    }
}
