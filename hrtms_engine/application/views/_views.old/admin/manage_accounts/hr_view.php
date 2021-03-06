<?php if($this->session->userdata('permission') != 'Administrator') { redirect(base_url() . 'index.php/404');} ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dashboard - AMI</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>hrtms_resources/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>hrtms_resources/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery-ui-1.10.3.full.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/font.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/jquery.gritter.css">
		
	
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/<?php echo $this->session->userdata('permission');?>/custom.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/style-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url();?>hrtms_resources/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
	</head>

	<body>

		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<img src="<?php echo base_url();?>hrtms_resources/images/logo.png">
							AMI - HRTMS Administration
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
					<!--	
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 1</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 2</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 3</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Task 4</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-only icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Error Occured
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Members
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
					-->

						<li class="green">
							<a href="<?php echo base_url(); ?>messenger">
								<i class="icon-envelope-alt icon-only"></i> Inbox
								<span class="badge badge-success"></span>
							</a>
						</li>

						<li class="light-blue user-profile">
							<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
								<img class="nav-user-photo" src="<?php if($this->session->userdata('image_file')=='') { echo base_url().'hrtms_resources/avatars/user.jpg'; } else { echo base_url().'hrtms_resources/avatars/'.$this->session->userdata('image_file');}?>" alt="User's Photo" />
								<span id="user_info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata('username');?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">
								<li>
									<a href="<?php echo base_url();?>myprofile">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url();?>logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
	
		<div class="container-fluid" id="main-container">
			
			<a id="menu-toggler" href="#">
				<span></span>
			</a>

			<div id="sidebar">
				<div id="sidebar-shortcuts">
					<div id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>

				<!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					
					<li>
						<a href="<?php echo base_url();?>dashboard">
							<i class="icon-bar-chart"></i>
							<span>Control Panel</span>
						</a>
					</li>

					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Registration</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
						<?php if($this->session->userdata("permission") == "Administrator") {?>

							<li>
								<a href="<?php echo base_url();?>applicant/batch_control">
									<i class="icon-user"></i>
								   	<span>Batch Control</span>
								</a>
							</li>
						<?php }?>
							<li >
								<a href="<?php echo base_url();?>applicant">
									<i class="icon-archive"></i>
									<span>Applicants</span>
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>applicant/accept">
									<i class="icon-user"></i>
								   	<span>Accept</span>
								</a>
							</li>
						</ul>
					</li>


					<li>
						<a href="<?php echo base_url();?>training">
							<i class="icon-book"></i>
							<span>Training</span>
						</a>
					</li>

					<?php if($this->session->userdata("permission")=="Administrator") {?>
					<li>
						<a href="<?php echo base_url();?>client">
							<i class="icon-building"></i>
							<span>Client Companies</span>
						</a>
					</li>
					<?php }?>

					<li>
						<a href="<?php echo base_url();?>deployment">
							<i class="icon-tag"></i>
							<span>Deployment Tagging</span>
						</a>
					</li>
 
					<li  class="active open">
						<a href="#" class="dropdown-toggle">
							<i class="icon-shield"></i>
							<span>Manage Accounts</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li  class="active">
								<a href="<?php echo base_url();?>manage/hr">
									<i class="icon-user"></i>
									HR Department 
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>manage/training">
									<i class="icon-user"></i>
									Training Department
								</a>
							</li>
						</ul>
					</li>
 
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-cog"></i>
							<span>Administrative Tools</span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">

							<li>
								<a href="<?php echo base_url();?>administrative/audit">
									<i class="icon-list"></i>
									Audit Logs
								</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>administrative/backup">
									<i class="icon-download-alt"></i>
									Backup &amp; Maintenance
								</a>
							</li>

							
						</ul>
					</li>

					<!--<li>
						
						<a href="help">
							<i class="icon-question-sign"></i>
							<span>Help</span>
						</a>
					</li>-->

					<li>
						<a href="<?php echo base_url(); ?>about">
							<i class="icon-info"></i>
							<span>About the Developers</span>
						</a>
					</li>
			
				</ul>

				<!--/.nav-list-->

				<div id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>


			
			<div id="main-content" class="clearfix">
				<div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-shield"></i>
							<a href="#">Manage Accounts</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">HR Department</li>
					</ul><!--.breadcrumb-->

					<div id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small search-query" id="nav-search-input" autocomplete="off" />
			 					<i class="icon-search" id="nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div id="page-content" class="clearfix">
					<div class="page-header position-relative">
						<h1>
							Human Resource Department Management
							<small>
								<i class="icon-double-angle-right"></i>
								Staff Accounts
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<!--PAGE CONTENT STARTS HERE-->

						<div class="span7">

							<div class="box">
									
									<div id="infoMessage" align=""><?php
						              $message = $this->session->flashdata('delete_message');
						              if ($message == null){}
						              else{echo $message;}
						              ?>         
									</div>
									<div class="box-content">

										<div class="row-fluid">
											
											<div class="table-header">
												 HR Account Details
											</div>
											<table id="table_report" class="table table-striped table-bordered table-hover">
											<thead>
											<tr>
												
												<th>
													Name
												</th>
												<th>
													Username
												</th>
												<th class="hidden-480">
													Email Address
												</th>
												<th class="hidden-phone">													
													Date Created
												</th>
												<th> 
												</th>
											</tr>
											</thead>
											<tbody>
												<?php if(isset($records)) : foreach($records as $row) : ?>
													<tr>
														
														<td id=""><?php echo $row->last_name.', '.$row->first_name.' '.$row->middle_name;?></td>
														<td><?php echo $row->username;?></td>
														<td><?php echo $row->email;?></td>														
														<td><?php echo $row->date_created;?></td>
														<td>
														
														<div class="hidden-phone visible-desktop btn-group">
															<button class="view_user btn btn-mini btn-success" value="<?php echo $row->id;?>">
																<i class="icon-ok bigger-120"></i>
															</button>

															<button class="edit_user btn btn-mini btn-info" value="<?php echo $row->user_id?>">
																<i class="icon-edit bigger-120"></i>
															</button>
													
														</div>
														<div class="hidden-desktop visible-phone">
															<div class="inline position-relative">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="view_user tooltip-info" data-rel="tooltip" title="View" value="">
																			<span class="blue">
																				<i class="icon-zoom-in bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="edit_user tooltip-success" data-rel="tooltip" title="Edit" value="">
																			<span class="green">
																				<i class="icon-edit bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>

														</td>	
													</tr>
													<?php endforeach;?>
												<?php endif; ?>
											</tbody>
											</table>
										</div>

										<small>Page rendered in: {elapsed_time} seconds</small>
									</div>
								</div>
								
								
							</div>
						
						<div class="span5">

							<!-- ADD HR START -->
							
				
							<div class="widget-box">

								<div class="widget-header">
									<h4><i class="icon-user"></i> Add HR Account</h4>
									
									<span class="widget-toolbar">
										<a href="#" data-action="collapse">
											<i class="icon-chevron-up"></i>
										</a>

										<a href="#" data-action="reload">
											<i class="icon-refresh"></i>
										</a>

										
									</span>
								</div>

								<div class="widget-body">
									<div class="alert alert-info center">
				                        <p>Items marked with an asterisk (<span class="required">*</span>) are required.</p>  
				                    </div>
							     	<div class="widget-body-inner">
									<div class="widget-main">
										<div class="row-fluid">

											<!--<?php if(!is_null($this->session->userdata('error_hr'))) echo $this->session->userdata('error_hr'); ?>
											-->
											<div id="infoMessage" align="center"><?php
								              $message = $this->session->flashdata('hr_message');
								              if ($message == null){}
								              else{echo $message;}
								              ?>         
											</div>
											<form method="post" action="<?php echo base_url();?>manage/add_hr" id="add_hr">
 											<div class="control-group">
												<label class="control-label" for="first_name">First Name (<span class="required">*</span>): </label>
												<div class="controls">
													<input style="width: 94%" type="text" id="first_name" name="first_name" value="<?php echo $this->session->flashdata('first_name');?>">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="last_name">Last Name (<span class="required">*</span>): </label>
												<div class="controls">	
													<input style="width: 94%" type="text" id="last_name" name="last_name" value="<?php echo $this->session->flashdata('last_name');?>">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="middle_name">Middle Name: </label>
												<div class="controls">
													<input style="width: 94%" type="text" id="middle_name" name="middle_name" value="<?php echo $this->session->flashdata('middle_name');?>">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="phone" >Phone # (<span class="required">*</span>): </label>
												<div class="controls">
													<input id="phone" class="input-mask-phone" style="width: 94%" type="text" name="phone" value="<?php echo $this->session->flashdata('phone');?>">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="email">Email address (<span class="required">*</span>): </label>
												<div class="controls">
													<input style="width: 94%" type="email" id="email" name="email"  value="<?php echo $this->session->flashdata('email');?>">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="username">Username (<span class="required">*</span>):  </label>
												<div class="controls">
													<input autofocus  style="width: 94%" placeholder="Enter Username" type="text" id="username" name="username" value="<?php echo $this->session->flashdata('username');?>">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="password">Password (<span class="required">*</span>): </label>
												<div class="controls">
													<input style="width: 94%" type="password" id="password" name="password" value="">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="password_confirm">Confirm Password (<span class="required">*</span>): </label>
												<div class="controls">
													<input style="width: 94%" type="password" id="password_confirm" name="password_confirm" value="">
												</div>
											</div>
											<div class="form-controls">

												<button type="submit" class="btn btn-success btn-small"><i class="icon-plus icon-white"></i> Add HR</button>
												<button type="reset" class="btn btn-danger btn-small"><i class="icon-undo icon-white"></i> Reset</button>
											</div>
												
											</form>	
										</div>									
									</div>
								</div></div>
							</div>



							<!-- ADD HR END -->

						</div>

						<!--PAGE CONTENT ENDS HERE-->
					</div><!--/row-->
				</div><!--/#page-content-->

			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->

		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.min.js"></script>

		<script type="text/javascript">
			//window.jQuery || document.write("<script src='<?php echo base_url();?>hrtms_resources/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
			window.jQuery || document.write("<script src='<?php echo base_url();?>hrtms_resources/js/jquery.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="<?php echo base_url();?>hrtms_resources/js/excanvas.min.js"></script>
		<![endif]-->
		
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery-ui-1.10.3.full.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/bootbox.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.maskedinput.min.js"></script>

		<!--ace scripts-->

		<script src="<?php echo base_url();?>hrtms_resources/js/style-elements.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/style.min.js"></script>

		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.dataTables.bootstrap.js"></script>


		<script src="<?php echo base_url();?>hrtms_resources/js/jquery.validate.min.js"></script>
	    <script src="<?php echo base_url();?>hrtms_resources/js/additional-methods.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
		$(function() {
				
			$.mask.definitions['~']='[+-]';
			$('.input-mask-phone').mask('(999) 999-9999');
			$('.input-mask-tel').mask('999-99-99');


			$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
			function tooltip_placement(context, source) {
				var $source = $(source);
				var $parent = $source.closest('table')
				var off1 = $parent.offset();
				var w1 = $parent.width();
		
				var off2 = $source.offset();
				var w2 = $source.width();
		
				if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
				return 'left';
			}

			//datatable initializatino
			var oTable1 = $('#table_report').dataTable( {
			"aoColumns": [
		      null, null,null, null,
			  { "bSortable": false }
			] } );

			$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
				_title: function(title) {
					var $title = this.options.title || '&nbsp;'
					if( ("title_html" in this.options) && this.options.title_html == true )
						title.html($title);
					else title.text($title);
				}
			}));

			jQuery.validator.addMethod("nameValidation", function(value, element) {
	          return this.optional(element) || /^[a-z\-.,\s]+$/i.test(value);
	        }, "Name must not contain special characters except comma, dash and period.");

			jQuery.validator.addMethod("phone", function (value, element) {
		        return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
		    }, "Enter a valid phone number.");
		        
	        jQuery.validator.setDefaults({
	          debug: true,
	          //success: "valid"
	        });
		    $('#add_hr').validate({
		          
		          errorElement: 'span',
		          errorClass: 'help-inline',
		          focusInvalid: false,
		          rules: {
	
		            first_name: {
		              required: true,
		              minlength:2,
		              nameValidation:true,
		            },
		            last_name: {
		              required: true,
		               minlength:2,
		               nameValidation:true,
		            },
		            middle_name: {
		            	minlength:2,
		            	nameValidation:true,
		            },
		          	phone:{
		          		required: true,
		          		phone: true
		          	},
		        	username: {
		              required: true,
		              minlength:6,
		              maxlength:20,
		              alphanumeric:true,
		              remote: {
		                url: "<?php echo base_url();?>manage/username_exists",
		                type: "post",
		                data: {
		                  username: function(){ return $("#username").val(); }
		                }
		              }
		            },
		          	password: {
		               	required: true,
		             	minlength: 6,
		              	maxlength:20,
		              	alphanumeric:true,
		            },
		            password_confirm: {
		              	required: true,
		              	minlength: 6,
		              	equalTo: "#password"
		            },
		            email: {
		               	required: true,
		               	email : true,
		               	remote: {
			                url: "<?php echo base_url();?>manage/email_exists",
			                type: "post",
			                data: {
			                  email: function(){ return $("#email").val(); }
			                }
			            }
		            } 
		          },
		      
		          messages: {
		            first_name: {
		              minlength: jQuery.format("At least {0} characters required."),

		            },
		            last_name: {
		              minlength: jQuery.format("At least {0} characters required."),
		            },
		            middle_name: {
		              minlength: jQuery.format("At least {0} characters required."),
		            },
		            client_location: {
		              minlength: jQuery.format("At least {0} characters required."),
		            },

		            email: {
		              required: "Please provide a valid email.",
		              email: "Please provide a valid email.",
		              remote: "This email is not available.",
		            },
		            username: {
		           	  minlength: jQuery.format("At least {0} characters required."),
		           	  remote: "This username is not available.",
		            },
		            password: {
		              required: "Please specify a password.",
		              minlength: jQuery.format("Please specify a secure password. At least {0} characters required.")
		            }, 
		            password_confirm: {
		              minlength: jQuery.format("At least {0} characters required.")
		            }
		          },
		      
		          invalidHandler: function (event, validator) { //display error alert on form submit   
		            $('.alert-error', $('.login-form')).show();
		          },
		      
		          highlight: function (e) {
		            $(e).closest('.control-group').removeClass('success').addClass('error');
		          },
		      
		          success: function (e) {
		            $(e).closest('.control-group').removeClass('error').addClass('success');
		            $(e).remove();
		          },
		      
		          errorPlacement: function (error, element) {

		            if(element.is(':checkbox') || element.is(':radio')) {
		              var controls = element.closest('.controls');
		              if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
		              else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
		            }
		            else if(element.is('.select2')) {
		              error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
		            }
		            else if(element.is('.chzn-select')) {
		              error.insertAfter(element.siblings('[class*="chzn-container"]:eq(0)'));
		            }
		            else error.insertAfter(element);
		          },
		          showErrors: function(errorMap, errorList) {
		            $("#summary").html("<div class=\"alert alert-error\">Your form contains "
		              + this.numberOfInvalids()
		              + " errors, see details below.</div>");
		              this.defaultShowErrors();
		          },
		          submitHandler: function (form) {
		            //alert('SUBMIT FORM');
		            form.submit();

		          },
		          invalidHandler: function (form) {
		            $("html, body").animate({ scrollTop: 0 }, "slow");
		          },

		        });
						

				


			

			
			$( ".view_user" ).on(ace.click_event,function() {
				var id = $(this).attr("value");
			 	$.ajax({
				url: "<?php echo base_url();?>manage/view_user",
				type: "post",
				data: {
					id: id
				},
				dataType: 'json',
				success: function(e) {
					console.log(e);
					$('#user_view').html(e);
					showDialog(id);
				}
				});
			});

			$( ".edit_user" ).on(ace.click_event,function() {
					var id = $(this).attr("value");
					$( "#edit_dialog" ).removeClass('hide').dialog({
					//dialogClass: "no-close",
					resizable: false,
					modal: true,
					closeOnEscape: true,
					title: "<div class='widget-header'><h4 class='smaller'><i class='icon-edit'></i> "+id+". Edit Client.</h4></div>",
					title_html: true,
					width: 400,
					//maxHeight: 800,
					buttons: [
							{
						      html: "<i class=\"icon-edit\"></i> Edit",
						      "class" : "btn btn-success btn-mini",
						      click: function() {
						        //$(this).dialog( "close" );
						        document.location.href='<?php echo base_url();?>manage/edit_user/' + id;
						      }
						    },
						    {
						      html: "Cancel",
						      "class" : "btn btn-mini",
						      click: function() {
						        $(this).dialog( "close" );
						      }
						    }
						  ]
					
					});
				});
				
		});
		/*var delete_user = function(id,username) {
			var str = "<h3>Confirm</h3>" + username + " will be deleted";
			str += ". Do you really want to delete this user?";

			bootbox.dialog(str, [{
					"label" : "<i class=\'icon-trash\'></i> Delete",
					"class" : "btn-small btn-danger",
					"callback": function() {
						//Example.show("great success");

						$.ajax({
							url: "<?php echo base_url();?>manage/delete_user",
							type: "post",
							data: {
								id: id,
								username: username
							},
							success: function(e) {
								console.log(e);
								location.reload();
							}
						});
						
					}
					}, {
						"label" : "Cancel",
						"class" : "btn-small"
					}]
				);

		}*/
		var showDialog = function(id){
			$( "#dialog" ).removeClass('hide').dialog({
				//dialogClass: "no-close",
				resizable: false,
				modal: true,
				closeOnEscape: true,
				title: "<div class='widget-header'><h4 class='smaller'><i class='icon-exchange'></i> "+id+". HR Details.</h4></div>",
				title_html: true,
				width: 500,
				//maxWidth: 800,
				maxHeight: 800,
				buttons: [
					    {
					      text: "OK",
					      "class" : "btn btn-info btn-mini",
					      click: function() {
					        $( this ).dialog( "close" );
					      }
					    }
					  ]
				
			});

		}
		</script>
	</body>
	<div id="dialog">
	   <div id="user_view"></div>
	</div>
	<div id="edit_dialog" style="display:none">
		<div class="center">
		<div class="alert alert-info">Edit HR Information or deactive/activate its account.</div>
		</div>
	</div>
</html>

