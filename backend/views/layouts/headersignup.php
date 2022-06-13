  <?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    use yii\helpers\Url;
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Travel Portal(Signup)</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= Url::base();?>/img/favicon.png" rel="icon">
  <link href="<?= Url::base();?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= Url::base();?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= Url::base();?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= Url::base();?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= Url::base();?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= Url::base();?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= Url::base();?>/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="<?= Url::base();?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= Url::base();?>/css/style.css" rel="stylesheet">
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">ncov2019@gov.in</a>
        <i class="fa fa-phone"></i> 011-23978046
      </div>
      <div class="social-links float-right">
        <a href="https://www.twitter.com/naveen_odisha" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com/naveen.odisha" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.twitter.com/IPR_Odisha" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com/iprodisha" class="facebook"><i class="fa fa-facebook"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?= Url::to(['site/login'])?>" class="scrollto">Covid 19 Travel Portal</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="#body"><img src="img/logo.png" alt="" title="logo" /></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?= Url::to(['site/login'])?>">Home</a></li>
          <li><a href="<?= Url::to(['site/login#services'])?>">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
<!---728x90--->
      
    
       <?= $content ?>
<!---728x90--->

