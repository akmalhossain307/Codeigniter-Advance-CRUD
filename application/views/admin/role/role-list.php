<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="<?php echo base_url('admin-dashboard');?>" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Help and Support</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want custom development to integrate this theme?</b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                        <span>Try Pike Admin PRO</span>
                                    </p>
                                </a>                               

                                <!-- All-->
                                <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                                    <i class="fa fa-link"></i> Visit Pike Admin Website
                                </a>

                            </div>
                        </li>
						
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>New message received</span>
                                        <small class="text-muted">2 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>New message received</span>
                                        <small class="text-muted">15 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>New message received</span>
                                        <small class="text-muted">Yesterday, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>
                        
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
								<!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                                </div>
								
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Task 2 completed</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>New job completed</span>
                                        <small class="text-muted">35 minutes ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?php echo base_url();?>assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, <?php echo$this->session->userdata('name');?></small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="<?php echo base_url('logout');?>" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
								
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
						<a class="active" href="<?php echo base_url('admin-dashboard');?>"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

					
					<li class="submenu">
                        <a href="<?php echo base_url('role-list');?>"><i class="fa fa-fw fa-area-chart"></i><span> User Roles </span> </a>
                    </li>
					<li class="submenu">
                        <a href="<?php echo base_url('user-list');?>"><i class="fa fa-fw fa-users"></i><span> App Users </span> </a>
                    </li>
					
					<!--
					<li class="submenu">
                        <a href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
                    </li>
					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="tables-basic.html">Basic Tables</a></li>
								<li><a href="tables-datatable.html">Data Tables</a></li>
							</ul>
                    </li>
										
                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-tv"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-collapse.html">Collapse</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-tooltips.html">Tooltips and Popovers</a></li>
                            </ul>
                    </li>

					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="forms-general.html">General Elements</a></li>
								<li><a href="forms-select2.html">Select2</a></li>
                                <li><a href="forms-validation.html">Form Validation</a></li>
                                <li><a href="forms-text-editor.html">Text Editors</a></li>
								<li><a href="forms-upload.html">Multiple File Upload</a></li>
								<li><a href="forms-datetime-picker.html">Date and Time Picker</a></li>
								<li><a href="forms-color-picker.html">Color Picker</a></li>
                            </ul>
                    </li>
					
                    <li class="submenu">
						<a href="#"><i class="fa fa-fw fa-th"></i> <span> Plugins </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="star-rating.html">Star Rating</a></li>
								<li><a href="range-sliders.html">Range Sliders</a></li>
								<li><a href="tree-view.html">Tree View</a></li>
								<li><a href="sweetalert.html">SweetAlert</a></li>
								<li><a href="calendar.html">Calendar</a></li>
								<li><a href="gmaps.html">GMaps</a></li>
								<li><a href="counter-up.html">Counter-Up</a></li>
                            </ul>
                    </li>

					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-image"></i> <span> Images and Galleries </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="media-fancybox.html"><span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a></li>								
								<li><a href="media-masonry.html">Masonry</a></li>
								<li><a href="media-lightbox.html">Lightbox</a></li>
								<li><a href="media-owl-carousel.html">Owl Carousel</a></li>
								<li><a href="media-image-magnifier.html">Image Magnifier</a></li>
								
							</ul>
                    </li>
					
                    <li class="submenu">
                        <a href="#"><span class="label radius-circle bg-danger float-right">20</span><i class="fa fa-fw fa-copy"></i><span> Example Pages </span></a>
                            <ul class="list-unstyled">								
                                <li><a href="page-pricing-tables.html">Pricing Tables</a></li>
                                <li><a target="_blank" href="page-coming-soon.html">Countdown</a></li>								
                                <li><a href="page-invoice.html">Invoice</a></li>                        
								<li><a href="page-login.html">Login / Register</a></li>								
								<li><a href="page-blank.html">Blank Page</a></li>
                            </ul>
                    </li>

					<li class="submenu">
                        <a href="#"><span class="label radius-circle bg-primary float-right">9</span><i class="fa fa-fw fa-indent"></i><span> Menu Levels </span></a>
                            <ul>
								<li>
                                    <a href="#"><span>Second Level</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span>Third Level</span> <span class="menu-arrow"></span> </a>
                                        <ul style="">
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                            <li><a href="#"><span>Third Level Item</span></a></li>
                                        </ul>
                                </li>                                
                            </ul>
                    </li>
-->
					
					
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
					
						<div class="row">
									<div class="col-xl-12">
											<div class="breadcrumb-holder">
													<h1 class="main-title float-left">List - User Role </h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Home</li>
														<li class="breadcrumb-item active">User Role</li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<!-- end row -->

						
						
						
						
						

<div class="container">
<span class="pull-left"><a href="<?php echo base_url('create-role');?>"class="btn btn-primary btn-sm" ><i class="fa fa-plus" aria-hidden="true"></i> Add new category</a></span>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>SL No.</th>
        <th>Role</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$sl=0;
	if($roles)
	{
	foreach($roles as $role)
	{
	$sl++;
	?>
	
      <tr>
        <td><?php echo$sl;?></td>
        <td><?php echo$role['userRole'];?></td>
        <td><?php 
		$sts=$role['status'];
		if($sts==1)
		{
		echo"<span class='alert alert-success'>Active</span>";
		}
		else 
		{
		echo"<span class='alert alert-danger'>Inactive</span>";
		}
		?></td>
      </tr>
	<?php 
	}
	}
	?>  
    </tbody>
  </table>
</div>

						


							
							
							
							


            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	

















