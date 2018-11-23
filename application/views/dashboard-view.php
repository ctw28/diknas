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
        <div id="navbar" class="navbar navbar-default ace-save-state">
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
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?php echo base_url()?>assets/images/man.png" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    <?php echo $nama;?>
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li><a href="#"><i class="ace-icon fa fa-power-off"></i>Logout</a></li>
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

                    <!-- <li>
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Penilaian </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="http://localhost/proses_belajar/index.php/pengetahuan/tampil/<?php echo $id_guru?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Pengetahuan
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="http://localhost/proses_belajar/index.php/keterampilan/tampil/<?php echo $id_guru?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Keterampilan
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li>
                                <a href="http://localhost/proses_belajar/index.php/sikap/tampil/<?php echo $id_guru?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Sikap
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li> -->
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
                                <a href="http://localhost/proses_belajar">Home</a>
                            </li>
                            <li><a href="http://localhost/proses_belajar/index.php/sikap">Penilaian</a></li>
                            <li class="active"></li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                        







<div class="col-sm-12">
<div class="col-sm-3">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/1"><H4 style="padding-top: 0 !important; margin-top: 0 !important">Matematika</H4>Rudianto, S.Pd </a>
</div>
<div class="col-sm-3">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/2"><H4 style="padding-top: 0 !important; margin-top: 0 !important">Bahasa Indonesia</H4>Riyanti, S.Pd</a>
</div>
<div class="col-sm-3">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/3"><H4 style="padding-top: 0 !important; margin-top: 0 !important">Pendidikan Agama</H4>_______________</a>
</div>

<div class="col-sm-3">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/4">
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  Pendidikan Pancasila
</H4>_______________
</a>
</div>
    
</div>


<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/5">
  
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  Sejarah Indonesia
</H4>_______________
</a>
</div>

<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/6">
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  Bahasa Inggris
</H4>_______________
</a>
</div>


<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/7">
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  Seni Budaya
</H4>_______________
</a>
</div>


<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-primary col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/8">
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  Pendidikan Jasmani
</H4>_______________
</a>
</div>

<div class="col-sm-12">
<h2 style="margin-top: 20px;">Mata Pelajaran Pilihan</h2>

<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-info col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/5">
  
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  
</H4>_______________
</a>
</div>

<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-info col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/6">
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  
</H4>_______________
</a>
</div>


<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-info col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/7">
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
  
</H4>_______________
</a>
</div>


<div class="col-sm-3" style="padding-top: 20px;">
  <a class="btn btn-info col-sm-10" href="<?php echo base_url()?>index.php/hasil/tampil/8">
  <H4 style="padding-top: 0 !important; margin-top: 0 !important">
</H4>_______________
</a>
</div>    
</div>












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
