<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/modernizr.custom.js'); ?>"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="<?php echo base_url('assets/js/Chart.js'); ?>"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/clndr.css'); ?>" type="text/css" />
<script src="<?php echo base_url('assets/js/underscore-min.js'); ?>" type="text/javascript"></script>
<script src= "<?php echo base_url('assets/js/moment-2.2.1.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/clndr.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/site.js'); ?>" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="<?php echo base_url('assets/js/metisMenu.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
<link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!-- here -->
		<?php $this->load->view('Kemahasiswaan/layout'); ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="charts">
					<div class="col-md-4 charts-grids widget">
						<h4 class="title">Bar Chart Example</h4>
						<canvas id="bar" height="300" width="400"> </canvas>
					</div>
					<div class="col-md-4 charts-grids widget states-mdl">
						<h4 class="title">Line Chart Example</h4>
						<canvas id="line" height="300" width="400"> </canvas>
					</div>
					<div class="col-md-4 charts-grids widget">
						<h4 class="title">Pie Chart Example</h4>
						<canvas id="pie" height="300" width="400"> </canvas>
					</div>
					<div class="clearfix"> </div>
							 <script>
								var barChartData = {
									labels : ["Jan","Feb","March","April","May","June","July"],
									datasets : [
										{
											fillColor : "rgba(233, 78, 2, 0.9)",
											strokeColor : "rgba(233, 78, 2, 0.9)",
											highlightFill: "#e94e02",
											highlightStroke: "#e94e02",
											data : [65,59,90,81,56,55,40]
										},
										{
											fillColor : "rgba(79, 82, 186, 0.9)",
											strokeColor : "rgba(79, 82, 186, 0.9)",
											highlightFill: "#4F52BA",
											highlightStroke: "#4F52BA",
											data : [40,70,55,20,45,70,60]
										}
									]
									
								};
								var lineChartData = {
									labels : ["Jan","Feb","March","April","May","June","July"],
									datasets : [
										{
											fillColor : "rgba(242, 179, 63, 1)",
											strokeColor : "#F2B33F",
											pointColor : "rgba(242, 179, 63, 1)",
											pointStrokeColor : "#fff",
											data : [70,60,72,61,75,59,80]

										},
										{
											fillColor : "rgba(97, 100, 193, 1)",
											strokeColor : "#6164C1",
											pointColor : "rgba(97, 100, 193,1)",
											pointStrokeColor : "#9358ac",
											data : [50,65,51,67,52,64,50]

										}
									]
									
								};
								var pieData = [
										{
											value: 90,
											color:"rgba(233, 78, 2, 1)",
											label: "Product 1"
										},
										{
											value : 50,
											color : "rgba(242, 179, 63, 1)",
											label: "Product 2"
										},
										{
											value : 60,
											color : "rgba(88, 88, 88,1)",
											label: "Product 3"
										},
										{
											value : 40,
											color : "rgba(79, 82, 186, 1)",
											label: "Product 4"
										}
										
									];
								
							new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
							
							</script>	
				</div>
				
				<div class="row">
					<div class="col-md-4 stats-info widget">
						<div class="stats-title">
							<h4 class="title">Browser Stats</h4>
						</div>
						<div class="stats-body">
							<ul class="list-unstyled">
								<li>GoogleChrome <span class="pull-right">85%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar green" style="width:85%;"></div> 
									</div>
								</li>
								<li>Firefox <span class="pull-right">35%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar yellow" style="width:35%;"></div>
									</div>
								</li>
								<li>Internet Explorer <span class="pull-right">78%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar red" style="width:78%;"></div>
									</div>
								</li>
								<li>Safari <span class="pull-right">50%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar blue" style="width:50%;"></div>
									</div>
								</li>
								<li>Opera <span class="pull-right">80%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar light-blue" style="width:80%;"></div>
									</div>
								</li>
								<li class="last">Others <span class="pull-right">60%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar orange" style="width:60%;"></div>
									</div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<table class="table stats-table ">
							<thead>
								<tr>
									<th>S.NO</th>
									<th>PRODUCT</th>
									<th>STATUS</th>
									<th>PROGRESS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-success">In progress</span></td>
									<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Aliquam</td>
									<td><span class="label label-warning">New</span></td>
									<td><h5>35% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-danger">Overdue</span></td>
									<td><h5  class="down">40% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Aliquam</td>
									<td><span class="label label-info">Out of stock</span></td>
									<td><h5>100% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-success">In progress</span></td>
									<td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Aliquam</td>
									<td><span class="label label-warning">New</span></td>
									<td><h5>38% <i class="fa fa-level-up"></i></h5></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="row">
					<div class="col-md-8 map widget-shadow">
						<h4 class="title">Visitors Map </h4>
						<div class="map_container"><div id="vmap" style="width: 100%; height: 354px;"></div></div>
						<!--map js-->
						<link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
						<script src="js/jquery.vmap.js"></script>
						<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
						<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
						<script type="text/javascript">
							jQuery(document).ready(function() {
								jQuery('#vmap').vectorMap({
									map: 'world_en',
									backgroundColor: '#fff',
									color: '#696565',
									hoverOpacity: 0.8,
									selectedColor: '#696565',
									enableZoom: true,
									showTooltip: true,
									values: sample_data,
									scaleColors: ['#585858', '#696565'],
									normalizeFunction: 'polynomial'
								});
							});
						</script>
						<!-- //map js -->
					</div>
					<div class="col-md-4 social-media widget-shadow">
						<div class="wid-social twitter">
							<div class="social-icon">
								<i class="fa fa-twitter text-light icon-xlg "></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">3.1 K</h3>
								<h4 class="counttype text-light">Tweets</h4>
							</div>
						</div>
						<div class="wid-social google-plus">
							<div class="social-icon">
								<i class="fa fa-google-plus text-light icon-xlg "></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">523</h3>
								<h4 class="counttype text-light">Circles</h4>
							</div>
						</div>
						<div class="wid-social facebook">
							<div class="social-icon">
								<i class="fa fa-facebook text-light icon-xlg "></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1.06K</h3>
								<h4 class="counttype text-light">Likes</h4>
							</div>
						</div>
						<div class="wid-social dribbble">
							<div class="social-icon">
								<i class="fa fa-dribbble text-light icon-xlg "></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1.6 K</h3>
								<h4 class="counttype text-light">Subscribers</h4>
							</div>
						</div>
						<div class="wid-social vimeo">
							<div class="social-icon">
								<i class="fa fa-vimeo-square text-light icon-xlg"> </i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2.1 m</h3>
								<h4 class="counttype text-light">Contacts</h4>
							</div>
						</div>
						<div class="wid-social xing">
							<div class="social-icon">
								<i class="fa fa-xing text-light icon-xlg "></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2525</h3>
								<h4 class="counttype text-light">Connections</h4>
							</div>
						</div>
						<div class="wid-social flickr">
							<div class="social-icon">
								<i class="fa fa-android text-light icon-xlg"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1221</h3>
								<h4 class="counttype text-light">Media</h4>
							</div>
						</div>
						<div class="wid-social yahoo">
							<div class="social-icon">
								<i class="fa fa-yahoo text-light icon-xlg"> Y!</i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">2525</h3>
								<h4 class="counttype text-light">Connections</h4>
							</div>
						</div>
						<div class="wid-social rss">
							<div class="social-icon">
								<i class="fa fa-rss text-light icon-xlg"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1523</h3>
								<h4 class="counttype text-light">Subscribers</h4>
							</div>
						</div>
						<div class="wid-social youtube">
							<div class="social-icon">
								<i class="fa fa-youtube text-light icon-xlg"></i>
							</div>
							<div class="social-info">
								<h3 class="number_counter bold count text-light start_timer counted">1523</h3>
								<h4 class="counttype text-light">Subscribers</h4>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="<?php echo base_url('assets/js/classie.js'); ?>"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"> </script>
</body>
</html>