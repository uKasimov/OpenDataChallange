<?php


namespace app\module\admin\controllers;


use yii\web\Controller;

class AppAdminController extends Controller
{
    public function beforeAction($action)
    {
        if (!\Yii::$app->user->isGuest and \Yii::$app->user->identity->role != 'admin') {
                return $this->goHome();
        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }
}
