<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Country;

class TestController extends Controller
{
	public function actionKy()
	{
		return $this->render('ky');
	}

	public function actionCountry()
	{
//		$model = new \app\models\Country();
		$countries = Country::find()->orderBy('name')->all();
		return d($countries[0]->getAttributes());
	}
}