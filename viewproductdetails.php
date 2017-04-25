<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <?php include('dbcon.php'); ?>
   
<?php include('session.php'); ?>
    <?php include('allheader.php'); ?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
         <?php include ('sidebar.php'); ?>
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Tables</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Product Details</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-condensed  table-striped table-bordered bootstrap-datatable datatable responsive">
	<a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="testcode.php" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> QR CODE</a>
    <thead>
    <tr>
	<th></th>
	<th style="text-align:center;">User Name</th>
        <th style="text-align:center;">Asset Type</th>
                                    <th style="text-align:center;">Quandity  </th>
                                    
                                     <th style="text-align:center;">Defective Asset </th>
                                    <th style="text-align:center;">Already Sent For Repair </th>
									
									<th style="text-align:center;">Block</th>
									<th style="text-align:center;">Room</th>
									<th style="text-align:center;">class</th>
									<th style="text-align:center;">Section</th>
									<th style="text-align:center;">Action</th>
    </tr>
    </thead>
    <tbody>
	<?php
						 include('dbcon.php');	
								$result= mysql_query("select *from productdetails order by 'product_id' " ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['product_id'];
								?>
    <tr>
	<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
	<td style="text-align:center;"><?php echo $row ['username']; ?></td>
        <td style="text-align:center;"><?php echo $row ['producttype']; ?></td>
                  <td style="text-align:center;"><?php echo $row ['quandityheld']; ?></td>
                 <td style="text-align:center;"><?php echo $row ['needrepair_quandity']; ?></td>
				 <td style="text-align:center;"><?php echo $row ['sentforrepair']; ?></td>
				  <td style="text-align:center;"><?php echo $row ['block']; ?></td>
				  <td style="text-align:center;"><?php echo $row ['room']; ?></td>
				  <td style="text-align:center;"><?php echo $row ['class']; ?></td>
				  <td style="text-align:center;"><?php echo $row ['section']; ?></td>
				  
				  
				  <td style="text-align:center;">
				  
									<a href="editproductdetails.php<?php echo '?id='.$id; ?>"  data-toggle="modal"  class="btn btn-xs btn-primary  " > <i class="glyphicon glyphicon-pencil"></i></a>
									 <a href="delete.php<?php echo '?id='.$id; ?>"  data-toggle="modal"  class="btn btn-xs btn-danger  " > <i class="glyphicon glyphicon-trash"></i></a>
								<a href="testcode.php<?php echo '?id='.$id; ?>"  data-toggle="modal"  class="btn btn-xs btn-default  " > <span class="glyphicon glyphicon-barcode"></i></a>
								</td>
    </tr>
	<?php } ?>
    
    
    
    
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    <!--/row-->

    <!--/row-->

    <!--/row-->

   <!--/span-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
    
    <!-- Ad ends -->

    <hr>

   

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Mariyappan</a></p>
    </footer>

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
