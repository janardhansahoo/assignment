 

	<?php
		use yii\helpers\Html;
		use yii\bootstrap\ActiveForm;
		use yii\helpers\Url;
	?>

<br><br>



        <div class="container">
            <div class="section-header">
    			<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
    				<table class="table table-hover" id="myTable">
    					<thead>
    						<tr>
    							<th scope="col">NAME</th>
    							<th scope="col">ASSIGNED STATE</th>
    						</tr>
    					</thead>
    					<tbody>
				  			<?php if(count($model) > 0): ?>
				  				<?php foreach($model as $model): ?>
				    				<tr class="table-active">
								      	<td><?php echo $model -> username; ?></td>
								      	<td><?php echo $model -> state; ?></td>
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
            </div>
        </div>

