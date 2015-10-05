
<!-- START CONTAINER FLUID -->
<div class="container-fluid padding-25 sm-padding-10">
    <!-- START ROW -->
    <div class="row">
        <div class="col-md-6 col-xlg-5">

            <div class="row">
                <div class="col-sm-6 m-b-10">
                    <div class="ar-2-1">
                        <!-- START WIDGET latest item-->
                        <div class="widget-4 panel no-border  no-margin widget-loader-bar">
                            <div class="container-sm-height full-height">
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="panel-heading ">
                                            <div class="panel-title text-black hint-text">
                                                <?php
                                                $item_info = ItemModel::getLastAddedItem();
                                                $storage = StorageModel::getCounts($item_info['ID']);
                                                ?>
                                                <span class="font-montserrat fs-11 all-caps">Laatst toegevoegde item: <?php echo $item_info['name']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="p-l-20 p-r-20">
                                            <h3 class="no-margin p-b-5 pull-left hint-text"><?php echo $item_info['name']?></h3>
                                            <p class="pull-right no-margin bold hint-text">Creator: <?php echo UserModel::getUsernameById($item_info['creator'])?></p>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END WIDGET -->
                    </div>
                </div>
                <div class="col-sm-6 m-b-10">
                    <div class="ar-2-1">
                        <!-- START WIDGET opslag-->
                        <div class="widget-5 panel no-border  widget-loader-bar">
                            <div class="container-sm-height full-height">
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="panel-heading ">
                                            <div class="panel-title text-black hint-text">
                                                <span class="font-montserrat fs-11 all-caps">Hoeveelheid in opslag:</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="p-l-20 p-r-20">
                                            <h3 class="no-margin p-b-5 pull-left hint-text"><?php echo $item_info['name']?></h3>
                                            <h5><strong></strong><?php echo $storage['stored']?></strong> Stuks</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 m-b-10">
                    <div class="ar-2-1">
                        <!-- START WIDGET laatste programma-->
                        <div class="widget-4 panel no-border  no-margin widget-loader-bar">
                            <div class="container-sm-height full-height">
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="panel-heading ">
                                            <div class="panel-title text-black hint-text">
                                                <?php $programma_info = ProgramModel::getLastAddedProgram(); ?>
                                                <span class="font-montserrat fs-11 all-caps">Laatst Toegevoegde Programma: <?php echo $programma_info['name']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="p-l-20 p-r-20">
                                            <h5 class="no-margin p-b-5 pull-left hint-text"><?php echo $programma_info['name']?></h5>
                                            <p class="pull-right no-margin bold hint-text">Creator: <?php echo UserModel::getUsernameById($programma_info['creator'])?></p>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-bottom ">
                                        <div class="widget-4-chart line-chart " data-line-color="success" data-area-color="success-light" data-y-grid="false" data-points="false" data-stroke-width="2">
                                            <svg></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET -->
                    </div>
                </div>
                <div class="col-sm-6 m-b-10">
                    <div class="ar-2-1">
                        <!-- START WIDGET opslag-->
                        <div class="widget-5 panel no-border  widget-loader-bar">
                            <div class="container-sm-height full-height">
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="panel-heading ">
                                            <div class="panel-title text-black hint-text">
                                                <span class="font-montserrat fs-11 all-caps">Hoeveelheid Benodigd:</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-sm-height">
                                    <div class="col-sm-height col-top">
                                        <div class="p-l-20 p-r-20">
                                            <h3 class="no-margin p-b-5 pull-left hint-text"><?php echo $item_info['name']?></h3>
                                            <h5><strong></strong><?php echo $storage['needed']?></strong> Stuks</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xlg-4">
            <div class="row">
                <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1">
                        <!-- START WIDGET -->
                        <div class="widget-3 panel no-border bg-complete no-margin widget-loader-bar">
                            <div class="panel-body no-padding">
                                <div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="3000">
                                    <div class="slide-front tiles slide active">
                                        <div class="padding-30">
                                            <div class="pull-top">
                                                <div class="pull-left visible-lg visible-xlg">
                                                    <i class="pg-map"></i>
                                                </div>
                                                <div class="pull-right">
                                                    <ul class="list-inline ">
                                                        <li>
                                                            <a href="#" class="no-decoration"><i class="pg-comment"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="widget-3-fav no-decoration"><i class="pg-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="pull-bottom p-b-30">
                                                <p class="p-t-10 fs-12 p-b-5 hint-text">21 Jan</p>
                                                <h3 class="no-margin text-white p-b-10">Rss link goes here
                                                    <br>link
                                                    <br>goes
                                                    <span class="semi-bold">here</span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET -->

                    </div>
                </div>
                <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1">
                        <!-- START WIDGET -->
                        <div class="panel no-border bg-master widget widget-6 widget-loader-circle-lg no-margin">
                            <div class="panel-heading">
                                <div class="panel-controls">
                                    <ul>
                                        <li><a data-toggle="refresh" class="portlet-refresh" href="#"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="pull-bottom bottom-left bottom-right padding-25">
                                    <h1 class="text-white semi-bold">30&#176;</h1>
                                    <span class="label font-montserrat fs-11">TODAY</span>
                                    <p class="text-white m-t-20">Feels like rainy, and i dont know yet what will go here. </p>
                                    <p class="text-white hint-text m-t-30">November 2014, 5 Thusday </p>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW -->
    <div class="row">
        <div class="col-md-8 col-lg-4 col-xlg-2 ">
            <div class="row">
                <div class="col-md-12 m-b-10">
                    <!-- START WIDGET -->
                    <div class="widget-9 panel no-border bg-primary no-margin widget-loader-bar">
                        <div class="container-xs-height full-height">
                            <div class="row-xs-height">
                                <div class="col-xs-height col-top">
                                    <div class="panel-heading  top-left top-right">
                                        <div class="panel-title text-black">
                                            <span class="font-montserrat fs-11 all-caps">Total Of all items in storage: <i class="fa fa-chevron-right"></i></span>
                                        </div>
                                        <div class="panel-controls">
                                            <ul>
                                                <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height col-top">
                                    <div class="p-l-20 p-t-15">
                                        <h3 class="no-margin p-b-5 text-white">23,000</h3>
                                        <a href="#" class="btn-circle-arrow text-white"><i class="pg-arrow_minimize"></i>
                                        </a>
                                        <span class="small hint-text">Total of all needed Items:</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height col-bottom">
                                    <div class="progress progress-small m-b-20">
                                        <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                        <div class="progress-bar progress-bar-white" data-percentage="45%"></div>
                                        <!-- END BOOTSTRAP PROGRESS -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- START WIDGET -->
                    <div class="widget-14 panel no-border  no-margin widget-loader-circle">
                        <div class="container-xs-height full-height">
                            <div class="row-xs-height">
                                <div class="col-xs-height">
                                    <div class="panel-heading">
                                        <div class="panel-title">Server load
                                        </div>
                                        <div class="panel-controls">
                                            <ul>
                                                <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height">
                                    <div class="p-l-20 p-r-20">
                                        <p><?php echo URL ?></p>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-12">
                                                <h4 class="bold no-margin">5.2GB</h4>
                                                <p class="small no-margin">Total usage</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5 class=" no-margin p-t-5">227.34KB</h5>
                                                <p class="small no-margin">Currently</p>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h5 class=" no-margin p-t-5">117.65MB</h5>
                                                <p class="small no-margin">Average</p>
                                            </div>
                                            <div class="col-lg-3 visible-xlg">
                                                <div class="widget-14-chart-legend bg-transparent text-black no-padding pull-right"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-xs-height">
                                <div class="col-xs-height relative bg-master-lightest">
                                    <div class="widget-14-chart_y_axis"></div>
                                    <div class="widget-14-chart rickshaw-chart top-left top-right bottom-left bottom-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </div>
            </div>
        </div>
        <div class="col-md-8 col-lg-4 hidden-xlg m-b-10">
            <!-- START WIDGET -->
            <div class="widget-11-2 panel no-border panel-condensed no-margin widget-loader-circle">
                <div class="panel-heading top-right">
                    <div class="panel-controls">
                        <ul>
                            <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="padding-25">
                    <div class="pull-left">
                        <h2 class="text-success no-margin">Programma Status</h2>
                        <p class="no-margin">Aantal programma's dat nog niet compleet is:</p>
                    </div>
                    <h3 class="pull-right semi-bold">123</h3>
                    <div class="clearfix"></div>
                </div>
                <div class="auto-overflow widget-11-2-table">
                    <table class="table table-condensed table-hover">
                        <tbody>
                        <tr>
                            <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                            <td class="text-right b-r b-dashed b-grey col-lg-3">
                                <span class="hint-text small">aantal items</span>
                            </td>
                            <td class="col-lg-3">
                                <span class="font-montserrat fs-18">%compleet</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="padding-25">
                    <p class="small no-margin">
                        <a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
                        <span class="hint-text ">Show more details of APPLE . INC</span>
                    </p>
                </div>
            </div>
            <!-- END WIDGET -->
        </div>
        <div class="col-md-8 col-lg-4 m-b-10">
            <!-- START WIDGET -->
            <div class="widget-16 panel no-border  no-margin widget-loader-circle">
                <div class="panel-heading">
                    <div class="panel-title">Page Options
                    </div>
                    <div class="panel-controls">
                        <ul>
                            <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-16-header padding-20">
                    <span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
                    <div class="pull-left">
                        <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Pages name</p>
                        <h5 class="no-margin overflow-ellipsis ">Webarch Sales Analysis</h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                    <div class="row">
                        <div class="col-md-4 ">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                            <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                            <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                            <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                        </div>
                    </div>
                </div>
                <div class="relative no-overflow">
                    <div class="widget-16-chart line-chart" data-line-color="success" data-points="true" data-point-color="white" data-stroke-width="2">
                        <svg></svg>
                    </div>
                </div>
                <div class="b-b b-t b-grey p-l-20 p-r-20 p-b-10 p-t-10">
                    <p class="pull-left">Post is Public</p>
                    <div class="pull-right">
                        <input type="checkbox" data-init-plugin="switchery" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="b-b b-grey p-l-20 p-r-20 p-b-10 p-t-10">
                    <p class="pull-left">Maintenance mode</p>
                    <div class="pull-right">
                        <input type="checkbox" data-init-plugin="switchery" checked="checked" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="p-l-20 p-r-20 p-t-10 p-b-10 ">
                    <p class="pull-left no-margin hint-text">Super secret options</p>
                    <a href="#" class="pull-right"><i class="fa fa-arrow-circle-o-down text-success fs-16"></i></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END WIDGET -->
        </div>
    </div>
</div>
<!-- END CONTAINER FLUID -->
