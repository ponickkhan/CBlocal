
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CB Project">
  <meta name="author" content="Md.Rafiuzzaman Khan">
  <title>CB local</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="examples/dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Database</span>
              </a>
            </li>

              <li class="nav-item">
                  <a class="nav-link" href="profile.html">
                      <i class="ni ni-single-02 text-yellow"></i>
                      <span class="nav-link-text">Users</span>
                  </a>
              </li>

          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search CIF Number" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/profile.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Md.Nahiduzzaman Khan</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Hello!</h6>
                </div>

                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>

                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">


        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">

       <div class="col-xl-12 ">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">New Entry </h3>
                </div>

                <div class="col-4 text-right">
                    {{ Form::open(array('url' => 'information/save' , 'method' => 'post')) }}
                    <?php  echo Form::submit('Save' , ['class' => 'btn btn btn-primary', 'name' => 'submitbutton', 'value' => 'save']); ?>

                </div>
              </div>
            </div>
            <div class="card-body">








                <h6 class="heading-small text-muted mb-4">Customer information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="cif-id">CIF ID</label>
                        <input type="text" id="cif-id" class="form-control" placeholder="CIF ID" value="">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="operative-account">Operative Account</label>
                        <input type="text" id="operative-account" class="form-control" placeholder="Operative Account">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Name" value="Full Name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="fathers-name">Fathers Name</label>
                        <input type="text" id="fathers-name" class="form-control" placeholder="Fathers Name " value="">
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="pl-lg-4">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="mothers-name">Mothers Name</label>
                                  <input type="text" id="mothers-name" class="form-control" placeholder="Mothers Name" value="">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="spouse-name">Spouse Name</label>
                                  <input type="text" id="spouse-name" class="form-control" placeholder="Spouse Name">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="nid-number">NID Number</label>
                                  <input type="text" id="nid-number" class="form-control" placeholder="NID Number" value="">
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="tin-number">TIN Number</label>
                                  <input type="text" id="tin-number" class="form-control" placeholder="TIN Number" value="">
                              </div>
                          </div>
                      </div>
                  </div>


                  <div class="pl-lg-4">
                      <div class="row">
                          <div class="col-lg-6">

                              <div class="form-group">
                                  <label class="form-control-label" for="dob">Date Of Birth</label>

                                  <div class="input-group input-group-alternative">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                      </div>
                                      <input id="dob" class="form-control datepicker" placeholder="Select date" type="text" value="dd/mm/yyyy">
                                  </div>
                              </div>


                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label class="form-control-label" for="district-dob">District Of Birth</label>

                                  <select class="form-control" id="district-dob">
                                      <option disabled selected>Select District</option>
                                      <option value="Barguna">Barguna</option>
                                      < option value="Barishal">Barishal</option>
                                      <option value="Bhola">Bhola</option>
                                      <option value="Jhalokati">Jhalokati</option>
                                      <option value="Patuakhali">Patuakhali</option>
                                      <option value="Pirojpur">Pirojpur</option>
                                      <option value="Bandarban">Bandarban</option>
                                      <option value="Chandpur">Chandpur</option>
                                      <option value="Chattogram">Chattogram</option>
                                      <option value="Cumilla">Cumilla</option>
                                      <option value="Cox\'s Bazar">Cox\'s Bazar</option>
                                      <option value="Feni">Feni</option>
                                      <option value="Khagrachhari">Khagrachhari</option>
                                      <option value="Noakhali">Noakhali</option>
                                      <option value="Rangamati">Rangamati</option>
                                      <option value="Dhaka">Dhaka</option>
                                      <option value="Faridpur">Faridpur</option>
                                      <option value="Gazipur">Gazipur</option>
                                      <option value="Gopalganj">Gopalganj</option>
                                      <option value="Kishoreganj">Kishoreganj</option>
                                      <option value="Madaripur">Madaripur</option>
                                      <option value="Manikganj">Manikganj</option>
                                      <option value="Munshiganj">Munshiganj</option>
                                      <option value="Narayanganj">Narayanganj</option>
                                      <option value="Narsingdi">Narsingdi</option>
                                      <option value="Rajbari">Rajbari</option>
                                      <option value="Shariatpur">Shariatpur</option>
                                      <option value="Tangail">Tangail</option>

                                  </select>
                              </div>
                          </div>
                      </div>

                  </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="parmanant-address">Parmenant Address</label>
                        <input id="parmanant-address" class="form-control" placeholder="Parmenant Address" value="" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="present-address">Present Address</label>
                        <input type="text" id="present-address" class="form-control" placeholder="Present Address" value="">
                      </div>
                    </div>

                  </div>
                </div>
                <hr class="my-4">

                  <!-- Account -->
                  <h6 class="heading-small text-muted mb-4">Account information</h6>
                  <div class="pl-lg-4">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-address">Branch name</label>
                                  <input id="input-address" class="form-control" placeholder="Branch Name" value="" type="text">
                              </div>
                          </div>

                          <div class="col-md-8">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-address">Loan Reference Number</label>
                                  <input id="input-address" class="form-control" placeholder="1234567891000000" value="" type="text">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-city">Nature of Advance</label>
                                  <input type="text" id="input-city" class="form-control" placeholder="Nature of Advance" value="">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Scheme name</label>
                                  <input type="text" id="input-country" class="form-control" placeholder="Scheme name" value="">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Sanction date</label>
                                  <input type="text" id="input-postal-code" class="form-control" placeholder="Sanction date ">
                              </div>
                          </div>
                      </div>


                      <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-city">Disbursement date</label>
                                  <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">CIB Date</label>
                                  <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">CIB Charge Amount</label>
                                  <input type="text" id="input-postal-code" class="form-control" placeholder="Postal code">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-city">Sanction amount</label>
                                  <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Disbursement Amount</label>
                                  <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Interest rate</label>
                                  <input type="text" id="input-postal-code" class="form-control" placeholder="Postal code">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-city">Takeover flag</label>
                                  <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Takeover Amount</label>
                                  <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Restructuring Flag</label>
                                  <input type="text" id="input-postal-code" class="form-control" placeholder="Postal code">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-city">Restructuring Date</label>
                                  <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Downpayment</label>
                                  <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Documentation</label>
                                  <input type="text" id="input-postal-code" class="form-control" placeholder="Postal code">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-8">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-city">File Status</label>
                                  <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                              </div>
                          </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-country">Status date</label>
                                  <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                              </div>
                          </div>

                      </div>


                  </div>
                  <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Other Information</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Remarks</label>
                    <textarea rows="4" class="form-control" placeholder="A few words for Remarks ..."> </textarea>
                  </div>
                </div>
                {{ Form::close() }}
            </div>
          </div>
        </div>



      </div>





      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 & Developed by<a href="#" class="font-weight-bold ml-1" target="_blank">Ponick</a>
            </div>
          </div>

        </div>
      </footer>
    </div>


  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
