

<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
//$this->params['breadcrumbs'][] = $this->title;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en">
<body>

<main id="main">
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Supervisor Signup</h2>
        </div>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
					<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'password_hash')->label('Password')->passwordInput() ?>
                    <?= $form->field($model, 'email')->textInput() ?>
					<?= $form->field($model, 'phone')->textInput() ?>
					<?= $form->field($model, 'state')->dropDownList($state);?>
              
              <br><?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Important Links</a></h4>
              <p class="description">MoHFW : <a href="https://www.mohfw.gov.in/">https://www.mohfw.gov.in/</a> </p>
              <p class="description">Govt of India : <a href="https://www.mygov.in/covid-19">https://www.mygov.in/covid-19</a> </p>
              <p class="description">WHO : <a href="https://www.who.int/">https://www.who.int/</a> </p>
              <p class="description">State/District wise details : <a href="https://www.mygov.in/corona-data/covid19-statewise-status">https://www.mygov.in/corona-data/covid19-statewise-status</a> </p>
              <p class="description">MyGov Corona Helpdesk : <a href="https://wa.me/919013151515?text=Hi">https://wa.me/919013151515?text=Hi</a> </p>
            </div>
          </div>

        </div>
        <?php ActiveForm::end(); ?>
      </div>
    </section><!-- #services -->
</main>