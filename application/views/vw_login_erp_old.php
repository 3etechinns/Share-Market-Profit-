
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<title>Login</title>
<meta name="keywords" content="" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- CSS -->

<!-- Bootstrap & FontAwesome & Entypo CSS -->
<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
<link href="<?php echo base_url()?>css/font-entypo.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="<?php echo base_url()?>img/ico/owo-icon.png">

<!-- Fonts CSS -->
<link href="<?php echo base_url()?>css/fonts.css" rel="stylesheet" type="text/css">

<!-- Plugin CSS -->
<link href="<?php echo base_url()?>plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet"
	type="text/css">
<link href="<?php echo base_url()?>plugins/prettyPhoto-plugin/css/prettyPhoto.css"
	rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>plugins/isotope/css/isotope.css" rel="stylesheet"
	type="text/css">
<link href="<?php echo base_url()?>plugins/pnotify/css/jquery.pnotify.css" media="screen"
	rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>plugins/google-code-prettify/prettify.css" rel="stylesheet"
	type="text/css">


<link href="<?php echo base_url()?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.css"
	rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet"
	type="text/css">
<link href="<?php echo base_url()?>plugins/bootstrap-switch/bootstrap-switch.css"
	rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>plugins/daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>plugins/bootstrap-timepicker/bootstrap-timepicker.min.css"
	rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>plugins/colorpicker/css/colorpicker.css" rel="stylesheet"
	type="text/css">

<!-- Specific CSS -->


<!-- Theme CSS -->
<link href="<?php echo base_url()?>css/theme.min.css" rel="stylesheet" type="text/css">
<!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
<link href="css/chrome.css" rel="stylesheet" type="text/chrome">
<!-- chrome only css -->



<!-- Responsive CSS -->
<link href="<?php echo base_url()?>css/theme-responsive.min.css" rel="stylesheet"
	type="text/css">




<!-- for specific page in style css -->

<!-- for specific page responsive in style css -->


<!-- Custom CSS -->
<link href="<?php echo base_url()?>custom/custom.css" rel="stylesheet" type="text/css">



<!-- Head SCRIPTS -->
<script type="text/javascript" src="<?php echo base_url()?>js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/mobile-detect.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/mobile-detect-modernizr.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->

</head>

<body id="pages"
	class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix"
	data-active="pages " data-smooth-scrolling="1">
	<div class="vd_body">
		<!-- Header Start -->

		<!-- Header Ends -->
		<div class="content">
			<div class="container">

				<!-- Middle Content Start -->

				<div class="vd_content-wrapper">
					<div class="vd_container">
						<div class="vd_content clearfix">
							<div class="vd_content-section clearfix">
								<div class="vd_login-page">
									<div class="heading clearfix">
										<div class="logo">
											<h2 class="mgbt-xs-5">
											<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>img/logo1.png" alt="logo"></a>
											</h2>
										</div>
										<?php
