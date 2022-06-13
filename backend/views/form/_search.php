<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'noofpeople') ?>

    <?= $form->field($model, 'aadhar') ?>

    <?php // echo $form->field($model, 'fromstate') ?>

    <?php // echo $form->field($model, 'fromdistrict') ?>

    <?php // echo $form->field($model, 'tostate') ?>

    <?php // echo $form->field($model, 'todistrict') ?>

    <?php // echo $form->field($model, 'traveldatefrom') ?>

    <?php // echo $form->field($model, 'traveldateto') ?>

    <?php // echo $form->field($model, 'viastate1') ?>

    <?php // echo $form->field($model, 'viastate2') ?>

    <?php // echo $form->field($model, 'viastate3') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'applicationno') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
