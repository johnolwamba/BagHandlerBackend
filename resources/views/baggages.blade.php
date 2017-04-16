<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>KQ-All Baggages</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

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

                        <li><a  href="{{ url('/allFlights') }}">All Flights</a></li>
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
                    <ul class="active" class="sub">
                        <li><a href="{{ url('/addBaggage') }}">Add Baggage</a></li>
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
            <h3><i class="fa fa-angle-right"></i> Baggage</h3>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> All baggage</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Flight No</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Passenger Name</th>
                                <th><i class="fa fa-bookmark"></i> Baggage Id</th>
                                <th><i class="fa fa-bookmark"></i> Date</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="allFlights.html#">KQ765</a></td>
                                <td class="hidden-phone"><a href="allPassengers.html#">Mary Atieno</td>
                                <td>MJ011 </td>
                                <td>5-5-2017 </td>
                                <td><span class="label label-info label-mini">Checked in</span></td>
                            </tr>
                            <tr>
                                <td><a href="allFlights.html#">KQ300</a></td>
                                <td class="hidden-phone"><a href="allPassengers.html#">James Ouma</td>
                                <td>NM44 </td>
                                <td>5-5-2017 </td>
                                <td><span class="label label-info label-mini">Checked in</span></td>
                            </tr>

                            <tr>
                                <td><a href="allFlights.html#">KQ300</a></td>
                                <td class="hidden-phone"><a href="allPassengers.html#">Mary Wanja</td>
                                <td>MN0046 </td>
                                <td>5-5-2017 </td>
                                <td><span class="label label-warning label-mini">Pending</span></td>
                            </tr>

                            <tr>
                                <td><a href="allFlights.html#">KQ300</a></td>
                                <td class="hidden-phone"><a href="allPassengers.html#">Patricia Wambui</td>
                                <td>MN0047 </td>
                                <td>5-5-2017 </td>
                                <td><span class="label label-info label-mini">Checked in</span></td>
                            </tr>

                            <tr>
                                <td><a href="allFlights.html#">KQ300</a></td>
                                <td class="hidden-phone"><a href="allPassengers.html#">Collins Wambugu</td>
                                <td>MN0048 </td>
                                <td>5-5-2017 </td>
                                <td><span class="label label-info label-mini">Checked in</span></td>
                            </tr>
                            <tr>
                                <td><a href="allFlights.html#">KQ300</a></td>
                                <td class="hidden-phone"><a href="allPassengers.html#">Denise Wako</td>
                                <td>MN021 </td>
                                <td>5-5-2017 </td>
                                <td><span class="label label-warning label-mini">Pending</span></td>
                            </tr>

                            <tr>
                                <td><a href="allFlights.html#">KQ501</a></td>
                                <td class="hidden-phone"><a href="allPassengers.html#">Anges Wanja</td>
                                <td>NL020 </td>
                                <td>5-5-2017 </td>
                                <td><span class="label label-info label-mini">Checked in</span></td>
                            </tr>



                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            KQ-BHS 2017
            <a href="allBaggages.html#" class="go-top">
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

<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
