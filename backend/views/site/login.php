  <?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Url;
  ?>
<!-- #services -->


<html>
<head>


<main id="main">
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Administrative Login</h2>
          <p>
            <?php if(yii::$app->session->hasFlash('success')) : ?>
              <?php echo yii::$app->session->getFlash('success') ; ?>
            <?php endif; ?>
          </p>
        </div>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <p class="description"><?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?></p>
              <p class="description"><?= $form->field($model, 'password')->passwordInput() ?></p>
              Forgot <a href="<?= Url::to(['site/reset'])?>">Password?</a>
              <br><?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
              <p class="description" style="margin-top: 50px">
                Don't have a account? <a href="<?= Url::to(['site/signup'])?>" class="txt3">Sign up now</a>
              </p>
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
     
</body>
</html> 