<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\Logs */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="logs-view">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 row">
                        <div class="col-sm-6">
                            <?= DetailView::widget([
                                'model' => $model,
                                'attributes' => [
                                    'id',
                                    'time',
                                    'title',
                                ],
                            ]) ?>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?=$model->imgUrl?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
