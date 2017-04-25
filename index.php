<?php include('header.php'); ?>

<body>
<div class="ch-container">
    <div class="row">
       <div class="row">
        <div class="col-md-12 center login-header">
           <img src="omegalogo.png">
        </div>
        <!--/span-->
    </div> 
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Omega International School</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
            <form id="login_form" class="form-horizontal"  method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="clearfix"></div>

                    
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </p>
                </fieldset>
            </form>
			
			
			
			<script type="text/javascript">
										$(document).ready(function(){
											$('#login1').tooltip('show');
											$('#login1').tooltip('hide');
										});
									</script>
	
									<script>
												jQuery(document).ready(function(){
												jQuery("#login_form").submit(function(e){
														e.preventDefault();
														var formData = jQuery(this).serialize();
														$.ajax({
															type: "POST",
															url: "login.php",
															data: formData,
															success: function(html){
																if (html == 'oldtrue_admin'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome To Omega International School Class room Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'changepassword.php'  }, delay);  
															}else
															 if (html == 'true_admin'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome To Omega International School Class room Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'administratorpage.php'  }, delay);  
															}else
																if (html == 'oldtrue_teach'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'teacher/changepassword.php'  }, delay);  
															}else
																if (html == 'true_teach'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'teacher/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_host'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'hostel/changepassword.php'  }, delay);  
															}else
																if (html == 'true_host'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'hostel/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_maintenance'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'maintenance/changepassword.php'  }, delay);  
															}else
																if (html == 'true_maintenance'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'maintenance/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_lab'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'lab/changepassword.php'  }, delay);  
															}else
																if (html == 'true_lab'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'lab/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_transport'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/changepassword.php'  }, delay);  
															}else
																if (html == 'true_transport'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_library'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'library/changepassword.php'  }, delay);  
															}else
																if (html == 'true_library'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'library/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_security'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/changepassword.php'  }, delay);  
															}else
																if (html == 'true_security'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_laundry'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/changepassword.php'  }, delay);  
															}else
																if (html == 'true_laundry'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_toolroom'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/changepassword.php'  }, delay);  
															}else
																if (html == 'true_toolroom'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_healthroom'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/changepassword.php'  }, delay);  
															}else
																if (html == 'true_healthroom'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_kitchen'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/changepassword.php'  }, delay);  
															}else
																if (html == 'true_kitchen'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/addproductdetails.php'  }, delay);  
															}else
																if (html == 'oldtrue_pt'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/changepassword.php'  }, delay);  
															}else
																if (html == 'true_pt'){
																$.jGrowl("Loading Please Wait......", { sticky: true });
																$.jGrowl("Welcome to  Omega International School Class Inventory System", { header: 'Access Granted' });
															var delay = 1000;
																setTimeout(function(){ window.location = 'transport/addproductdetails.php'  }, delay);  
															}else
															{
															$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
															}
															}
														});
														return false;
													});
									});
									</script>
<?php include('footer_index.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
