<!DOCTYPE html>
<html>
<head>
    <?php
    // storeage of a var to be used throughout the file.
    $notify = Log::getLog(200, true);

    ?>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Jotihunt Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="<?php echo Config::get('URL'); ?>ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Config::get('URL'); ?>ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Config::get('URL'); ?>ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Config::get('URL'); ?>ico/152.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="A new and fun dashbaord" name="description" />
    <meta content="Arjo Velderman @ github.com/worldmc/jotihunt-dashboard" name="author" />
    <!-- BEGIN Vendor CSS-->
    <link href="<?php echo Config::get('URL'); ?>plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('URL'); ?>plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('URL'); ?>plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('URL'); ?>plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo Config::get('URL'); ?>plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo Config::get('URL'); ?>plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- BEGIN Pages CSS-->
    <link href="<?php echo Config::get('URL'); ?>css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo Config::get('URL'); ?>css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
    <link href="<?php echo Config::get('URL'); ?>css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
        window.onload = function()
        {
            // fix for windows 8
            if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo Config::get('URL'); ?>css/windows.chrome.fix.css" />'
        }
    </script>
</head>
<body class="fixed-header">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar" data-pages="sidebar">
    <div id="appMenu" class="sidebar-overlay-slide from-top">
    </div>
    <!-- BEGIN SIDEBAR HEADER -->
    <div class="sidebar-header">
        <img src="<?php echo Config::get('URL'); ?>img/logo_white.png" alt="logo" class="brand" data-src="<?php echo Config::get('URL'); ?>img/logo_white.png" data-src-retina="<?php echo Config::get('URL'); ?>img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
            <button data-pages-toggle="#appMenu" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" type="button"><i class="fa fa-angle-down fs-16"></i>
            </button>
            <button data-toggle-pin="sidebar" class="btn btn-link visible-lg-inline" type="button"><i class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR HEADER -->
    <!-- BEGIN SIDEBAR MENU -->
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30 <?php if(View::checkForActiveController($filename, 'dashboard/index')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?>" class="detailed">
                    <span class="title">Dashboard</span>
                    <?php
                    if(count($notify) >= 1) {
                        if(count($notify) >= 2) { ?>
                            <span class="details"><?php echo count($notify); ?> New Updates</span>
                        <?php } else { ?>
                            <span class="details"><?php echo count($notify); ?> New Update</span>
                        <?php }
                    } else { ?>
                        <span class="details">No New Updates!</span>
                    <?php } ?>
                </a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'dashboard/index')) { echo 'bg-success'; }?>"><i class="pg-home"></i></span>
            </li>

            <li class="<?php if(View::checkForActiveControllerAndAction($filename, 'item/index')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?>item"><span class="title">item</span></a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'item/index')) { echo 'bg-success'; }?> "><i class="fa fa-plus-square-o "></i></span>
            </li>

            <li class=<?php if(View::checkForActiveControllerAndAction($filename, 'item/usage')) { echo 'open'; }?>"">
                <a href="<?php echo Config::get('URL'); ?>item"><span class="title">Item Usage</span></a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'item/usage')) { echo 'bg-success'; }?>"><i class="fa fa-truck"></i></span>
            </li>

            <li class="<?php if(View::checkForActiveControllerAndAction($filename, 'program/index')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?>program"><span class="title">Programma's</span></a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'program/index')) { echo 'bg-success'; }?>"><i class="pg-ui"></i></span>
            </li>

            <li class="<?php if(View::checkForActiveControllerAndAction($filename, 'program/usage')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?> program/usage"><span class="title">Programma info</span> </a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'programma/usage')) { echo 'bg-success'; }?>"><i class="fa fa-table"></i></span>
            </li>


            <li class="<?php if(View::checkForActiveControllerAndAction($filename, 'storage/index')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?>storage"><span class="title">Item Storage</span></a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'storage/index')) { echo 'bg-success'; }?>"><i class="fa fa-codepen"></i></span>
            </li>

            <li class="<?php if(View::checkForActiveControllerAndAction($filename, 'time/line')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?>time/line"><span class="title">TimeLine</span></a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'time/line')) { echo 'bg-success'; }?> "><i class="pg-ordered_list"></i></span>
            </li>

            <li class="<?php if(View::checkForActiveController($filename, 'export')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?>export"><span class="title">Export Data</span></a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'export/index')) { echo 'bg-success'; }?>"><i class="fa fa-download"></i></span>
            </li>

            <li class="<?php if(View::checkForActiveController($filename, 'admin')) { echo 'open'; }?>">
                <a href="<?php echo Config::get('URL'); ?>#"><span class="title">Admineral section</span></a>
                <span class="icon-thumbnail <?php if(View::checkForActiveControllerAndAction($filename, 'admin/index')) { echo 'bg-success'; }?>"><i class="pg-settings_small"></i></span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
