<!-- track application status -->

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
				<?php $edit = ActiveForm::begin(['id' => 'login-form']); ?>
					<span class="login100-form-title">
						<center><h2>Track Application</h2></center>
				          <p>
				            <?php if(yii::$app->session->hasFlash('success')) : ?>
				              <?php echo yii::$app->session->getFlash('success') ; ?>
				            <?php endif; ?>
				          </p>
					</span>
					<strong><p></p></strong>
					<br> 
					<style>
						input{
							width: 40%;
							height: 5%;
							border-radius: 05px;
							padding: 8px 15px 8px 15px;
							margin: 10px 0px 10px 0px ;
							box-shadow: 1px
						}
					</style>
					<form method="POST">
						<center><input type="text" name="application" autocomplete="off">
						<br><input type="submit" name="submit"></center>
					</form>

					<?php 
						if(isset($_POST['submit'])){
							$application = $_POST['application'];
							$print = Form::find()->where(['applicationno' => $application])->one();
							if($print===NULL){
								echo "<h5><center><strong>Enter Correct Application Number </strong></center>";
							}
							else if ($print->status == 'Rejected') {
								$query = Yii::$app->db->createCommand()->delete('form', 'applicationno = :application' , [':application' => $application])->execute();
								echo "<h5><center><strong>Your application has been Rejected, Please fill the form again </strong></center>";
							}
							else if($print->status == 'Open'){
								echo "<br><br><br>" ;
								echo "<h5><center><strong>$print->applicationno</strong></center>";
								echo "<h5><center><strong>$print->name</strong></center>";
								echo "<h5><center><strong>Phone : </strong>$print->phone</center>";
								echo "<h5><center><strong>Number of people : </strong>$print->noofpeople</center>";
								echo "<h5><center><strong>Aadhar number : </strong>$print->aadhar</center>";
								echo "<h5><center><strong>From State : </strong>$print->fromstate</center>";
								echo "<h5><center><strong>From District : </strong>$print->fromdistrict</center>";
								echo "<h5><center><strong>To District : </strong>$print->todistrict</center>";
								echo "<h5><center><strong>Travel Date From : </strong>$print->traveldatefrom</center>";
								echo "<h5><center><strong>Travel Date To : </strong>$print->traveldateto</center>";
								echo "<h5><center><strong>Via State 1 : </strong>$print->viastate1</center>";
								echo "<h5><center><strong>Via State 2 : </strong>$print->viastate2</center>";
								echo "<h5><center><strong>Via State 3 : </strong>$print->viastate3</center>";
								echo "<h5><center><strong>Application Status : </strong>$print->status</center>";
							}
							else if($print->status == 'Accepted'){
								echo "<br><br><br>" ;
								echo "<h5><center><strong>$print->applicationno</strong></center>";
								echo "<h5><center><strong>$print->name</strong></center>";
								echo "<h5><center><strong>Phone : </strong>$print->phone</center>";
								echo "<h5><center><strong>Number of people : </strong>$print->noofpeople</center>";
								echo "<h5><center><strong>Aadhar number : </strong>$print->aadhar</center>";
								echo "<h5><center><strong>From State : </strong>$print->fromstate</center>";
								echo "<h5><center><strong>From District : </strong>$print->fromdistrict</center>";
								echo "<h5><center><strong>To District : </strong>$print->todistrict</center>";
								echo "<h5><center><strong>Travel Date From : </strong>$print->traveldatefrom</center>";
								echo "<h5><center><strong>Travel Date To : </strong>$print->traveldateto</center>";
								echo "<h5><center><strong>Via State 1 : </strong>$print->viastate1</center>";
								echo "<h5><center><strong>Via State 2 : </strong>$print->viastate2</center>";
								echo "<h5><center><strong>Via State 3 : </strong>$print->viastate3</center>";
								echo "<h5><center><strong>Application Status : </strong>$print->status</center>";
								echo "<script>window.print();</script>";
							}
							else{
								echo "<h5><center><strong>Enter Correct Application Number </strong></center>";
							}
						}
					 ?>
					<?php ActiveForm::end(); ?>			
              </div>
			</div>
		</div>
	</div>
</section>
</main>