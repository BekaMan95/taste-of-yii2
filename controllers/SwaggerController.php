<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class SwaggerController extends Controller 
{
    /**
     * Displays swagger api page.
     *
     * @return view
     */

     public function actionIndex()
     {
         return $this->render('index');
     }
}
