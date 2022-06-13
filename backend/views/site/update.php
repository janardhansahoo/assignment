	<?php
		use yii\helpers\Html;
		use yii\bootstrap\ActiveForm;
		use yii\helpers\Url;
		use backend\models\Form;
	?>


<?php $application = $form->applicationno ; ?>


<main id="main">
	<section id="services">
		<div class="limiter">
		<div class="container">
			<div class="section-header">
				<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
				<?php $edit = ActiveForm::begin(['id' => 'login-form']); ?>
					<span class="login100-form-title">
						<h2>Update Application number : <?php echo $application ; ?></h2>
				          <p>
				            <?php if(yii::$app->session->hasFlash('success')) : ?>
				              <?php echo yii::$app->session->getFlash('success') ; ?>
				            <?php endif; ?>
				          </p>
					</span>
					<p><strong>Name : <?php echo $form->name ; ?></p></strong>
					<p><strong>Phone Number : </strong><?php echo $form->phone ; ?></p>
					<p><strong>Aadhar Number : </strong><?php echo $form->aadhar ; ?></p>
					<p><strong>No. of People : </strong><?php echo $form->noofpeople ; ?></p>
					<p><strong>From State : </strong><?php echo $form->fromstate ; ?></p>
					<p><strong>From District : </strong><?php echo $form->fromdistrict ; ?></p>
					<p><strong>To District : </strong><?php echo $form->todistrict ; ?></p>
					<p><strong>Travel Date From : </strong><?php echo $form->traveldatefrom ; ?></p>
					<p><strong>Travel Date To : </strong><?php echo $form->traveldateto ; ?></p>
					<p><strong>Via State 1 : </strong><?php echo $form->viastate1 ; ?></p>
					<p><strong>Via State 2 : </strong><?php echo $form->viastate2 ; ?></p>
					<p><strong>Via State 3 : </strong><?php echo $form->viastate3 ; ?></p>
					<strong><p><?= $edit->field($form, 'status')->dropDownList(['Open'=>'Open' ,'Accepted'=>'Accepted' ,'Rejected'=>'Rejected' ]) ;?></p></strong>
						<span class="focus-input100"></span>
			
					<div class="container-login100-form-btn">
						<br><?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'login-button'])?>
					</div>
					<?php ActiveForm::end(); ?>			
              </div>
			</div>
		</div>
	</div>
</section>
</main>