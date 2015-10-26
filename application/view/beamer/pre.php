<nav class="navbar navbar-default bg-master-lighter sm-padding-10" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sub-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="sub-nav">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text m-r-10"></i> Switch Views <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo Config::get('URL')?>beamer/globaal">globaal</a>
                                </li>
                                <li><a href="<?php echo Config::get('URL')?>beamer/hints">Hints</a>
                                </li>
                                <li><a href="<?php echo Config::get('URL')?>beamer/hunts">Hunts</a>
                                </li>
                                <li><a href="<?php echo Config::get('URL')?>beamer/opdrachten">Opdrachten</a>
                                </li>
                                <li><a href="<?php echo Config::get('URL')?>beamer/Nieuws">Nieuws</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo Config::get('URL')?>beamer/config">Configuratie</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="nav navbar-nav navbar-center">
                        <li><a href="#">Open</a>
                        </li>
                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Print"><i class="fa fa-print"></i></a>
                        </li>
                        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Download"><i class="fa fa-download"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-pdf" data-src-retina="assets/img/invoice/pdf2x.png" data-src="assets/img/invoice/pdf.png" src="assets/img/invoice/pdf2x.png">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-image" data-src-retina="assets/img/invoice/image2x.png" data-src="assets/img/invoice/image.png" src="assets/img/invoice/image2x.png">
                            </a>
                        </li>
                        <li>
                            <a href="#" class="p-r-10"><img width="25" height="25" alt="" class="icon-doc" data-src-retina="assets/img/invoice/doc2x.png" data-src="assets/img/invoice/doc.png" src="assets/img/invoice/doc2x.png">
                            </a>
                        </li>
                        <li><a href="#" class="p-r-10" onclick="$.Pages.setFullScreen(document.querySelector('html'));"><i class="fa fa-expand"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- START CONTAINER FLUID -->