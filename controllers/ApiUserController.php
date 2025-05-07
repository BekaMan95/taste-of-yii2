<?php

// File: controllers/ApiUserController.php
namespace app\controllers;

use app\controllers\BaseApiController;
use app\models\User;

class ApiUserController extends BaseApiController
{
    public function actionSum($a, $b)
    {
        return ['sum' => $a + $b];
    }
    public function actionIndex()
    {
        return User::find()->all(); // Return all users
    }

    public function actionView($id)
    {
        $user = User::findOne($id);
        if ($user === null) {
            throw new NotFoundHttpException("User not found.");
        }
        return $user;
    }

    public function actionCreate()
    {
        $user = new User();
        $user->load(\Yii::$app->request->post(), '');
        if ($user->save()) {
            return $user;
        }
        return $user->errors;
    }

    public function actionUpdate($id)
    {
        $user = User::findOne($id);
        if ($user === null) {
            throw new NotFoundHttpException("User not found.");
        }
        $user->load(\Yii::$app->request->post(), '');
        if ($user->save()) {
            return $user;
        }
        return $user->errors;
    }

    public function actionDelete($id)
    {
        $user = User::findOne($id);
        if ($user === null) {
            throw new NotFoundHttpException("User not found.");
        }
        $user->delete();
        return ['status' => 'success'];
    }
}
