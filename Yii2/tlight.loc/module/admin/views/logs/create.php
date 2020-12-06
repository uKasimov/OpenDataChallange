<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\Logs */

$this->title = 'Create Logs';
$this->params['breadcrumbs'][] = ['label' => 'Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logs-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
