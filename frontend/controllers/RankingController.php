<?php

class RankingController extends Controller
{

	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('FifaRanking',
			array(
			 'criteria' => array(
				'condition' => 'rank=189',
				'order' => 'id DESC',
			 ),
			 'pagination' => array(
				'pageSize' => 20,
			 ),
		 ));
		$this->sendResponse(200, CJSON::encode($dataProvider->getData()));
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));		
		//$this->render('index');
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionLastRanking()
	{
		$data = array();
		$model=$this->loadModel($id);
		$this->sendResponse(200, CJSON::encode($data));
	}	
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=FifaRanking::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}	

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}