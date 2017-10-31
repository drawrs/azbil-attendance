<!--
Author URL: localhost:8080/dashboard
Create : IT Development Nano
Versi : management system
-->


<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
          <style>
            .counter {
               position: relative;
                height: 160px;
                width: 160px;
                display: inline-block;
                border: 3px #222 solid;
                border-radius: 50%;
                text-align: center;

            }
            .counter span {
               position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                font-size: 5em;
                right: 0;
                /* font-weight: bold; */
                line-height: 150px;
                text-align: center;
            }
            #data-finger {
              display: none;
            }
            #data-no-finger {
              display: none;
            }
            #data-late {
              display: none;display: none;
            }
            #data-ontime {
              display: none;
            }
          </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
      <a href="index2.html" class="logo">
        <span class="logo-mini"><b>azbil</b></span>
          <span class="logo-lg"><b>Dashboard</b></span>
      </a>

    <!-- Header Navbar: -->
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
              <ul class="dropdown-menu">
                <li class="header">
                </li>
              <li class="footer"></li>
            </ul>
          </li>

    <!-- User Account:  -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="dist/img/logo.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">Azbil Berca Indonesia</span>
            </a>
              <ul class="dropdown-menu">
            <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/logo.jpg" class="img-circle" alt="User Image">
                    <li class="user-footer">
                      <div class="pull-right">
                        <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>




  <!-- Left side column, logo and sidebar -->
  <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Azbil Berca Indonesia</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: and left sidebar menu -->
        <ul class="sidebar-menu">
        <li class="header"><center>MENU</center></li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
      </li>
    </li>
      </li>
      <li class="treeview">
          <a href="pages/sbu/ias.php">
            <i class="fa fa-files-o"></i>
            <span>Sales</span>
          <i class="fa fa-angle-left pull-right"></i>
          </a>
            <ul class="treeview-menu">
            <li><a href="pages/sbu/ias.php"><i class="fa fa-circle-o"></i>IAS</a></li>
            <li><a href="pages/sbu/iap.php"><i class="fa fa-circle-o"></i>IAP</a></li>
            <li><a href="pages/sbu/cp.php"><i class="fa fa-circle-o"></i>CP</a></li>
            <li><a href="pages/sbu/ccc.php"><i class="fa fa-circle-o"></i>CCC</a></li>
          </ul>
        </li>
        <li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>SALES</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/sales/sales_ias.php"><i class="fa fa-circle-o"></i> Sales IAS</a></li>
            <li><a href="pages/sales/sales_iap.php"><i class="fa fa-circle-o"></i> Sales IAP</a></li>
            <li><a href="pages/sales/sales_cp.php"><i class="fa fa-circle-o"></i> Sales CP </a></li>
            <li><a href="pages/sales/sales_ccc.php"><i class="fa fa-circle-o"></i>CCC</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>ENGINEERING</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/engineering/project.php"><i class="fa fa-circle-o"></i>Project Schedule</a></li>
            <li><a href="pages/engineering/manpower.php"><i class="fa fa-circle-o"></i>Man Power</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="download">
            <i class="fa fa-files-o"></i>
            <span>LEGAL DOCUMENT</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/document/download.php"><i class="fa fa-circle-o"></i>download</a></li>
          </ul>
        </li>
      </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
