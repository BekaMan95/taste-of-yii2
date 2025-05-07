<?php

// File: controllers/ApiUserController.php
namespace app\controllers;

use app\controllers\BaseApiController;
use app\models\User;

class UserController extends BaseApiController
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return ['message' => 'User index'];
    }

    public function actionView($id)
    {
        return ['message' => 'User view by id!'];
    }

    public function actionCreate()
    {
        return ['message' => 'User is created!'];
    }

    public function actionUpdate($id)
    {
        return ['message' => 'User is updated!'];
    }

    public function actionDelete($id)
    {
        return ['message' => 'User is deleted!'];
    }
}
