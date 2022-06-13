<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Form */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noofpeople')->textInput() ?>

    <?= $form->field($model, 'aadhar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fromstate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fromdistrict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tostate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'todistrict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'traveldatefrom')->textInput() ?>

    <?= $form->field($model, 'traveldateto')->textInput() ?>

    <?= $form->field($model, 'viastate1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viastate2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viastate3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'applicationno')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
