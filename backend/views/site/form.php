<!-- form for fillup -->


 
  <?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Url;
    use yii\jui\DatePicker;
	use backend\models\Form;
  ?>

<main id="main">
	<section id="services">
		<div class="limiter">
		<div class="container">
			<div class="section-header">
				<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
				<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
					<span class="login100-form-title">
						<center><h2>Registration form</h2></center>
				          <p>
				            <?php if(yii::$app->session->hasFlash('success')) : ?>
				              <?php echo yii::$app->session->getFlash('success') ; ?>
				            <?php endif; ?>
				          </p>
					</span>
					<strong><p><?= $form->field($model, 'name')->textInput(['autofocus' => true]) ; ?></p></strong>
                    <strong><p><?= $form->field($model, 'phone')->textInput() ; ?> </p></strong>
                    <strong><p><?= $form->field($model, 'noofpeople')->textInput() ; ?></p></strong>
					<strong><p><?= $form->field($model, 'aadhar')->textInput() ?></p></strong>
					<strong><p><?= $form->field($model, 'fromstate')->dropDownList($state); ?></p></strong>
					<strong><p><?= $form->field($model, 'fromdistrict')->textInput() ; ?></p></strong>
					<strong><p><?= $form->field($model, 'todistrict')->textInput() ; ?></p></strong>
					<strong><p><?= $form->field($model, 'traveldatefrom')->textInput(['type'=>'date']) ; ?></p></strong>
					<strong><p><?= $form->field($model, 'traveldateto')->textInput(['type'=>'date']) ; ?></p></strong>
					<strong><p><?= $form->field($model, 'viastate1')->dropDownList($state ) ; ?></p></strong>
					<strong><p><?= $form->field($model, 'viastate2')->dropDownList($state , ['prompt' => 'NONE']) ; ?></p></strong>
					<strong><p><?= $form->field($model, 'viastate3')->dropDownList($state , ['prompt' => 'NONE']) ; ?></p></strong>
					<strong><p><strong><p><?= $form->field($model, 'status')->dropDownList(['Open'=>'Open']); ?></p></strong></p></strong>
						<span class="focus-input100"></span>
			
					<div class="container-login100-form-btn">
						<br><?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
					</div>
					<?php ActiveForm::end(); ?>			
              </div>
              <div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
              	<br><br>
              	<strong>Important Points to be Noted carefully : </strong>
              	<br><strong>1.</strong> Phone number should be of 10 digits without any +91 Prefix.
              	<br><strong>2.</strong> Number of People should have a maximum entry of 50 persons.
              	<br><strong>3.</strong> Aadhar Number entered should be without any hiphens(-) and Slashes(/).
              	<br><strong>4.</strong> District entered of <strong>From State</strong> should be relevant , wrongly entered could lead to <strong>cancellation</strong> of application.
              	<br><strong>5.</strong> To District entered of <strong>ODISHA</strong> should be relevant , wrongly entered could lead to <strong>cancellation</strong> of application.
              	<br><strong>6.</strong> Date of Travel entered should be correct , wrongly entered could lead to <strong>cancellation</strong> of application.
              	<br><strong>7.</strong> There should be minimum one via state entered.
              </div>
			</div>
		</div>
	</div>
</section>
</main>