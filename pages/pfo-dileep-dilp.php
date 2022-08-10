<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>Expendable Data Table - Sleek Admin Dashboard Template</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="../assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    
    
    
    
    
    
    
    
    <link href='../assets/plugins/data-tables/datatables.bootstrap4.min.css' rel='stylesheet'>
    
    <link href='../assets/plugins/data-tables/jquery.datatables.min.css' rel='stylesheet'>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="../assets/css/sleek.css" />
  
    <!-- FAVICON -->
    <link href="../assets/img/favicon.png" rel="shortcut icon" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/plugins/nprogress/nprogress.js"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

      <!-- Github Link -->
      <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
        <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
            </linearGradient>
          </defs>
          <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
        </svg>
        <i class="mdi mdi-github-circle"></i>
      </a>




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html" title="Sleek Dashboard">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33">
                  <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>

                <span class="brand-name text-truncate">Sleek Dashboard</span>
              </a>
            </div>

            <!-- begin sidebar scrollbar -->
            <div class="" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="has-sub active expand">
                  <a class="sidenav-item-link" href="pfo-dash-main.php" >
                    <i class="mdi mdi-home"></i>
                    <span class="nav-text">Home</span>
                  </a>

                  <!--ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="active">
                        <a class="sidenav-item-link" href="index.html">
                          <span class="nav-text">Ecommerce</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="analytics.html">
                          <span class="nav-text">Analytics</span>
                          <span class="badge badge-success">new</span>
                        </a>
                      </li>
                    </div>
                  </ul-->
                </li>

                <li class="has-sub">
                  <a class="sidenav-item-link" href="pfo-docutrack.php">
                    <i class="mdi mdi-email-mark-as-unread"></i>
                    <span class="nav-text">D(coming soon)</span> <!--b class="caret"></b-->
                  </a>
                  <!--ul class="collapse " id="components" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="pages/dash-approved-acp.php">
                          <span class="nav-text">UNDER ACP</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="pages/dash-approved-direct.php">
                          <span class="nav-text">DIRECT ADMINISTRATION</span>
                        </a>
                      </li>
                    </div>
                  </ul-->


                </li>

                <li class="has-sub">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                    aria-expanded="false" aria-controls="app">
                    <i class="mdi mdi-google-circles"></i>
                    <span class="nav-text">DILEEP</span> <b class="caret"></b>
                  </a>
                  
                  <ul class="collapse " id="app" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="pfo-dileep-dilp.php">
                          <span class="mdi mdi-file-document-box-multiple"></span><br>
                          <span class="nav-text">LIVELIHOOD</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="pfo-dileep-tupad.php">
                          <span class="mdi mdi-file-document-box-multiple"></span><br>
                          <span class="nav-text">TUPAD</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>

                <!-- <li class="section-title">
                  UI Elements
                </li> -->

                

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="pfo-dash-reports.php">
                    <i class="mdi mdi-graphql"></i>
                    <span class="nav-text">Reports</span> 
                  </a>
                </li>

                <li class="has-sub ">
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                    aria-expanded="false" aria-controls="forms">
                    <i class="mdi mdi-pin-outline"></i>
                    <span class="nav-text">Others</span> <b class="caret"></b>
                  </a>

                  <ul class="collapse " id="forms" data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      <li class="">
                        <a class="sidenav-item-link" href="pfo-dash-logs.php">
                          <span class="nav-text">Logs</span>
                        </a>
                      </li>

                      <li class="">
                        <a class="sidenav-item-link" href="pfo-dash-requests.php">
                          <span class="nav-text">Requests</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>




                <!-- <li class="section-title">
                  Pages
                </li> -->

                <!-- <li class="section-title">
                  Documentation
                </li> -->
              </ul>
            </div>
          </div>
        </aside>


          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">
          
          <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">

                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-exit-to-app mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="../assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">DOLE X FIELD OFFICE</span>
                    </button>
                  </li>
                </ul>
              </div>
            </nav>
          </header>

          
          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
            <div class="content">





				<div class="breadcrumb-wrapper">
					<h1>Tables</h1>
					
					
						<nav aria-label="breadcrumb">
						<ol class="breadcrumb p-0">
							<li class="breadcrumb-item">
							<a href="index.html">
								<span class="mdi mdi-home"></span>                
							</a>
							</li>
							<li class="breadcrumb-item">
							data-tables
							</li>
							<li class="breadcrumb-item" aria-current="page">expendable-data-table</li>
						</ol>
						</nav>

				</div>

				<div class="row">
					<div class="col-xl-4 col-sm-12">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">DOCUMENT TRACKING</h2>
                          <div class="chartjs-wrapper">
                          </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-md btn-primary" disabled>COMING SOON!</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">DILEEP - DILP REPORTS</h2>
                          <p></p>
                          <div class="chartjs-wrapper">
                          </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="pfo-dileep-dilp.php" class="btn btn-md btn-primary" >CLICK HERE TO PROCEED</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">DILEEP - TUPAD REPORTS</h2>
                          <p></p>
                          <div class="chartjs-wrapper">
                          </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="pfo-dileep-tupad.php" class="btn btn-md btn-primary" >CLICK HERE TO PROCEED</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">SYSTEM REPORTS</h2>
                          <p></p>
                          <div class="chartjs-wrapper">
                          </div>
                        </div>
                        <div class="card-footer text-right">
                            <a class="btn btn-md btn-primary" >CLICK HERE TO PROCEED</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">SYSTEM LOGS</h2>
                          <p></p>
                          <div class="chartjs-wrapper">
                          </div>
                        </div>
                        <div class="card-footer text-right">
                            <a class="btn btn-md btn-primary" >CLICK HERE TO PROCEED</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-sm-12">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">DILEEP - DILP</h2>
                          <p></p>
                          <div class="chartjs-wrapper">
                          </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-md btn-primary" disabled>COMING SOON!</button>
                        </div>
                      </div>
                    </div>

					<div class="col-12">
						<div class="card card-default">
							<div class="card-header card-header-border-bottom d-flex justify-content-between">
								<h2>Expendable Data Table</h2>

								<a href="https://datatables.net/examples/api/row_details.html" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
									<i class=" mdi mdi-link mr-1"></i> Docs
								</a>
							</div>

							<div class="card-body">
								<div class="expendable-data-table">
									<table id="expendable-data-table" class="table display nowrap" style="width:100%">
										<thead>
											<tr>
												<th></th>
												<th>First name</th>
												<th>Last name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
												<th>Extn.</th>
												<th>E-mail</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td class="details-control"></td>
												<td>Tiger</td>
												<td>Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>$320,800</td>
												<td>5421</td>
												<td>t.nixon@datatables.net</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="card card-default">
							<div class="card-header card-header-border-bottom d-flex justify-content-between">
								<h2>Expendable Data Table</h2>

								<a href="https://datatables.net/examples/api/row_details.html" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
									<i class=" mdi mdi-link mr-1"></i> Docs
								</a>
							</div>

							<div class="card-body">
								<div class="expendable-data-table">
									<table id="expendable-data-tableb" class="table display nowrap" style="width:100%">
										<thead>
											<tr>
												<th></th>
												<th>First name</th>
												<th>Last name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
												<th>Extn.</th>
												<th>E-mail</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td class="details-control"></td>
												<td>Tiger</td>
												<td>Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>$320,800</td>
												<td>5421</td>
												<td>t.nixon@datatables.net</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>





							

      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
    
    <!-- Footer -->
    <footer class="footer mt-auto">
      <div class="copyright bg-white">
        <p>
          Copyright &copy; <span id="copy-year"></span> a template by <a class="text-primary" href="https://themefisher.com" target="_blank">Themefisher</a>.
        </p>
      </div>
      <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
      </script>
    </footer>

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/plugins/simplebar/simplebar.min.js"></script>
 
    
    

    
    

    
    
    

    
    
    

    

    
    
    
    

    

    

    
    
    

    <script src='../assets/plugins/data-tables/jquery.datatables.min.js'></script>
    <script src='../assets/plugins/data-tables/datatables.bootstrap4.min.js'></script>

    

    <script src="../assets/js/sleek.js"></script>
  <link href="../assets/options/optionswitch.css" rel="stylesheet">
<script src="../assets/options/optionswitcher.js"></script>
</body>
</html>


<script>
  /* Formatting function for row details - modify as you need */
  function format () {
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
			'<tr>'+
				'<td>Full name:</td>'+
				'<td>Name...</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extension number:</td>'+
				'<td>123</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extra info:</td>'+
				'<td>And any further details here (images etc)...</td>'+
			'</tr>'+
    '</table>';
  }
 
  $(document).ready(function() {
    var table = $('#expendable-data-table').DataTable( {
      "className":      'details-control',
      "order": [[0, 'asc']],
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">'
    });

    // Add event listener for opening and closing details
    $('#expendable-data-table tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );
 
      if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
      }
      else {
        // Open this row
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
      }
    });
  });


  $(document).ready(function() {
    var table = $('#expendable-data-tableb').DataTable( {
      "className":      'details-control',
      "order": [[0, 'asc']],
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">'
    });

    // Add event listener for opening and closing details
    $('#expendable-data-tableb tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );
 
      if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
      }
      else {
        // Open this row
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
      }
    });
  });
</script>
