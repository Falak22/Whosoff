<?php 
  session_start();
  //echo $_SESSION['name'];
  include('db_connection.php');
  include('functions.php');
  include('tables.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LMS | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include_once('includes/header.php');?>
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
                        <p>Login Name</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <!--form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>

                    <li>
                        <a href="pages/mailbox/mailbox.html">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                        </a>
                    </li>




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
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-2 col-xs-4">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <li>
                                    <h3>CL</h3>
                                </li>
                                <?php                     
                                    $query = "SELECT CL AS cl_count 
                                              FROM leave_entitle 
                                             WHERE status = 1"; 
                                             
                                          $query_run = db_one($query);
                                         echo  $query_run['cl_count'];
                                           
                                                ?>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="Checking.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>

                    </div>

                    <!-- ./col -->
                    <div class="col-lg-2 col-xs-4">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>DL<sup style="font-size: 20px"></sup></h3>
                                <?php
                                                               
                                            $query = "SELECT DL AS dl_count 
                                              FROM leave_entitle 
                                             WHERE status = 1"; 
                                             
                                          $query_run = db_one($query);
                                         echo  $query_run['dl_count'];
                                                                                                    
                                         ?>

                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="Checking.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xs-4">
                        <!-- small box -->
                        <div class="small-box bg-navy">
                            <div class="inner">
                                <h3>EL<sup style="font-size: 20px"></sup></h3>
                                <?php
                                                               
                                 $query = "SELECT EL AS el_count 
                                              FROM leave_entitle 
                                             WHERE status = 1"; 
                                             
                                          $query_run = db_one($query);
                                         echo  $query_run['el_count'];
                                                                                                    
                                    ?>

                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="Checking.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-2 col-xs-4">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>ML</h3>
                                <?php
                                                               
                                         $query = "SELECT ML AS ml_count 
                                                FROM leave_entitle 
                                               WHERE status = 1"; 
                                                              
                                          $query_run = db_one($query);
                                           echo  $query_run['ml_count'];
                                                                      
                               ?>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="Checking.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- ./col -->
                    <div class="col-lg-2 col-xs-4">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>RH</h3>
                                <?php
                                                               
                                                               $query = "SELECT RH AS rh_count 
                                                               FROM leave_entitle 
                                                              WHERE status = 1"; 
                                                              
                                                           $query_run = db_one($query);
                                                          echo  $query_run['rh_count'];
                                                                      
                               ?>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="Checking.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- TO DO List -->
                        <div class="box box-primary">
                            <div class="box-header">
                                <i class="ion ion-clipboard"></i>

                                <h3 class="box-title">Employee List</h3>


                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>Emp Id</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                      $employee_query ="SELECT * FROM employee_master WHERE status=-1";
                      $employee_list = db_all($employee_query);
                      $employee_str = "";
                      $i = 1;
                      foreach( $employee_list AS $emp_row){
                          $employee_str .="<tr>
                            <td>".$i."</td>
                            <td>".$emp_row['emp_id']."</td>
                            <td>".$emp_row['name']."</td>
                            <td>".$emp_row['dept_id']."</td>
                            <td>".$emp_row['design_id']."</td>
                            <td>".$emp_row['created_at']."</td>
                            <td>
                            <div class='d flex-justify-content-center'>
                              <button class='btn btn-success'  data-toggle='modal' data-target='#approval_modal".$i."'>Approve</button>
                              <button class='btn btn-danger'  data-toggle='modal' data-target='#decline_modal".$i."'>Decline</button>
                              </div>

                              <div class='modal' id='approval_modal".$i."'>
                                <div class='modal-dialog'>
                                  <div class='modal-content'>
                                    <div class='modal-header'>
                                      <button type='button class='close' data-dismiss='modal aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span></button>
                                      <h4 class='modal-title'>Approve / Reject Employee</h4>
                                    </div>
                                    <div class='modal-body'>
                                     <h3> Are you sure ? You want to approve <b>".$emp_row['name']."</b></h3>
                                     <input type='hidden' class='emp_key' value='".$emp_row['id']."' />
                                    </div>
                                    <div class='modal-footer'>
                                      <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Close</button>
                                      <button type='button' id='approval_btn' class='btn btn-primary'>Approve</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <div class='modal' id='decline_modal".$i."'>
                                <div class='modal-dialog'>
                                  <div class='modal-content'>
                                    <div class='modal-header'>
                                      <button type='button class='close' data-dismiss='modal aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span></button>
                                      <h4 class='modal-title'>Approve / Reject Employee</h4>
                                    </div>
                                    <div class='modal-body'>
                                     <h3> Are you sure ? You want to decline <b>".$emp_row['name']."<b></h3>
                                     <input type='hidden' class='emp_key' value='".$emp_row['id']."' />
                                    </div>
                                    <div class='modal-footer'>
                                      <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Close</button>
                                      <button type='button' id='decline_btn' class='btn btn-danger'>Decline</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->
                            </td>

                          </tr>";
                          $i++;
                      }

                      echo $employee_str;
                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->

                        </div>
                        <!-- /.box -->

                    </section>
                    <!-- /.Left col -->
                    <!-- right col -->
                    <section class="col-lg-5 connectedSortable">


                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.5
            </div>
            <strong>Copyright &copy; 2022 <a href="http://eyesec.in">LMS- EyeSec CyberSecurity Solutions Pvt.
                    Ltd</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
    $(document).ready(function() {
        //For approval of NEW EMployees registered

        $(document).on('click', '#approval_btn', function() {
            //alert('Cliked');
            var p_key = $(this).parent().prev().find('.emp_key').val();

            //alert(p_key);
            $.post('update_employee_status.php', {
                    data: p_key
                },
                function(data, status) {
                    //alert(data);
                    $('.modal-body').html(data);
                    setTimeout(function() {
                        window.location.reload();
                    }, 3000);

                });
        });
        $(document).on('click', '#decline_btn', function() {
            //alert('Cliked');
            var p_key = $(this).parent().prev().find('.emp_key').val();

            //alert(p_key);
            $.post('decline_employee_status.php', {
                    data: p_key
                },
                function(data, status) {
                    //alert(data);
                    $('.modal-body').html(data);
                    setTimeout(function() {
                        window.location.reload();
                    }, 3000);

                });
        });
    });
    </script>
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>