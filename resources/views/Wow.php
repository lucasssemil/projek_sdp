
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hyper Mec | Administrator</title>
  {!! Charts::assets() !!}
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
#searchdata{
	padding:7px 100px 7px 7px;
	border-radius:5px 0 0 5px;
	border:1px white solid;
	background-color:gray;
	color:white;
}

#search-btn{
	border-radius:0 5px 5px 0px;
	margin-left:-5px;
	margin-top:-3px;
}

#brefresh{
	text-align:right;
	margin-right:10px;
	margin-top:10px;
}
</style>
<script type="text/javascript">		

</script>
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.html" class="logo">
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
        <li class="active treeview menu-open">
          <a href="/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Master of Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li id="employ_master"><a href="employmaster"><i class="fa fa-circle-o"></i> See Employee Data</a></li>
            <li id="employ_input"><a href="employinput"><i class="fa fa-circle-o"></i> Input New Employee </a></li>
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
			<li id="items_master"><a href="itemmaster"><i class="fa fa-circle-o"></i> See Item Lists</a></li>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <!--<section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">69<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">00,001</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">-760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">-3,402</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success" id="main_report">
            <div class="box-header with-border">
              <h3 class="box-title">Visitors Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-9 col-sm-8">
                  <div class="pad">
                    <!-- Map	 will be created here -->
                    <div id="world-map-markers" style="height: 325px;"></div>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
        
             

          <!-- TABLE: LATEST ORDERS -->
				<div class='box box-info'>
				
				<div class='box-header with-border'>
				<h3 class='box-title'>Item Lists</h3>
				<div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
				</div>
				
				
				
				<?php
				echo " <div class='box-body'>";
				echo "<table id='table1' class='table table-bordered table-striped'>";
                echo " <thead>";
                echo "<tr>";
                echo " <th>ID Barang</th>";
                echo " <th>Nama Barang</th>";
                echo "<th>Harga Barang</th>";
                echo "<th>Stok Toko</th>";
                echo "<th>Stok Gudang</th>";
				echo "<th>Status Barang</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
              
						foreach($data as $value)
						{
							
							echo "<tr>";
							echo "<td>".$value->id_barang."</td>";
							echo "<td>".$value->barang_name."</td>";
							echo "<td> Rp.".number_format($value->barang_harga,2,",",".")."</td>";
							echo "<td>".$value->barang_jumlah."</td>";
							echo "<td>".$value->gudang_jumlah."</td>";
							echo "<td>".$value->barang_status."</td>";

						}
						echo "</table><br>";
			echo "</tbody> ";
			echo "</table> ";
			echo "</div>   ";
			?>
			
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
	