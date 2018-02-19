<!DOCTYPE html>
<html>
<head>
	<title><?=Config::get('site_name')?></title>
	 
	 <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="/css/loading_image.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
</head>
<body>
    <div class="se-pre-con"></div>
    <!-- Ends -->
    
    

  
   <?php 
/*
   if(App::getRouter()->controller == 'pages') { ?><div>pages controller is active</div><?php }
//you can use this for checking active links.eg.making an active tab.
*/
  
    ?>

  

        <!-- Navigation -->

 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">HCI - Database</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>

                <!--messages-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/user/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="/user/Settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/user/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if(App::getRouter()->controller == 'pages') { ?> class="active" <?php } ?>>
                        <a href="/pages/index"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li <?php if(App::getRouter()->action == 'member') { ?> class="active" <?php } ?> >
                         <a href="/addnew/member"><i class="fa fa-fw fa-bar-chart-o"></i> Add Member</a>
                    </li>
                  
                    <li <?php if(App::getRouter()->controller == 'delete' && App::getRouter()->action == "member") { ?> class="active" <?php } ?>>
                        <a href="/delete/member"><i class="fa fa-fw fa-table"></i>Remove Member</a>
                    </li>
                    <li <?php if(App::getRouter()->controller == 'pages' && App::getRouter()->action == "event") { ?> class="active" <?php } ?>>
                        <a href="/pages/events"><i class="fa fa-fw fa-desktop"></i> Church Events</a>
                    </li>
                    <li  <?php if(App::getRouter()->controller == 'pages' && App::getRouter()->action == "birthday") { ?> class="active" <?php } ?>>
                        <a href="/pages/birthday"><i class="fa fa-fw fa-wrench"></i> Birthday Reminder</a>
                        <!--all birthdays a week before time-->
                    </li>
                    <li <?php if(App::getRouter()->controller == 'search') { ?> class="active" <?php } ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Search <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li  <?php if(App::getRouter()->controller == 'search' && App::getRouter()->action == "move") { ?> class="active" <?php } ?>>
                                <a href="/search/move">MOVE</a>
                            </li>
                            <li  <?php if(App::getRouter()->controller == 'search' && App::getRouter()->action == "doz") { ?> class="active" <?php } ?>>
                                <a href="/search/doz">DOZ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/user/index"><i class="fa fa-fw fa-file"></i>Accounts</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?php echo App::getRouter()->controller; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               <?=$data['content']?>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>


    <!-- Morris Charts JavaScript -->
    <script src="/js/ajax.js"></script>
    <script src="/js/plugins/morris/raphael.min.js"></script>
   


   
</body>
</html>