<?php

class WeaponsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAdd()
	{
		$weapons = new Weapon();
		if(isset($_POST['Weapon']))
		{
			$weapons->attributes = $_POST['Weapon'];
			$weapons->uid = 0;
			$weapons->belong = $weapons->belong[0];
			$weapons->parameter = serialize($weapons->parameter);
			$weapons->addtime = time();
			$weapons->updatetime = time();
			if($weapons->validate() && $weapons->save())
			{
				$this->redirect('index');
			}
		}
		$this->render('add',array('weapons'=>$weapons));
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