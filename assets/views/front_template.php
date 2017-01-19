<!DOCTYPE html>
<html ng-app="PortfolioApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="Krzysztof Adamczyk, WiPeK, portfolio" />
    <meta name="Author" content="Krzysztof Adamczyk" />
    <meta name="Description" content="Strona internetowa prezentująca portfolio osoby Krzysztofa Adamczyka zawierająca cv, stworzone projekty oraz opis osoby." />
    <meta name="Robots" content="Index, Follow" />
    <base href="<?php echo base_url(); ?>">
    <title>WiPeK - Krzysztof Adamczyk</title>
    <link rel="stylesheet" href="<?php echo site_url('css/style.css'); ?> ">
    <link rel="stylesheet" href="<?php echo site_url('css/animations.css'); ?> ">
    <link rel="stylesheet" href="<?php echo site_url('css/tilteffect.css'); ?> ">
    <link rel="stylesheet" href="<?php echo site_url('css/ngAnimations.css'); ?> ">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!--[if lte IE 9]>
      <link href="<?php echo site_url() . 'animations-ie-fix.css'; ?>" rel='stylesheet'>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo site_url() . 'assets/images/favicon.ico'; ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo site_url() . 'assets/images/favicon.ico'; ?>" type="image/x-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  	<script>
     	var base_url = '<?php echo base_url(); ?>';
    </script>
  	<!-- jquery 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
    <script src="<?php echo site_url() . 'assets/js/jquery.js'; ?>"></script>
    
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-64346375-1', 'auto');
	  ga('send', 'pageview');

	</script>
  </head>
  <body>

    <div class="container-fluid">
      <?php $this->load->view('include/menu'); ?>
      <div class="row no_space">
        <div class="col-lg-12 col-lg-md-12 col-lg-sm-12 col-xs-12 no_space">
          <div ng-view class="scale-fade-in" autoscroll="true"></div>
        </div>
      </div>
      <?php $this->load->view('include/footer_s'); ?>
    </div>

    <!-- bootstrap js -->
    <script src="<?php echo site_url() . 'assets/js/bootstrap.min.js'; ?>"></script>

    <!-- angularjs components -->
    <script src="<?php echo site_url() . 'assets/js/angular-1.4.0-rc.2/angular.min.js'; ?>"></script> 
    <script src="<?php echo site_url() . 'assets/js/angular-1.4.0-rc.2/angular-route.min.js'; ?>"></script> 
    <script src="<?php echo site_url() . 'assets/js/angular-1.4.0-rc.2/angular-messages.min.js'; ?>"></script>  
    <script src="<?php echo site_url() . 'assets/js/angular-1.4.0-rc.2/angular-resource.min.js'; ?>"></script>  
    <script src="<?php echo site_url() . 'assets/js/angular-1.4.0-rc.2/angular-animate.min.js'; ?>"></script>  
    <script src="<?php echo site_url() . 'assets/js/angular.easypiechart.js'; ?>"></script>  
    <script src="<?php echo site_url() . 'assets/app/app.js'; ?>"></script>  
    <script src="<?php echo site_url() . 'assets/app/directives.js'; ?>"></script>  
    <script src="<?php echo site_url() . 'assets/app/controllers/controller.js'; ?>"></script>
    <script src="<?php echo site_url() . 'assets/app/count-to.js'; ?>"></script> 

    <!-- css3 animated it -->
    <script src="<?php echo site_url() . 'assets/js/css3-animate-it.js'; ?>"></script>

  </body>
</html>