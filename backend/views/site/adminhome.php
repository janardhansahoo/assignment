 

	<?php
		use yii\helpers\Html;
		use yii\bootstrap\ActiveForm;
		use yii\helpers\Url;
	?>

<br><br>




<main id="main">
    <section id="services">
    	<div class="container">
    		<div class="section-header">
    			<p>
					<?php if(yii::$app->session->hasFlash('success')) : ?>
				    <?php echo yii::$app->session->getFlash('success') ; ?>
				    <?php endif; ?>
				</p>
				<?php $role = Yii::$app->user->identity->username; ?>
				<h2>Welcome  : <?php echo $role; ?></h2>
    			Want To Create a Supervisor ? <a href="<?= Url::to(['site/supervisorsignup'])?>">Click Here</a>
                <br><a href="<?= Url::to(['site/viewsupervisor'])?>">Click Here</a> To view all Supervisors
    		</div>
    	</div>
    </section>
</main>

    			<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
    				<table class="table table-hover" id="myTable">
    					<thead>
    						<tr>
    							<th scope="col">APPLICATION NO</th>
    							<th scope="col">APPLICATION STATUS</th>
    							<th scope="col">NAME</th>
    							<th scope="col">PHONE</th>
    							<th scope="col">NO. OF PEOPLE</th>
    							<th scope="col">AADHAR NO</th>
    							<th scope="col">FROM STATE</th>
    							<th scope="col">FROM DISTRICT</th>
    							<th scope="col">TO DISTRICT</th>
    							<th scope="col">TRAVEL DATE FROM</th>
    							<th scope="col">TRAVEL DATE TO</th>
    							<th scope="col">VIA STATE 1</th>
    							<th scope="col">VIA STATE 2</th>
    							<th scope="col">VIA STATE 3</th>
    						</tr>
    					</thead>
    					<tbody>
				  			<?php if(count($form) > 0): ?>
				  				<?php foreach($form as $form): ?>
				    				<tr class="table-active">
				      					<th scope="row"><?php echo $form -> applicationno; ?></th>
								      	<th scope="row"><?php echo $form -> status; ?></th>
								      	<td><?php echo $form -> name; ?></td>
								      	<td><?php echo $form -> phone; ?></td>
								      	<td><?php echo $form -> noofpeople; ?></td>
								      	<td><?php echo $form -> aadhar; ?></td>
								      	<td><?php echo $form -> fromstate; ?></td>
								      	<td><?php echo $form -> fromdistrict; ?></td>
								      	<td><?php echo $form -> todistrict; ?></td>
								      	<td><?php echo $form -> traveldatefrom; ?></td>
								      	<td><?php echo $form -> traveldateto; ?></td>
								      	<td><?php echo $form -> viastate1; ?></td>
								      	<td><?php echo $form -> viastate2; ?></td>
								      	<td><?php echo $form -> viastate3; ?></td>
								      	<td>
								      		<span> <?= Html::a('Update' , ['update', 'id' => $form->id] , ['class' => 'btn btn-secondary']) ?> </span>
								      	</td>
								    </tr>
								<?php endforeach; ?>
    							<?php else: ?>
    								<tr>
    									<td>No Records found</td>
    								</tr>
    						<?php endif;  ?>
  						</tbody>
    				</table>
    			</div>


