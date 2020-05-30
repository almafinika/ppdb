<!-- Bagian Navbar / menu bagian atas dan samping-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span class="fa fa-laptop"></span> Ruang Admin</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
            <li class="message-preview"><a href="#"><i class="fa fa-info-circle"></i> <span class="label label-default">12</span></a></li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $admin['nama_admin'];?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="logout.php">Logout</a></li>

                </ul>
            </li>
        </ul>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav side-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- Bagian Navbar / menu bagian atas dan samping-->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>
                            <i class="fa fa-home fa-fw"></i> Dashboard Statistic
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li>Home</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                   <div class="col-lg-12">
                   <div class="alert alert-danger alert-dismissible" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden='true'>&times;</span>
                   </button>
                   <h4 class="alert-heading">Alert dismissable</h4>
                   <p>Selamat datang di control panel admin. Tingkatkan share, traffic, posting dan order dengan berbagi melalui media sosial</p>
                   </div>
                   
                   <div class="alert alert-success" role="alert">
                   <strong>Alert !</strong> You successfully read this important alert message.
                   </div>
                   
                   </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-id-card fa-5x"></i>
                                    </div>
                                    <div class="col-lg-9 text-right">
                                        <div class="huge">1233</div>
                                        <div>Anggoa</div>
                                    </div>
                                </div>
                            </div>
                            <a href="member.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Semua</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-folder-open fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">3423</div>
                                        <div>Daftar Produk !</div>
                                    </div>
                                </div>
                            </div>
                            <a href="produk.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Semua Produk</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cart-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">5343</div>
                                        <div>Transaksi Baru !</div>
                                    </div>
                                </div>
                            </div>
                            <a href="transaksi.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Semua Transaksi</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">4522</div>
                                        <div>Konfirmasi Baru!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="konfirmasi">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat Semua KOnfirmasi</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Contoh Tabel General Responsive</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                                </table>

                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-pie-chart fa-fw"></i> Contoh Tabel Border Responsive</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                                </table>

                                </div>
                                <div class="text-right">
                                    <a href="log.php">Data Log User <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-laptop fa-fw"></i> Contoh Tabel Condensed Responsive</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                                </table>

                                </div>
                                <div class="text-right">
                                    <a href="log.php">Data Log User <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-pie-chart fa-fw"></i> Contoh Tabel Striped Responsive</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                                </table>

                                </div>
                                <div class="text-right">
                                    <a href="log.php">Data Log User <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo $hostname;?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo $hostname;?>/assets/js/bootstrap.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo $hostname;?>/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>