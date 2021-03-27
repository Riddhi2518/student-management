<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href= "<?php echo base_url('assets/materialize/css/materialize.min.css');?> " media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    
    <link href=" <?php echo base_url('assets/css/font-awesome.css ');?>" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

    <link href= " <?php echo base_url('assets/css/custom-styles.css');?>" rel="stylesheet" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
</head>

<body>
	
    
<div id="wrapper" >
        <nav class="navbar navbar-default top-navbar" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".sidebar-collapse" id="sidebarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="index.html" ><strong>Admin</strong></a>
				<a class="dropdown-button " style="float: left; margin-left: 100px; margin-top: 20px;  text-decoration: none;"><i class="fa fa-user fa-fw"></i> <b style="color: white; ">Admin</b> </a>
		      <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>
            <ul class="nav navbar-top-links navbar-right" id="hidden"> 
				<li><a href="#"><i class="fa fa-envelope fa-fw"></i> </a></li>				
				<li><a href="#"><i class="fa fa-tasks fa-fw"></i></a></li>
				<li><a href="#"><i class="fa fa-bell fa-fw"></i></a></li>
				<li class="admin"><a class="dropdown-button " href="#" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Admin</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
			<ul id="dropdown1" class="dropdown-content">
			<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a></li>
			<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li> 
			<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
			</ul>
 
	   <!-- NAV TOP  -->
        <nav class="navbar-default navbar-side" id="sidebar">
            <div class="sidebar-collapse" id="togglebtn">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu "  href="<?= site_url('users/addnew'); ?>"><i class="fa fa-user fa-fw"></i> Student</a>
                    </li>
                    <li>
                        <a href="#" class=""><i class="fa fa-user fa-fw"></i> Faculty</a>
                    </li>
					<li>
                        <a href="chart.html" class=""><i class="fa fa-table"></i> Time Table</a>
                    </li>
                </ul>
                   
                   <div id="inside"class="row" style="list-style-type: none; margin-left: 8%; margin-top: 10%; display: flex; ">
					   
						<li style="padding-right: 15%;"><a href="#"><i class="fa fa-envelope fa-fw"></i> </a></li>				
						<li style="padding-right: 15%;"><a href="#"><i class="fa fa-tasks fa-fw"></i></a></li>
						<li style="padding-right: 5%;"><a href="#"><i class="fa fa-bell fa-fw"></i></a></li>
					  
				   </div>
					
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Student
                        </h1>							
		   </div>
            <div id="page-inner">
    <div class="container">
    	<h1 class="page-header text-center">CodeIgniter Simple CRUD Tutorial</h1>
    	<div class="row">
    		<div class="col-sm-4 col-sm-offset-4">
    			<h3>Add Form
    				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
    			</h3>
    			<hr>
    			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
    				<div class="form-group">
    					<label>Student_id:</label>
    					<input type="text" class="form-control" name="student_id">
    				</div>
    				<div class="form-group">
    					<label>First_name:</label>
    					<input type="text" class="form-control" name="First_name">
    				</div>
    				<div class="form-group">
    					<label>Last_name:</label>
    					<input type="text" class="form-control" name="Last_name">
    				</div>
					<div class="form-group">
    					<label>Registration_date:</label>
    					<input type="text" class="form-control" name="registration_date">
    				</div>
					<div class="form-group">
    					<label>cource:</label>
    					<input type="text" class="form-control" name="cource">
    				</div>
					<div class="form-group">
    					<label>email:</label>
    					<input type="text" class="form-control" name="email">
    				</div>
					<div class="form-group">
    				<label for="gender">Gender:</label>
					<select name="gender" id="gender">
                       <option value="Male">Male</option>
                        <option value="Female">Female</option>

                   </select> 
    				</div>
					


    				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
    			</form>
    		</div>
    	</div>
    </div>
</div>
		</div>

    <script src=" <?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	
<script src="<?php echo base_url('assets/materialize/js/materialize.min.js');?>"></script>
	
	
    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/js/custom-scripts.js');?>"></script> 
 

</body>

</html>