if(isset($note)){
	?>
	<span style="color:blue"><?php print_r($note);?></style>
	<?php
}?>
										<h4 class="text-center font-semibold vd_grey">LOGIN TO
											YOUR ACCOUNT</h4>
									</div>
									<div class="panel widget">
										<div class="panel-body">
											<div class="login-icon entypo-icon">
												<i class="icon-key"></i>
											</div>
										
												<div class="alert alert-danger vd_hidden">
													<button type="button" class="close" data-dismiss="alert"
														aria-hidden="true">
														<i class="icon-cross"></i>
													</button>
													<span class="vd_alert-icon"><i
														class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh
														snap!</strong> Change a few things up and try submitting again.
												</div>
												<div class="alert alert-success vd_hidden">
													<button type="button" class="close" data-dismiss="alert"
														aria-hidden="true">
														<i class="icon-cross"></i>
													</button>
													<span class="vd_alert-icon"><i
														class="fa fa-check-circle vd_green"></i></span><strong>Well
														done!</strong>.
												</div>
												<div class="form-group  mgbt-xs-20">
													<div class="col-md-12">
														<div class="label-wrapper sr-only">
															<label class="control-label" for="email">Email</label>
														</div>
														<div class="vd_input-wrapper" id="email-input-wrapper">
															<span class="menu-icon"> <i class="fa fa-envelope"></i>
															</span> <input type="email" placeholder="Email" id="txtUserID"
																name="txtUserID" class="required" required>
														</div>
														<div class="label-wrapper">
															<label class="control-label sr-only" for="password">Password</label>
														</div>
														<div class="vd_input-wrapper" id="password-input-wrapper">
															<span class="menu-icon"> <i class="fa fa-lock"></i>
															</span> <input type="password" placeholder="Password"
																id="txtPassword" name="txtPassword" class="required" required>
														</div>
													</div>
												</div>
												<div id="vd_login-error" class="alert alert-danger hidden">
													<i class="fa fa-exclamation-circle fa-fw"></i> Please fill
													the necessary field
												</div>
												<div class="form-group">
													<div class="col-md-12 text-center mgbt-xs-5">
														<button onclick="userLogin();" class="btn vd_bg-green vd_white width-100" id="login-submit"
															type="submit">Login</button>
													</div>
													<div class="col-md-12">
														<div class="row">
															<div class="col-xs-6">
																<div class="vd_checkbox">
																	<input type="checkbox" id="checkbox-1" value="1">
																	<label for="checkbox-1"> Remember me</label>
																</div>
															</div>
															<div class="col-xs-6 text-right">
																<div class="">
																	<a href="<?php echo base_url()?>welcome/foget">Forgot Password? </a>
																</div>
															</div>
														</div>
													</div>
												</div>
										
										</div>
									</div>
									<!-- Panel Widget -->
								</div>
								<!-- vd_login-page -->

							</div>
							<!-- .vd_content-section -->

						</div>
						<!-- .vd_content -->
					</div>
					<!-- .vd_container -->
				</div>
				<!-- .vd_content-wrapper -->

				<!-- Middle Content End -->

			</div>
			<!-- .container -->
		</div>
		<!-- .content -->
</div>
		
	

	<!-- .vd_body END  -->
	<a id="back-top" href="#" data-action="backtop"
		class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i>
	</a>
	<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

	<!-- Javascript =============================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
	<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
	<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
	<script type="text/javascript"
		src='<?php echo base_url()?>plugins/jquery-ui/jquery-ui.custom.min.js'></script>
	<script type="text/javascript"
		src="<?php echo base_url()?>plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>js/caroufredsel.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/plugins.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>plugins/breakpoints/breakpoints.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url()?>plugins/dataTables/jquery.dataTables.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url()?>plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script>

	<script type="text/javascript"
		src="<?php echo base_url()?>plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url()?>plugins/tagsInput/jquery.tagsinput.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url()?>plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>plugins/blockUI/jquery.blockUI.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url()?>plugins/pnotify/js/jquery.pnotify.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>js/theme.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>custom/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/login.js">
	
</script>
<script type="text/javascript">
              function userLogin()
        {
           
             ///alert("<?php echo base_url();?>");
           // event.preventDefault();
            var user_name = $("#txtUserID").val();
            var password = $("#txtPassword").val();
            //alert(user_name);
             var str="user_name=" + user_name + "&password=" + password; 
           //  alert(str);
              $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>Welcome/user_login_check_main", 
                            data:str,
                           cache: false,
                        // dataType: 'json',
                            success: function(response)
                            {
							alert(response);
							//alert(JSON.stringify(response));
                               
                                                          var url=response.redirect_path;
							//alert(JSON.stringify(url));
								window.location.href=url;
                            
                            }
                            });                    
        }
      
</script>
</body>

<!-- Mirrored from www.Reyank.com/login_erp by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2017 08:03:05 GMT -->
</html>
