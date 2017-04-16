<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>KQ Baggage Tracking System</b></a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.html">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

    <aside>

        <div id="sidebar"  class="nav-collapse ">

            <!-- sidebar menu start-->

            <ul class="sidebar-menu" id="nav-accordion">



                <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>

                <h5 class="centered">Admin</h5>

                <li class="mt">

                    <a href="{{ url('/home') }}">

                        <i class="fa fa-dashboard"></i>

                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">

                    <a href="javascript:;" >

                        <i class="fa fa-tasks"></i>

                        <span>Flights</span>
                    </a>
                    <ul class="sub">

                        <li><a class="active" href="{{ url('/allFlights') }}">All Flights</a></li>
                    </ul>
                </li>

                <li class="sub-menu">

                    <a href="javascript:;" >

                        <i class="fa fa-tasks"></i>

                        <span>Passengers</span>
                    </a>
                    <ul class="sub">

                        <li><a  href="{{ url('/allPassengers') }}">All Passengers</a></li>
                    </ul>
                </li>

                <li class="sub-menu">

                    <a href="javascript:;" >

                        <i class="fa fa-th"></i>

                        <span>Check In</span>

                    </a>
                    <ul class="sub">
                        <li><a  href="{{ url('/addBaggage') }}">Add Baggage</a></li>
                    </ul>
                </li>


                <li class="sub-menu">

                    <a href="javascript:;" >

                        <i class="fa fa-th"></i>

                        <span>Baggage</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{ url('/allBaggages') }}">All Baggages</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-envelope"></i>
                        <span>Notifications</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{ url('/allNotifications') }}">Notifications</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="users.html">View</a></li>
                    </ul>
                </li>



            </ul>

            <!-- sidebar menu end-->

        </div>

    </aside>

    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> All Flights</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i> Scheduled Flights</h4>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Flight No</th>
                                    <th>Flight Name</th>
                                    <th class="numeric">Date</th>
                                    <th class="numeric">Departure Time</th>
                                    <th class="numeric">Arrival Time</th>
                                    <th class="numeric">Passengers</th>
                                    <th class="numeric">Baggage</th>
                                    <th class="numeric">Captain</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>KQ765</td>
                                    <td>Johannesburg to Nairobi</td>
                                    <td class="numeric">14-4-2017</td>
                                    <td class="numeric">1000</td>
                                    <td class="numeric">1950</td>
                                    <td class="numeric">100</td>
                                    <td class="numeric">95</td>
                                    <td class="numeric">Cpt Kamau</td>

                                </tr>
                                <tr>
                                    <td>KQ4140</td>
                                    <td>Nairobi to Amsterdam</td>
                                    <td class="numeric">15-4-2017</td>
                                    <td class="numeric">0900</td>
                                    <td class="numeric">1700</td>
                                    <td class="numeric">123</td>
                                    <td class="numeric">150</td>
                                    <td class="numeric">Cpt Otieno</td>

                                </tr>
                                <tr>
                                    <td>KQ301</td>
                                    <td>Mombasa to Nairobi</td>
                                    <td class="numeric">18-4-2017</td>
                                    <td class="numeric">1000</td>
                                    <td class="numeric">1050</td>
                                    <td class="numeric">100</td>
                                    <td class="numeric">95</td>
                                    <td class="numeric">Cpt Kamau</td>

                                </tr>
                                <tr>
                                    <td>KQ501</td>
                                    <td>Nairobi to Lagos</td>
                                    <td class="numeric">8-5-2017</td>
                                    <td class="numeric">2200</td>
                                    <td class="numeric">1050</td>
                                    <td class="numeric">70</td>
                                    <td class="numeric">95</td>
                                    <td class="numeric">Cpt Barisa</td>

                                </tr>
                                <tr>
                                    <td>KQ404</td>
                                    <td>Nairobi to Rwanda</td>
                                    <td class="numeric">8-5-2017</td>
                                    <td class="numeric">1000</td>
                                    <td class="numeric">1350</td>
                                    <td class="numeric">90</td>
                                    <td class="numeric">78</td>
                                    <td class="numeric">Cpt Shawal</td>

                                </tr>
                                <tr>
                                    <td>KQ300</td>
                                    <td>Nairobi to Mombasa</td>
                                    <td class="numeric">8-5-2017</td>
                                    <td class="numeric">1500</td>
                                    <td class="numeric">1550</td>
                                    <td class="numeric">100</td>
                                    <td class="numeric">97</td>
                                    <td class="numeric">Cpt Kamungu</td>

                                </tr>
                                <tr>
                                    <td>KQ321</td>
                                    <td>Nairobi to Addis Ababa</td>
                                    <td class="numeric">10-5-2017</td>
                                    <td class="numeric">0800</td>
                                    <td class="numeric">1140</td>
                                    <td class="numeric">56</td>
                                    <td class="numeric">60</td>
                                    <td class="numeric">Cpt Kingi</td>

                                </tr>
                                <tr>
                                    <td>KQ301</td>
                                    <td>Mombasa to Nairobi</td>
                                    <td class="numeric">10-5-2017</td>
                                    <td class="numeric">2100</td>
                                    <td class="numeric">2150</td>
                                    <td class="numeric">100</td>
                                    <td class="numeric">95</td>
                                    <td class="numeric">Cpt Kamau</td>

                                </tr>
                                <tr>
                                    <td>KQ321</td>
                                    <td>Nairobi to Addis Ababa</td>
                                    <td class="numeric">13-5-2017</td>
                                    <td class="numeric">0800</td>
                                    <td class="numeric">1140</td>
                                    <td class="numeric">56</td>
                                    <td class="numeric">60</td>
                                    <td class="numeric">Cpt Kingi</td>

                                </tr>
                                <tr>
                                    <td>KQ301</td>
                                    <td>Mombasa to Nairobi</td>
                                    <td class="numeric">8-4-2017</td>
                                    <td class="numeric">1000</td>
                                    <td class="numeric">-1050</td>
                                    <td class="numeric">100</td>
                                    <td class="numeric">95</td>
                                    <td class="numeric">Cpt Kamau</td>

                                </tr>
                                <tr>
                                    <td>KQ765</td>
                                    <td>Johannesburg to Nairobi</td>
                                    <td class="numeric">14-4-2017</td>
                                    <td class="numeric">1000</td>
                                    <td class="numeric">1950</td>
                                    <td class="numeric">100</td>
                                    <td class="numeric">95</td>
                                    <td class="numeric">Cpt Kamau</td>

                                </tr>
                                </tbody>
                            </table>
                        </section>
                    </div><!-- /content-panel -->
                </div><!-- /col-lg-4 -->
            </div><!-- /row -->



        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            KQ-BHS 2017
            <a href="allFlights.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<!--script for this page-->


</body>
</html>

