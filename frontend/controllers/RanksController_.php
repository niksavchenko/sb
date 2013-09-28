<?php

class RanksController extends Controller
{

	public function actionIndex()
	{
		// TODO: create model
		$ranks = Yii::app()->db->createCommand()
		 ->select('mf_id, rank_date, next_rank, description')
		 ->from('a_fifa_ranks')
//		->where('rank=:rank', array(":rank" => 189))
		 ->order('mf_id DESC')
		 //->text; /*
		 ->queryAll(); //*/
		$this->sendResponse(200, CJSON::encode($ranks));
	}
	
	public function actionGetLast()
	{
		// TODO: create model
		$ranks = Yii::app()->db->createCommand()
		 ->select('mf_id, rank_date, next_rank, description')
		 ->from('a_fifa_ranks')
//		->where('rank=:rank', array(":rank" => 189))
		 ->order('mf_id DESC')
		 ->limit(1, 0)
		 //->text; /*
		 ->queryRow(); //*/
		$ranks['is_last'] = true;
		$this->sendResponse(200, CJSON::encode($ranks));
	}
	
	
	public function actionView($id)
	{
		// TODO: create model
		$ranks = Yii::app()->db->createCommand()
		 ->select('mf_id, rank_date, next_rank, description')
		 ->from('a_fifa_ranks')
		 ->where('mf_id=:rank', array(":rank" => $id))
		 ->order('mf_id DESC')
		 //->text; /*
		 ->queryAll(); //*/
		$this->sendResponse(200, CJSON::encode($ranks));
	}
	
}