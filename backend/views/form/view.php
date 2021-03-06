<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Form */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'noofpeople',
            'aadhar',
            'fromstate',
            'fromdistrict',
            'tostate',
            'todistrict',
            'traveldatefrom',
            'traveldateto',
            'viastate1',
            'viastate2',
            'viastate3',
            'status',
            'applicationno',
        ],
    ]) ?>

</div>
