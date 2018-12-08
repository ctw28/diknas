<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <link rel="icon" href="<?php echo base_url()?>assets/images/favicon.png" type="image/png">

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
        <!-- ace settings handler -->
        <script src="<?php echo base_url()?>assets/js/ace-extra.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        

    </head>

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default ace-save-state" style="background-color: #2E8965 !important;">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="<?php echo base_url()?>" class="navbar-brand">
                        <small class="title_aplikasi">Penilaian <b>HASIL</b> Belajar</small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle" style="background-color: #2E8965 !important;">
                                <img class="nav-user-photo" src="<?php echo base_url()?>assets/images/man.png" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $nama;?>
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li><a href="<?php echo base_url()?>index.php/logout"><i class="ace-icon fa fa-power-off"></i>Logout</a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>

        <div class="main-container ace-save-state" id="main-container">

            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar responsive ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>


            <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="margin-bottom: 10px;">
                <h5>Selamat Bekerja</h5>
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <img src="<?php echo base_url()?>assets/images/man.png">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-12">
                <b><?php echo $nama;?></b><br>
                <b>Wali Kelas : XII.A</b><br>
                    
                </div>
            </div><!-- /.sidebar-shortcuts -->
                <ul class="nav nav-list">
                    <li class="">
                        <a href="<?php echo base_url()?>index.php/dashboard">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                        <b class="arrow"></b>
                    </li>                   

                                       <li>
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Pengaturan </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="<?php echo base_url()?>index.php/pengaturan/mata_pelajaran">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mata Pelajaran
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="<?php echo base_url()?>index.php/pengaturan/siswa">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Siswa
                                </a>

                                <b class="arrow"></b>
                            </li>
                            
                        </ul>
                    </li>
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?php echo base_url()?>">Home</a>
                            </li>
                            <li><a href="<?php echo base_url()?>index.php/sikap">Penilaian</a></li>
                            <li class="active"></li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2" style="text-align: left !important;">
                                    <div class="widget-box widget-color-green2" id="widget-box-2" data-color="#2E8965">
                                        <div class="widget-header">
                                            <h5 class="widget-title bigger lighter">
                                                <i class="ace-icon fa fa-pie-chart"></i>
                                                Ringkasan Data
                                            </h5>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                    
                                                <div class="infobox col-md-6" style="background-color: #2E8965; color: white;">
                                                    <div class="infobox-progress">
                                                            <h2 style="margin:0 !important;"><i class="fa fa-child"></i></h2>
                                                    </div>
                                                    <div class="infobox-data">
                                                        <div class="infobox-content" style="color: white;">Total</div>
                                                        <div class="infobox-content" style="color: white;">SISWA</div>
                                                    </div>
                                                </div>
                                                <div class="infobox col-md-4" style="background-color: #2E8965; color: white;">
                                                    <div class="infobox-progress">
                                                            <h2 style="margin:0 !important;">9</h2>
                                                    </div>
                                                    <div class="infobox-data">
                                                        <div class="infobox-content" style="color: white;">Total</div>
                                                        <div class="infobox-content" style="color: white;">MATA PELAJARAN WAJIB</div>
                                                    </div>
                                                </div>

                                                <div class="infobox col-md-4" style="background-color: #2E8965; color: white;">
                                                    <div class="infobox-progress">
                                                            <h2 style="margin:0 !important;">5</h2>
                                                    </div>
                                                    <div class="infobox-data">
                                                        <div class="infobox-content" style="color: white;">Total</div>
                                                        <div class="infobox-content" style="color: white;">MATA PELAJARAN PILIHAN</div>
                                                    </div>
                                                </div>


                                   
                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                
                                    
                       
                                        


                                        <div class="col-xs-12 col-sm-6 widget-container-col" id="widget-container-col-2" style="text-align: left !important;">
                                            <div class="widget-box widget-color-green2" id="widget-box-2" data-color="#2E8965">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Daftar Mata Pelajaran Wajib
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table>
                                                            <thead style="border-bottom: 1px solid #2E8965 !important">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Mata Pelajaran</th>
                                                                    <th>Nama Guru</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody >
                                                                <?php
                                                                    $i = 1;
                                                                    foreach ($data_mata_pelajaran->result() as $row) {
                                                                        if($row->status_mapel == "wajib"){
                                                                ?>
                                                                <tr  style="border-bottom: 1px solid #2E8965 !important">
                                                                    <td><?php echo $i ?></td>
                                                                    <td style="text-align: left !important">
                                                                        <a style="width: 90%" href="<?php echo base_url()?>index.php/hasil/tampil/<?php echo $row->id_guru ?>">
                                                                        <?php echo $row->mata_pelajaran ?>
                                                                        </a>
                                                                    </td>
                                                                    <td style="text-align: left !important"><?php echo $row->nama_guru ?></td>
                                                                    
                                                                </tr>
                                                                <?php
                                                                    $i++;
                                                                    }
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.span -->

                                        <div class="col-xs-12 col-sm-6 widget-container-col" id="widget-container-col-2">
                                            <div class="widget-box widget-color-green2" id="widget-box-2">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Daftar Mata Pelajaran Pilihan
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table>
                                                            <thead style="border-bottom: 1px solid #2E8965 !important">
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Mata Pelajaran</th>
                                                                    <th>Nama Guru</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $i = 1;
                                                                    foreach ($data_mata_pelajaran->result() as $row) {
                                                                        if($row->status_mapel == "pilihan"){
                                                                ?>
                                                                <tr style="border-bottom: 1px solid #2E8965 !important">
                                                                    <td><?php echo $i ?></td>
                                                                    <td style="text-align: left !important">
                                                                        <a style="width: 90%" href="<?php echo base_url()?>index.php/hasil/tampil/<?php echo $row->id_guru ?>">
                                                                        <?php echo $row->mata_pelajaran ?>
                                                                        </a>
                                                                    </td>
                                                                    <td style="text-align: left !important"><?php echo $row->nama_guru ?></td>
                                                                   
                                                                </tr>
                                                                <?php
                                                                 $i++;
                                                                    }
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.span -->


                              






                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">CV. LOCALHOUSE</span>
                            Application &copy; 2018
                        </span>

                    </div>
                </div>
            </div>


        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>


        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/ace.min.js"></script>

    </body>
</html>
