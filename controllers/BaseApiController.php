<?php

// File: controllers/BaseApiController.php
namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;

class BaseApiController extends Controller
{
    public $enableCsrfValidation = false;

    public function beforeAction($action)
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }

    public function actionApiNotFound()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        \Yii::$app->response->statusCode = 404;
        return ['message' => 'not found!'];
    }
}
