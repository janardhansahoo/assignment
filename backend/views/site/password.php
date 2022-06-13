<!-- reset password page 2 -->

<?php 

if(!isset($_GET["code"])) {
	echo ' <div style="font-size:1.25em;font-family:Aclonica;color:#0e3c68;font-weight:bold;">Unable to Find the requested page';
		exit();
}

$code = $_GET["code"] ;

$params = [':code' => $code];
$getEmail = Yii::$app->db->createCommand('SELECT email FROM reset WHERE code = :code')
				->bindValues($params)->queryScalar();

//echo "$getEmail";



if($getEmail == NULL) {
	echo ' <div style="font-size:1.25em;font-family:Aclonica;color:#0e3c68;font-weight:bold;">Cannot Find the Page Specified';
		exit();
}

if(isset($_POST["password"])) {
	$pw = $_POST["password"];
	$pw = Yii::$app->getSecurity()->generatePasswordHash($pw) ;
	// echo "$pw";
	// exit();

	$query = Yii::$app->db->createCommand()->update('user',['password_hash' => "$pw"] , 'email = :getEmail' , [':getEmail' => $getEmail])->execute();

	if($query){
		$query = Yii::$app->db->createCommand()->delete('reset', 'email = :getEmail' , [':getEmail' => $getEmail])->execute();
		echo ' <div style="font-size:1.25em;font-family:Aclonica;color:#0e3c68;font-weight:bold;"> Password Updated Successfully';
		exit();
	}
	else{
		echo ' <div style="font-size:1.25em;font-family:Aclonica;color:#0e3c68;font-weight:bold;">Something went Wrong, Tr again later with reset password';
		exit();
	}
}

?>




<main id="main">
    <section id="services">
        <div class="limiter">
            <div class="container">
                <div class="section-header">
                    <div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                        <h2><center>Enter New Password</center></h2>
							<div class="form-group has-success">
								 <form method="POST">
									<input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>" />
									<input type="password" class="form-control is-valid" name="password" placeholder="New password" style="font-family: Almendra" autocomplete="off">
									<br>
									<input type="submit" name="submit" class="btn btn-danger" value="Update password" style="font-family: Aclonica">
								</form>
							</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

