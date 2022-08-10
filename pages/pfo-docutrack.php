<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>Dashboard - DOLE X - Document Monitoring System</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="../assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="../assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    <link href='../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='../assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    
    
    <link href='../assets/plugins/toastr/toastr.min.css' rel='stylesheet'>
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="../assets/css/sleek.css" />
  
    <!-- FAVICON -->
    <link href="../assets/img/icon-main.png" rel="shortcut icon" />
  
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

    <div id="toaster"></div>

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
              <a href="pfo-dash-main.php" title="Sleek Dashboard">
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

                <span class="brand-name text-truncate">DOLEX - DMS</span>
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
                    <div class="error-wrapper rounded border bg-white px-5">
                        <div class="row justify-content-center align-items-center text-center">
                            <div class="col-lg-12">
                                <h1 class="text-primary bold error-title">404</h1>
                                <p class="pt-4 pb-5 error-subtitle">Looks like something went wrong.</p>
                                <a href="pfo-dash-main.php" class="btn btn-primary btn-pill">Back to Home</a>
                            </div>
                            
                            <div class="col-lg-12 pt-5 pt-xl-0 text-center">
                                <img src="../assets/img/lightenning.png" class="img-fluid" alt="Error Page Image">
                            </div>
                        </div>
                    </div>
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
 
    <script src='../assets/plugins/charts/Chart.min.js'></script>
    <script src='../assets/js/chart.js'></script>

    
    

    <script src='../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='../assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='../assets/js/vector-map.js'></script>

    <script src='../assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='../assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='../assets/js/date-range.js'></script>

    

    
    
    
    

    <script src='../assets/plugins/toastr/toastr.min.js'></script>

    

    
    
    

    
    

    

    <script src="../assets/js/sleek.js"></script>
  <link href="../assets/options/optionswitch.css" rel="stylesheet">
<script src="../assets/options/optionswitcher.js"></script>
</body>
</html>

