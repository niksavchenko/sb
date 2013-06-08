<?php

class ConfederationController extends Controller
{

	public function actionIndex()
	{
		// TODO: create model
		$confederations = Yii::app()->db->createCommand()
		->select('id, fifa_id, abbreviation, name, site, members, description')
		->from('a_fifa_confederations')
//		->where('rank=:rank', array(":rank" => 189))
		->order('abbreviation ASC')
		//->text; /*
		->queryAll(); //*/
		$this->sendResponse(200, CJSON::encode($confederations));
	}
}