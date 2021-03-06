<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Helpdesk View</title>

    <!-- Favicons-->
    <link rel="icon" href="{{asset("materialize/images/favicon/favicon-32x32.png")}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{asset("materialize/images/favicon/apple-touch-icon-152x152.png")}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->

    
   <!-- CORE CSS-->
    <link href="{{asset("materialize/css/materialize.css")}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset("materialize/css/style.css")}}" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="{{asset("materialize/css/prism.css")}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset("materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css")}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset("materialize/js/plugins/data-tables/css/jquery.dataTables.min.css")}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset("materialize/js/plugins/jvectormap/jquery-jvectormap.css")}}" type="text/css" rel="stylesheet" media="screen,projection">
  

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="{{ url('/dashboard') }}"  class="brand-logo darken-1"><img src="{{asset("materialize/images/Untitled-1.png")}}" alt="materialize logo" style="height:34px; width:auto"> <span style="font-size:24pt"><b>elpdesk</b></span></a> <span class="logo-text">Materialize</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>
                        <!-- Dropdown Trigger -->                        
<!--
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
-->
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="{{asset("materialize/images/admin-avatar.jpg")}}" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="{{ url('/logout') }}"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">MSOC <i class="mdi-navigation-arrow-drop-down right" ></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="{{ url('/dashboard') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold"><a href="{{ url('/pic') }}" class="waves-effect waves-cyan"><i class="mdi-social-person-outline"></i> PIC </a>
                    </li>
                    <li class="bold"><a href="{{ url('/regions') }}" class="waves-effect waves-cyan"><i class="mdi-action-language"></i> Regions </a>
                    </li>
                    <li class="bold"><a href="{{ url('/report') }}" class="waves-effect waves-cyan"><i class="mdi-editor-insert-drive-file"></i> Report </a>
                    </li>
                    <li class="bold"><a href="{{ url('/problem') }}" class="waves-effect waves-cyan"><i class="mdi-alert-error"></i> Problem </a>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="bold"><a href="{{ url('/statistic') }}" class="waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Statistic </a>
                    </li>
                    </li>
                    <li class="bold"><a href="{{ url('/history_home') }}" class="waves-effect waves-cyan"><i class="mdi-action-history"></i> History</a>
                    </li>
                    <li class="bold"><a href="{{ url('/upload') }}" class="waves-effect waves-cyan"><i class="mdi-file-file-upload "></i> Upload</a>
                    </li>
                
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
 
            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    @yield('content')            
                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                    </li>
                </ul>
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2016 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">Materialize</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://notif-msoc.esy.es/">Materialize</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- ================================================
        Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{asset("materialize/js/jquery-1.11.2.min.js")}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{asset("materialize/js/materialize.min.js")}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{asset("materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>

    <!--data-tables -->
    <script type="text/javascript" src="{{asset("materialize/js/plugins/data-tables/js/jquery.dataTables.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("materialize/js/plugins/data-tables/data-tables-script.js")}}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{{asset("materialize/js/plugins/sparkline/jquery.sparkline.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("materialize/js/plugins/sparkline/sparkline-script.js")}}"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="{{asset("materialize/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("materialize/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
    <script type="text/javascript" src="{{asset("materialize/js/plugins/jvectormap/vectormap-script.js")}}"></script>
    
   
    
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
<!--    <script type="text/javascript" src="{{asset("materialize/js/plugins.js")}}"></script>-->
        </body>

</html>