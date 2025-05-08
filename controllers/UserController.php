<?php

// File: controllers/ApiUserController.php
namespace app\controllers;

use app\controllers\BaseApiController;
use app\models\User;
use OpenApi\Annotations as OA;


/**
 * @OA\Info(
 *     title="Swagger API",
 *     version="1.0.0",
 *     description="This is a sample API",
 *     @OA\Contact(
 *         email="developer@example.com"
 *     ),
 *     @OA\License(
 *         name="MIT",
 *         url="https://opensource.org/licenses/MIT"
 *     )
 * )
 */

class UserController extends BaseApiController
{
    public $enableCsrfValidation = false;

    /**
     * @OA\Get(
     *     path="/api/users",
     *     summary="Get all users",
     *     @OA\Response(
     *         response=200,
     *         description="Successful response"
     *     )
     * )
     */

    public function actionIndex()
    {
        return ['message' => 'User index'];
    }

    /**
     * @OA\Get(
     *     path="/api/users/{id}",
     *     summary="Get all users",
     *     @OA\Response(
     *         response=200,
     *         description="Successful response"
     *     )
     * )
     */

    public function actionView($id)
    {
        return ['message' => 'User view by id!'];
    }

    /**
     * @OA\Post(
     *     path="/api/users/create",
     *     summary="Create a new user",
     *     @OA\Response(
     *         response=200,
     *         description="Successful response"
     *     )
     * )
     */

    public function actionCreate()
    {
        return ['message' => 'User is created!'];
    }

    /**
     * @OA\Put(
     *     path="/api/users/update/{id}",
     *     summary="Update a user by id",
     *     @OA\Response(
     *         response=200,
     *         description="Successful response"
     *     )
     * )
     */

    public function actionUpdate($id)
    {
        return ['message' => 'User is updated!'];
    }

    /**
     * @OA\Delete(
     *     path="/api/users/delete/{id}",
     *     summary="Delete a user by id",
     *     @OA\Response(
     *         response=200,
     *         description="Successful response"
     *     )
     * )
     */

    public function actionDelete($id)
    {
        return ['message' => 'User is deleted!'];
    }
}