<!--halaman navigasi menu-->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <!--membuat halaman content-->
      <div class="row">
        <div class="col-md-12 no-padding">
          <div class="col-md-3">
            <button class="btn btn-info btn-block">Finger</button>
            <br>
            <div style="text-align: center;">
              <div class="counter" style="border-color : #31c1ef">
                <span>10</span>
              </div>
            </div>
            <br>
            <div id="bar-chart" style="height: 300px;"></div>
            <button class="btn btn-block btn-default" id="btn-finger">
              Detail Data Finger  
            </button>
          </div>
          <div class="col-md-3">
            <button class="btn btn-danger btn-block">No Finger</button>
            <br>
            <div style="text-align: center;">
              <div class="counter">
                <span>10</span>
              </div>
            </div>

            <br>
            <div id="bar-chart2" style="height: 300px;"></div>
            <button class="btn btn-block btn-default" id="btn-no-finger">
              Detail Data No Finger  
            </button>
          </div>
          <div class="col-md-3">
            <button class="btn btn-warning btn-block">Late Time</button>
            <br>
            <div style="text-align: center;">
              <div class="counter" style="border-color: #f39d2d">
                <span>10</span>
              </div>
            </div>
            <br>
            <div id="bar-chart3" style="height: 300px;"></div>
            <button class="btn btn-block btn-default" id="btn-late">
              Detail Data Late Time  
            </button>
          </div>
          <div class="col-md-3">
            <button class="btn btn-success btn-block">On Time</button>
            <br>
            <div style="text-align: center;">
              <div class="counter" style="border-color: #49a75b">
                <span>10</span>
              </div>
            </div>
            <br>
            <div id="bar-chart4" style="height: 300px;"></div>
            <button class="btn btn-block btn-default" id="btn-ontime">
              Detail Data On Time  
            </button>
          </div>  
      </div>
      </div>
    </section>
    <div class="container">
      <div class="col-md-11">
        <div class="row" >
        <!-- BOX SECTION -->
          <div class="box box-info" id="data-finger">
            <div class="box-header with-border">
              <h3 class="box-title">Data Finger</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <!-- DATA SECTION -->
              <table class="table table-bordered table-responsive" >
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </tbody>
              </table>
              <!-- END DATA SECTION -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- END BOX SECTION -->
          <!-- BOX SECTION -->
          <div class="box box-danger" id="data-no-finger">
            <div class="box-header with-border">
              <h3 class="box-title">Data No Finger</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- DATA SECTION -->
              <table class="table table-bordered table-responsive">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </tbody>
              </table>
              <!-- END DATA SECTION -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- END BOX SECTION -->
          <!-- BOX SECTION -->
          <div class="box box-warning"  id="data-late">
            <div class="box-header with-border">
              <h3 class="box-title">Data Late Time</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- DATA SECTION -->
              <table class="table table-bordered table-responsive">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </tbody>
              </table>
              <!-- END DATA SECTION -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- END BOX SECTION -->
          <!-- BOX SECTION -->
          <div class="box box-success"  id="data-ontime">
            <div class="box-header with-border">
              <h3 class="box-title">Data On Time</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- DATA SECTION -->
              <table class="table table-bordered table-responsive">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>Cron job running</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-green">90%</span></td>
                </tr>
              </tbody>
              </table>
              <!-- END DATA SECTION -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- END BOX SECTION -->
        </div>
      </div>
    </div>
  </div>

    <!--membuat flow chart-->

    <footer class="main-footer">
      <center>copyright 2017 www.azbil.com</center>
    </footer>


<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="plugins/flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="plugins/flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="plugins/flot/jquery.flot.categories.js"></script>
<script>
  $(function () {
     var bar_data = {
      data : [['1', 10], ['2', 8], ['3', 4], ['4', 13]],
      color: '#3c8dbc'
    }
    var bar_data_late = {
      data : [['1', 11], ['2', 6], ['3', 21], ['4', 9]],
      color: '#3c8dbc'
    }
    var bar_data_ontime = {
      data : [['1', 9], ['2', 15], ['3', 8], ['4', 19]],
      color: '#3c8dbc'
    }
    var bar_data_nofinger = {
      data : [['1', 21], ['2', 7], ['3', 14], ['4', 12]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 10,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    $.plot('#bar-chart2', [bar_data_nofinger], {
      grid  : {
        borderWidth: 10,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        color: '#dc4c3a',
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center',
          fillColor : '#dc4c3a',
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    $.plot('#bar-chart3', [bar_data_late], {
      grid  : {
        borderWidth: 10,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        color: '#dc4c3a',
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center',
          fillColor : "#f39d2d"
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      },
      color : ["#dc4c3a"]
    })
    $.plot('#bar-chart4', [bar_data_ontime], {
      grid  : {
        borderWidth: 10,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center',
          fillColor : "#49a75b"
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    // END CHARTS
    $('#btn-finger').click(function(event) {
      /* Act on the event */
      $('#data-finger').show('fast', function() {
        
      });
      ////////////////////////////
      $('#data-no-finger').hide('fast', function() {
        
      });
      $('#data-late').hide('fast', function() {
        
      });
      $('#data-ontime').hide('fast', function() {
        
      });

    });
    $('#btn-no-finger').click(function(event) {
      /* Act on the event */
      $('#data-no-finger').show('fast', function() {
        
      });
      ////////////////////////////
      $('#data-finger').hide('fast', function() {
        
      });
      $('#data-late').hide('fast', function() {
        
      });
      $('#data-ontime').hide('fast', function() {
        
      });
    });
    $('#btn-late').click(function(event) {
      /* Act on the event */
      $('#data-late').show('fast', function() {
        
      });
      ////////////////////////////
      $('#data-finger').hide('fast', function() {
        
      });
      $('#data-no-finger').hide('fast', function() {
        
      });
      $('#data-ontime').hide('fast', function() {
        
      });
    });
    $('#btn-ontime').click(function(event) {
      /* Act on the event */
      $('#data-ontime').show('fast', function() {
        
      });
      ////////////////////////////
      $('#data-finger').hide('fast', function() {
        
      });
      $('#data-no-finger').hide('fast', function() {
        
      });
      $('#data-late').hide('fast', function() {
        
      });
    });

  })
</script>
</body>
</html>
