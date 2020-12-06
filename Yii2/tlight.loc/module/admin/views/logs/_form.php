<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\module\admin\models\Logs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logs-form">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'imgUrl')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
