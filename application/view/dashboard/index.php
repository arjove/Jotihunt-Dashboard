
<!-- START CONTAINER FLUID -->
<div class="container-fluid padding-25 sm-padding-10">
    <!-- START ROW -->
    <div class="row">
        <div class="col-md-8 col-lg-4 m-b-10">
            <!-- START WIDGET Hints-->
            <div class="widget-16 panel no-border  no-margin widget-loader-circle">
                <div class="panel-heading">
                    <div class="panel-title">Opdrachten
                    </div>
                    <div class="panel-controls">
                        <ul>
                            <li><a href="<?php echo Config::get('URL')?>" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-16-header padding-20">
                    <?php
                        $latest_opdrachten = GameModel::getLatest('opdracht');
                    ?>
                    <span class="icon-thumbnail bg-master-light pull-left text-master">OP</span>
                    <div class="pull-left">
                        <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Nieuwste Opdracht:</p>
                        <h5 class="no-margin overflow-ellipsis "><?php echo $latest_opdrachten[0]['title'];?></h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 m-b-10">
                            <?php echo $latest_opdrachten[0]['text'];?>
                        </div>
                    </div>
                </div>
                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                    <div class="row">
                        <div class="col-md-3 ">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                            <p class="all-caps font-montserrat  no-margin text-success ">
                                <span data-livestamp="<?php echo $latest_opdrachten[0]['start']; ?>"></span>
                            </p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                            <p class="all-caps font-montserrat  no-margin text-warning ">
                                <span data-livestamp="<?php echo $latest_opdrachten[0]['end']; ?>"></span>
                            </p>
                        </div>
                        <div class="col-md-3 text-center">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                            <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_opdrachten[0]['max_points'];?></p>
                        </div>
                        <div class="col-md-3 text-right">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                            <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[0]['UUID']?>">
                                <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if (!empty($latest_opdrachten[1])){ ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-transparent">
                            <div class="panel-body no-padding">
                                <div id="portlet-advance" class="panel panel-default">
                                    <div class="panel-heading ">
                                        <div class="panel-title"><?php echo $latest_opdrachten[1]['title'];?>
                                        </div>
                                        <div class="panel-controls">
                                            <ul>
                                                <li>
                                                    <div class="dropdown">
                                                        <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                            <i class="portlet-icon portlet-icon-settings "></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                            <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[1]['UUID']?>">Deeplink</a>
                                                            </li>
                                                            <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[1]['UUID']?>">Inleveren</a>
                                                            </li>
                                                            <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h3>
                                            <span class="semi-bold"><?php echo $latest_opdrachten[1]['title']?></span></h3>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-sm-12">
                                                <?php echo $latest_opdrachten[1]['text']?>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                            <div class="row">
                                                <div class="col-md-3 ">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-success ">
                                                        <span data-livestamp="<?php echo $latest_opdrachten[1]['start']; ?>"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-warning ">
                                                        <span data-livestamp="<?php echo $latest_opdrachten[1]['end']; ?>"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_opdrachten[1]['max_points'];?></p>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                    <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[1]['UUID']?>">
                                                        <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } if (!empty($latest_opdrachten[2])){ ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-transparent">
                            <div class="panel-body no-padding">
                                <div id="portlet-advance" class="panel panel-default">
                                    <div class="panel-heading ">
                                        <div class="panel-title"><?php echo $latest_opdrachten[2]['title'];?>
                                        </div>
                                        <div class="panel-controls">
                                            <ul>
                                                <li>
                                                    <div class="dropdown">
                                                        <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                            <i class="portlet-icon portlet-icon-settings "></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                            <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[2]['UUID']?>">Deeplink</a>
                                                            </li>
                                                            <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[2]['UUID']?>">Inleveren</a>
                                                            </li>
                                                            <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h3>
                                            <span class="semi-bold"><?php echo $latest_opdrachten[2]['title']?></span></h3>
                                        <?php echo $latest_opdrachten[2]['text']?>
                                        <br>
                                        <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                            <div class="row">
                                                <div class="col-md-3 ">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-success ">
                                                        <span data-livestamp="<?php echo $latest_opdrachten[2]['start']; ?>"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-warning ">
                                                        <span data-livestamp="<?php echo $latest_opdrachten[2]['end']; ?>"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_opdrachten[2]['max_points'];?></p>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                    <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[2]['UUID']?>">
                                                        <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } if (!empty($latest_opdrachten[3])){ ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-transparent">
                            <div class="panel-body no-padding">
                                <div id="portlet-advance" class="panel panel-default">
                                    <div class="panel-heading ">
                                        <div class="panel-title"><?php echo $latest_opdrachten[3]['title'];?>
                                        </div>
                                        <div class="panel-controls">
                                            <ul>
                                                <li>
                                                    <div class="dropdown">
                                                        <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                                                            <i class="portlet-icon portlet-icon-settings "></i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                            <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[3]['UUID']?>">Deeplink</a>
                                                            </li>
                                                            <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[3]['UUID']?>">Inleveren</a>
                                                            </li>
                                                            <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                </li>
                                                <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <h3>
                                            <span class="semi-bold"><?php echo $latest_opdrachten[3]['title']?></span></h3>
                                        <?php echo $latest_opdrachten[3]['text']?>
                                        <br>
                                        <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                            <div class="row">
                                                <div class="col-md-3 ">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-success ">
                                                        <span data-livestamp="<?php echo $latest_opdrachten[3]['start']; ?>"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-warning ">
                                                        <span data-livestamp="<?php echo $latest_opdrachten[3]['end']; ?>"></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                    <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_opdrachten[3]['max_points'];?></p>
                                                </div>
                                                <div class="col-md-3 text-right">
                                                    <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                    <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_opdrachten[3]['UUID']?>">
                                                        <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            </div>
            <!-- END WIDGET -->
        </div>
        <div class="col-md-8 col-lg-4 m-b-10">
            <!-- START WIDGET Hints-->
            <div class="widget-16 panel no-border  no-margin widget-loader-circle">
                <div class="panel-heading">
                    <div class="panel-title">Hints
                    </div>
                    <div class="panel-controls">
                        <ul>
                            <li><a href="<?php echo Config::get('URL')?>" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-16-header padding-20">
                    <?php
                    $latest_hints = GameModel::getLatest('hint');
                    ?>
                    <span class="icon-thumbnail bg-master-light pull-left text-master">HI</span>
                    <div class="pull-left">
                        <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Nieuwste Hint:</p>
                        <h5 class="no-margin overflow-ellipsis "><?php echo $latest_hints[0]['title'];?></h5>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 m-b-10">
                            <?php echo $latest_hints[0]['text'];?>
                        </div>
                    </div>
                </div>
                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                    <div class="row">
                        <div class="col-md-4 ">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                            <p class="all-caps font-montserrat  no-margin text-success ">
                                <span data-livestamp="<?php echo $latest_hints[0]['start']; ?>"></span>
                            </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                            <p class="all-caps font-montserrat  no-margin text-warning ">
                                <span data-livestamp="<?php echo $latest_hints[0]['end']; ?>"></span>
                            </p>
                        </div>
                        <div class="col-md-4 text-right">
                            <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                            <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[0]['UUID']?>">
                                <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if (!empty($latest_hints[1])){ ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-transparent">
                                <div class="panel-body no-padding">
                                    <div id="portlet-advance" class="panel panel-default">
                                        <div class="panel-heading ">
                                            <div class="panel-title"><?php echo $latest_hints[1]['title'];?>
                                            </div>
                                            <div class="panel-controls">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                                <i class="portlet-icon portlet-icon-settings "></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                                <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[1]['UUID']?>">Deeplink</a>
                                                                </li>
                                                                <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[1]['UUID']?>">Inleveren</a>
                                                                </li>
                                                                <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <h3>
                                                <span class="semi-bold"><?php echo $latest_hints[1]['title']?></span></h3>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-sm-12">
                                                    <?php echo $latest_hints[1]['text']?>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                                <div class="row">
                                                    <div class="col-md-3 ">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">
                                                            <span data-livestamp="<?php echo $latest_hints[1]['start']; ?>"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-warning ">
                                                            <span data-livestamp="<?php echo $latest_hints[1]['end']; ?>"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_hints[1]['max_points'];?></p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                        <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[1]['UUID']?>">
                                                            <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } if (!empty($latest_hints[2])){ ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-transparent">
                                <div class="panel-body no-padding">
                                    <div id="portlet-advance" class="panel panel-default">
                                        <div class="panel-heading ">
                                            <div class="panel-title"><?php echo $latest_hints[2]['title'];?>
                                            </div>
                                            <div class="panel-controls">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                                <i class="portlet-icon portlet-icon-settings "></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                                <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[2]['UUID']?>">Deeplink</a>
                                                                </li>
                                                                <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[2]['UUID']?>">Inleveren</a>
                                                                </li>
                                                                <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <h3>
                                                <span class="semi-bold"><?php echo $latest_hints[2]['title']?></span></h3>
                                            <?php echo $latest_hints[2]['text']?>
                                            <br>
                                            <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                                <div class="row">
                                                    <div class="col-md-3 ">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">
                                                            <span data-livestamp="<?php echo $latest_hints[2]['start']; ?>"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-warning ">
                                                            <span data-livestamp="<?php echo $latest_hints[2]['end']; ?>"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_hints[2]['max_points'];?></p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                        <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[2]['UUID']?>">
                                                            <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } if (!empty($latest_hints[3])){ ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-transparent">
                                <div class="panel-body no-padding">
                                    <div id="portlet-advance" class="panel panel-default">
                                        <div class="panel-heading ">
                                            <div class="panel-title"><?php echo $latest_hints[3]['title'];?>
                                            </div>
                                            <div class="panel-controls">
                                                <ul>
                                                    <li>
                                                        <div class="dropdown">
                                                            <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                                                                <i class="portlet-icon portlet-icon-settings "></i>
                                                            </a>
                                                            <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                                <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[3]['UUID']?>">Deeplink</a>
                                                                </li>
                                                                <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[3]['UUID']?>">Inleveren</a>
                                                                </li>
                                                                <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                    </li>
                                                    <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <h3>
                                                <span class="semi-bold"><?php echo $latest_hints[3]['title']?></span></h3>
                                            <?php echo $latest_hints[3]['text']?>
                                            <br>
                                            <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                                <div class="row">
                                                    <div class="col-md-3 ">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success ">
                                                            <span data-livestamp="<?php echo $latest_hints[3]['start']; ?>"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-warning ">
                                                            <span data-livestamp="<?php echo $latest_hints[3]['end']; ?>"></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                        <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_hints[3]['max_points'];?></p>
                                                    </div>
                                                    <div class="col-md-3 text-right">
                                                        <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                        <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_hints[3]['UUID']?>">
                                                            <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
            <!-- END WIDGET -->
        </div>
            <div class="col-md-8 col-lg-4 m-b-10">
                <!-- START WIDGET nieuws-->
                <div class="widget-16 panel no-border  no-margin widget-loader-circle">
                    <div class="panel-heading">
                        <div class="panel-title">Nieuws
                        </div>
                        <div class="panel-controls">
                            <ul>
                                <li><a href="<?php echo Config::get('URL')?>" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-16-header padding-20">
                        <?php
                        $latest_nieuws = GameModel::getLatest('nieuws');
                        ?>
                        <span class="icon-thumbnail bg-master-light pull-left text-master">NI</span>
                        <div class="pull-left">
                            <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Nieuwste Opdracht:</p>
                            <h5 class="no-margin overflow-ellipsis "><?php echo $latest_nieuws[0]['title'];?></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 m-b-10">
                                <?php echo $latest_nieuws[0]['text'];?>
                            </div>
                        </div>
                    </div>
                    <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                <p class="all-caps font-montserrat  no-margin text-success ">
                                    <span data-livestamp="<?php echo $latest_nieuws[0]['start']; ?>"></span>
                                </p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="hint-text all-caps font-montserrat small no-margin ">Link:</p>
                                <a href="http://jotihunt.net/groep/nieuws.php?MID=<?php echo $latest_nieuws[0]['UUID']?>">
                                    <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Zie website! </p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($latest_nieuws[1])){ ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-transparent">
                                    <div class="panel-body no-padding">
                                        <div id="portlet-advance" class="panel panel-default">
                                            <div class="panel-heading ">
                                                <div class="panel-title"><?php echo $latest_nieuws[1]['title'];?>
                                                </div>
                                                <div class="panel-controls">
                                                    <ul>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                                    <i class="portlet-icon portlet-icon-settings "></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                                    <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[1]['UUID']?>">Deeplink</a>
                                                                    </li>
                                                                    <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[1]['UUID']?>">Inleveren</a>
                                                                    </li>
                                                                    <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <h3>
                                                    <span class="semi-bold"><?php echo $latest_nieuws[1]['title']?></span></h3>
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                                        <?php echo $latest_nieuws[1]['text']?>
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                                    <div class="row">
                                                        <div class="col-md-3 ">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-success ">
                                                                <span data-livestamp="<?php echo $latest_nieuws[1]['start']; ?>"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-warning ">
                                                                <span data-livestamp="<?php echo $latest_nieuws[1]['end']; ?>"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_nieuws[1]['max_points'];?></p>
                                                        </div>
                                                        <div class="col-md-3 text-right">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                            <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[1]['UUID']?>">
                                                                <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } if (!empty($latest_nieuws[2])){ ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-transparent">
                                    <div class="panel-body no-padding">
                                        <div id="portlet-advance" class="panel panel-default">
                                            <div class="panel-heading ">
                                                <div class="panel-title"><?php echo $latest_nieuws[2]['title'];?>
                                                </div>
                                                <div class="panel-controls">
                                                    <ul>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                                    <i class="portlet-icon portlet-icon-settings "></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                                    <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[2]['UUID']?>">Deeplink</a>
                                                                    </li>
                                                                    <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[2]['UUID']?>">Inleveren</a>
                                                                    </li>
                                                                    <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <h3>
                                                    <span class="semi-bold"><?php echo $latest_nieuws[2]['title']?></span></h3>
                                                <?php echo $latest_nieuws[2]['text']?>
                                                <br>
                                                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                                    <div class="row">
                                                        <div class="col-md-3 ">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-success ">
                                                                <span data-livestamp="<?php echo $latest_nieuws[2]['start']; ?>"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-warning ">
                                                                <span data-livestamp="<?php echo $latest_nieuws[2]['end']; ?>"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_nieuws[2]['max_points'];?></p>
                                                        </div>
                                                        <div class="col-md-3 text-right">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                            <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[2]['UUID']?>">
                                                                <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } if (!empty($latest_nieuws[3])){ ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-transparent">
                                    <div class="panel-body no-padding">
                                        <div id="portlet-advance" class="panel panel-default">
                                            <div class="panel-heading ">
                                                <div class="panel-title"><?php echo $latest_nieuws[3]['title'];?>
                                                </div>
                                                <div class="panel-controls">
                                                    <ul>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a id="portlet-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="true">
                                                                    <i class="portlet-icon portlet-icon-settings "></i>
                                                                </a>
                                                                <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="portlet-settings">
                                                                    <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[3]['UUID']?>">Deeplink</a>
                                                                    </li>
                                                                    <li><a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[3]['UUID']?>">Inleveren</a>
                                                                    </li>
                                                                    <li><a href="http://jotihunt.net">Jotihunt Site</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i class="portlet-icon portlet-icon-collapse"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-maximize" data-toggle="maximize"><i class="portlet-icon portlet-icon-maximize"></i></a>
                                                        </li>
                                                        <li><a href="#" class="portlet-close" data-toggle="close"><i class="portlet-icon portlet-icon-close"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <h3>
                                                    <span class="semi-bold"><?php echo $latest_nieuws[3]['title']?></span></h3>
                                                <?php echo $latest_nieuws[3]['text']?>
                                                <br>
                                                <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                                                    <div class="row">
                                                        <div class="col-md-3 ">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Gepost:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-success ">
                                                                <span data-livestamp="<?php echo $latest_nieuws[3]['start']; ?>"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Loopt Tot:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-warning ">
                                                                <span data-livestamp="<?php echo $latest_nieuws[3]['end']; ?>"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-md-3 text-center">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Punten:</p>
                                                            <p class="all-caps font-montserrat  no-margin text-success "><?php echo $latest_nieuws[3]['max_points'];?></p>
                                                        </div>
                                                        <div class="col-md-3 text-right">
                                                            <p class="hint-text all-caps font-montserrat small no-margin ">Inleveren:</p>
                                                            <a href="http://jotihunt.net/groep/opdracht.php?MID=<?php echo $latest_nieuws[3]['UUID']?>">
                                                                <p class="all-caps font-montserrat  no-margin text-success "><i class="fa fa-angle-double-right"></i> Insturen! </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
                <!-- END WIDGET -->
        </div>
    </div>
</div>
<!-- END CONTAINER FLUID -->
