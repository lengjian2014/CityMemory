<?php

class IndexController extends Controller
{
	
	public function actionIndex()
	{
		$this->layout = false;
		$this->render('/ucenter/index/index');
	}
	
}