<!-- START PAGE-CONTAINER -->
<div class="page-container">
    <!-- START PAGE HEADER WRAPPER -->
    <!-- START HEADER -->
    <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="sm-action-bar">
                <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
                    <span class="icon-set menu-hambuger"></span>
                </a>
            </div>
            <!-- END ACTION BAR -->
        </div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="sm-action-bar">
                <a href="#" class="btn-link" data-toggle="quickview" data-toggle-element="#quickview">
                    <span class="icon-set menu-hambuger-plus"></span>
                </a>
            </div>
            <!-- END ACTION BAR -->
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table">
            <div class="header-inner">
                <div class="brand inline">
                    <img src="<?php echo Config::get('URL'); ?>img/logo.png" alt="logo" data-src="<?php echo Config::get('URL'); ?>img/logo.png" data-src-retina="<?php echo Config::get('URL'); ?>img/logo_2x.png" width="78" height="22">
                </div>
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
                    <li class="p-r-15 inline">
                        <?php
                        // get the log
                        $notify = Log::getLog(200, true);

                        ?>
                        <div class="dropdown">
                            <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                                <?php
                                //if there are more then 0
                                if(count($notify) > 0) {
                                    echo '<span class="bubble"></span>';
                                }
                                ?>
                            </a>
                            <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                                <div class="notification-panel">
                                    <!-- START Notification Body-->
                                    <div class="notification-body scrollable">
                                        <?php
                                        // start foreach.
                                        foreach($notify as $key => $value) {


                                            ?>
                                            <!-- START Notification Item-->
                                            <div class="notification-item  clearfix">
                                                <div class="heading">
                                                    <a href="#" class="text-<?php echo $value['type']; ?>">
                                                        <?php if($value['type'] == 'danger') { ?>
                                                            <i class="fa fa-bolt m-r-10"></i>
                                                        <?php } elseif($value['type'] == 'success') { ?>
                                                            <i class="fa fa-check m-r-10"></i>
                                                        <?php } elseif($value['type'] == 'unknown') { ?>
                                                            <i class="fa fa-question m-r-10"></i>
                                                        <?php } elseif($value['type'] == 'info') { ?>
                                                            <i class="fa fa-info-circle m-r-10"></i>
                                                        <?php } elseif($value['type'] == 'error') { ?>
                                                            <i class="fa fa-exclamation-triangle m-r-10"></i>
                                                        <?php } ?>
                                                        <span class="bold"><?php echo $value['title']; ?></span>
                                                        <span class="fs-12 m-l-10"><?php echo $value['text']; ?></span>
                                                    </a>
                                                    <small><span data-livestamp="<?php echo $value['ENTRY_ID']; ?>"></span></small>
                                                </div>
                                            </div>
                                            <!-- END Notification Item-->
                                            <?php
                                        }
                                        if(count($notify) == 0) {
                                            echo "<p style='text-align: center;'>There are no notifications!</p>";
                                        }

                                        ?>
                                    </div>
                                    <!-- END Notification Body-->
                                    <!-- START Notification Footer-->
                                    <div class="notification-footer text-center">
                                        <a href="<?php echo Config::get('URL'); ?>dashboard/notify/read" class="">Mark all notifications Read</a>
                                    </div>
                                    <!-- END Notification Footer-->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-r-15 inline">
                        <a href="http://jotihunt.net" class="icon-set clip "></a>
                    </li>
                    <li class="p-r-15 inline">
                        <a href="<?php echo Config::get('URL'); ?>" class="icon-set grid-box"></a>
                    </li>
                </ul>
                <!-- END NOTIFICATION DROPDOWN -->
            </div>
        </div>
        <?php if(Config::get('QUICKVIEW')) { ?>
            <div class=" pull-right">
                <div class="header-inner">
                    <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
                </div>
            </div>
        <?php } ?>
        <div class=" pull-right">
            <!-- START User Info-->
            <div class="visible-lg visible-md m-t-10">
                <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                    <span class="semi-bold"><?php echo Session::get('user_name'); ?></span>
                </div>
                <div class="dropdown pull-right">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="<?php echo Session::get('user_gravatar_image_url'); ?>" alt="" width="32" height="32">
            </span>
                    </button>
                    <ul class="dropdown-menu profile-dropdown" role="menu">
                        <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                        </li>
                        <li><a href="#"><i class="pg-signals"></i> Help</a>
                        </li>
                        <li class="bg-master-lighter">
                            <a href="<?php echo Config::get('URL'); ?>login/logout" class="clearfix">
                                <span class="pull-left">Logout</span>
                                <span class="pull-right"><i class="pg-power"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END User Info-->
        </div>
    </div>
    <!-- END HEADER -->
    <!-- END PAGE HEADER WRAPPER -->
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">