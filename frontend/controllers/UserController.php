<?php 
namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';

    /**
    * @inheritdoc
    */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),
        ];
        return $behaviors;
    }
}