
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hyper Mec | Administrator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/bootstrap/dist/css/bootstrap.min.css");?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/font-awesome/css/font-awesome.min.css");?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/Ionicons/css/ionicons.min.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/dist/css/AdminLTE.min.css");?>">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo asset("AdminLTE-2.4.0-rc/dist/css/skins/_all-skins.min.css");?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src=" <?php echo asset("AdminLTE-2.4.0-rc/bower_components/jquery/dist/jquery.min.js");?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src=" <?php echo asset("AdminLTE-2.4.0-rc/bower_components/bootstrap/dist/js/bootstrap.min.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset("AdminLTE-2.4.0-rc/dist/js/adminlte.min.js");?>"></script>
<!-- DataTables -->
<script src="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/datatables.net/js/jquery.dataTables.min.js");?>"></script>
<script src="<?php echo asset("AdminLTE-2.4.0-rc/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js");?>"></script>
<script>
  $(function () {
    $("#table1").DataTable();
  })
</script>
<style>
th{
	text-align:center;
}
#stokid{
	width:70%;
}
#form_input{
	padding-left:20px;
	font-size:12pt;
}

#form_input input{
	width:250px;
	margin-bottom:10px;
}
#add{
	margin-left:370px;
}

footer{
	text-align
}
.box-body{
	text-align:center;
}
#listitem{
	font-size:20pt;
}

#searchinput{
	float:right;
	
}
#active_menu{
	color:white;
}
#err {
    display: block;
}

#err:before {
    content: "\e209";
    font-family: 'Glyphicons Halflings';
    font-size: 9px;
    float: left;
    margin-top: 4px;
    margin-left: -17px;
    color: #CCCCCC;
}


</style>
<script type="text/javascript">		
</script>
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hyper</b>Mec</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
	  
    </nav>
	
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
   
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li class="treeview">
          <a href="sim.stts.edu">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
       
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Master of Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li id="employ_master"><a href="employmaster"><i class="fa fa-circle-o"></i> See Employee Data</a></li>
            <li id="employ_input"><a id="active_menu"  href="employinput"><i class="fa fa-circle-o"></i> Input New Employee </a></li>
          </ul>
        </li>
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Master of Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li id="item_master"><a  href="itemmaster"><i class="fa fa-circle-o" ></i>See Item Lists</a></li>
            <li id="items_input"><a href="iteminput"><i class="fa fa-circle-o"></i> Input New Item </a></li>
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

       <ol class='breadcrumb'> 
			<li><a href='#'><i class='fa fa-dashboard'></i> Home</a></li>
			<li class='active'>Master of Employees</li>
			<li class='active'>Input New Employee</li>
			</ol>
			
			<div class='box box-info'>
			 <div class='box-header with-border'>
				<h3 class='box-title'>Input New Employee</h3>
			</div>
			 <div class='box-body' id='form_input'>
			<table id='table1' class='table table-bordered table-striped'>
			 <thead>
			<tr>
			<form method='get' action='insertingp'>
			<table>
			<tr>
			<td>Nama Lengkap</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='text' name='peg_name' required></td>
			</tr>
			<tr>
			<td>Username</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='text' name='peg_user' required></td>
			</tr>
			<tr>
			<td>Password</td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='password' name='peg_pass' required></td>
			</tr>
			<td>Confirm Password </td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type='password' name='peg_cpass' required></td>
			</tr>
			<td>Golongan </td>
			<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <select name='peg_golongan'>
			<option>Manager </option>
			<option>Warehouse </option>
			</select></td>
			</tr>
			</table>
			<button class='btn btn-default'id='add'>Add Employee</button>
			</form>
			   </tbody>
			  </table>
			  </div>
			  <?php 
				if (count($errors) > 0)
				{
					echo "<br><div>";
					echo "<ul>";
					foreach($errors->all() as $error)
					{
						echo "<li id='err'>".$error."</li>";
					}
					echo "</ul>";
					echo "</div><br>";	
				}
			  ?>
			  </div>
			
			</div>
            </div>
            <!-- /.box-header -->
            
            <!-- /.box-body -->
          </div>
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
          
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <!--<b>Version</b> 5.5.5 -->
    </div>
    <strong>Copyright &copy; 2014-2017 <a href="https://adminlte.io">Hyper Mec Group</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
   
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
</body>
</html>
	