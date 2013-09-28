<?php

class RanksController extends Controller
{

	
	/**
	 * action Get Last fifa rank
	 */
	public function actionLast()
	{
		$criteria = new CDbCriteria;
		$criteria->select='rank';
		//$criteria->condition='rank < :maxId';
		//$criteria->params=array(':maxId'=>100);
		$criteria->order='rank DESC';
		$lastRank = FifaRanks::model()->find($criteria);		
		
		/*dump($lastRank->getAttributes());
		echo "<hr />";
		dump($lastRank->getMetaData());
		echo "<hr />";
		dump($lastRank);
		// */
		$this->sendResponse(200, CJSON::encode($lastRank->attributes));
		
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$ranks = FifaRanks::model()->findAll();
		$arr = array();
		foreach ($ranks as $t) 
		{
			$arr[] = $t->attributes;
		}
		$this->sendResponse(200, CJSON::encode($arr));
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model=$this->loadModel($id);
		//dump($model->attributes);
		$this->sendResponse(200, CJSON::encode($model->attributes));
	}
	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=FifaRanks::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fifa-ranks-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
