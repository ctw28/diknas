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

                    <li class="active open">
                        <a href="" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Pengaturan </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="active">
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
                            <li><a href="<?php echo base_url()?>">Penilaian</a></li>
                           
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                            <h2 style="text-transform: uppercase;">Daftar Mata Pelajaran wajib</h2>

                            <table>
                                <thead>
                                    <tr> 
                                        <th>NO</th>
                                        <th>NAMA MATA PELAJARAN</th>
                                        <th>NAMA GURU</th>
                                        <th>KKM</th>
                                        <th>KATEGORI</th>
                                        <th>USERNAME</th>
                                        <th>PASSWORD</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($data_mata_pelajaran->result() as $row) {
                                            if($row->status_mapel == "wajib"){
                                        ?>
                                        <tr> 
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row->mata_pelajaran ?></td>
                                            <td><?php echo $row->nama_guru ?></td>
                                            <td><?php echo $row->kkm ?></td>
                                            <td><?php echo $row->status_mapel ?></td>
                                            <td><?php echo $row->username ?></td>
                                            <td><?php echo $row->password ?></td>
                                            <td>
                                            	<a href="<?php echo base_url()?>index.php/pengaturan/edit_mata_pelajaran/<?php echo $row->id_guru ?>" class="btn btn-xs btn-info">
                            						<i class="ace-icon fa fa-pencil bigger-120"></i>
                            					</a>
                            				</td>

                                        </tr>
                                        <?php
                                            $i++;
                                		    }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                           
                                <h2 style="text-transform: uppercase;">Daftar Mata Pelajaran Pilihan</h2>

                                <table>
                                    <thead>
                                        <tr> 
                                            <th>NO</th>
                                            <th>NAMA MATA PELAJARAN</th>
                                            <th>NAMA GURU</th>
                                            <th>KKM</th>
                                            <th>KATEGORI</th>
                                            <th>USERNAME</th>
                                            <th>PASSWORD</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($data_mata_pelajaran->result() as $row) {
                                           if($row->status_mapel == "pilihan"){
                                        ?>
                                        <tr> 
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row->mata_pelajaran ?></td>
                                            <td><?php echo $row->nama_guru ?></td>
                                            <td><?php echo $row->kkm ?></td>
                                            <td><?php echo $row->status_mapel ?></td>
                                            <td><?php echo $row->username ?></td>
                                            <td><?php echo $row->password ?></td>
                                            <td>
                                            	<a href="<?php echo base_url()?>index.php/pengaturan/edit_mata_pelajaran/<?php echo $row->id_guru ?>" class="btn btn-xs btn-info">
                            						<i class="ace-icon fa fa-pencil bigger-120"></i>
                            					</a>
                            				</td>

                                        </tr>
                                        <?php
                                            $i++;
                                		    }
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
