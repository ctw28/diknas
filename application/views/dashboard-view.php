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
                                    <?php echo $logged_in_data['nama'];?>
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
                <b><?php echo $logged_in_data['nama'];?></b><br>
                <b>Wali Kelas : XII.A</b><br>
                    
                </div>
            </div><!-- /.sidebar-shortcuts -->
                <ul class="nav nav-list">
                    <li class="">
                        <a href="<?php echo base_url()?>index.php/dashboard"><i class="menu-icon fa fa-tachometer"></i>
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
                                <a href="<?php echo base_url()?>index.php/pengaturan/mata_pelajaran"><i class="menu-icon fa fa-caret-right"></i>
                                    Mata Pelajaran
                                </a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url()?>index.php/pengaturan/siswa"><i class="menu-icon fa fa-caret-right"></i>
                                    Siswa
                                </a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul><!-- /.nav-list -->
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
                            <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
                                <div class="widget-box widget-color-green2" id="widget-box-2" data-color="#2E8965">
                                    <div class="widget-header">
                                        <h5 class="widget-title bigger lighter"><i class="ace-icon fa fa-pie-chart"></i>Ringkasan Data</h5>
                                    </div>

                                    <div class="widget-body" style="text-align: center;">
                                        <!-- <div class="widget-main" > -->
                                        <div class="col-md-4 col-xs-4" style="color:  #2E8965; margin-top: 25px;">
                                            <div class="infobox-progress">
                                                <h3 style="margin:0 !important;"><i class="fa fa-child"></i> <?php echo $data_siswa->num_rows() ?> <br> TOTAL SISWA</h3>
                                            </div>
                                            <div class="infobox-data"></div>
                                        </div>
                                        <div class="col-md-4 col-xs-4" style="color:  #2E8965; margin-top: 25px;">
                                            <div class="infobox-progress">
                                                <h3 style="margin:0 !important;"><i class="fa fa-book"></i> <?php echo $data_mata_pelajaran->num_rows() ?> <br> TOTAL MATA PELAJARAN WAJIB</h3>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-4" style="color:  #2E8965; margin-top: 25px;">
                                            <div class="infobox-progress">
                                                <h3 style="margin:0 !important;"><i class="fa fa-tasks"></i> <?php echo $data_mata_pelajaran->num_rows() ?> <br> TOTAL MATA PELAJARAN PILIHAN</h3>
                                            </div>
                                        </div>                               
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                                                              
                            <div class="col-xs-12">
                                <div class="col-sm-6">
                                    <div class="col-xs-12 col-sm-12 widget-container-col m-t-25" id="widget-container-col-2">
                                        <div class="widget-box widget-color-green2" id="widget-box-2" data-color="#2E8965">
                                            <div class="widget-header">
                                                <h5 class="widget-title bigger lighter"><i class="ace-icon fa fa-table"></i>
                                                    Daftar Mata Pelajaran Wajib 
                                                </h5>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <table>
                                                        <thead>
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
                                                            <tr>
                                                                <td><?php echo $i ?></td>
                                                                <td class="text-left">
                                                                    <a href="<?php echo base_url()?>index.php/hasil/tampil/<?php echo $row->id_guru ?>">
                                                                    <?php echo $row->mata_pelajaran ?>
                                                                    </a>
                                                                </td>
                                                                <td class="text-left"><?php echo $row->nama_guru ?></td>
                                                                
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
                                    </div><!-- /.col-xs-12 -->
                                    <div class="col-xs-12 col-sm-12 widget-container-col m-t-25" id="widget-container-col-2">
                                        <div class="widget-box widget-color-green2" id="widget-box-2">
                                            <div class="widget-header">
                                                <h5 class="widget-title bigger lighter"><i class="ace-icon fa fa-table"></i>
                                                    Daftar Mata Pelajaran Pilihan
                                                </h5>                                                
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <table>
                                                        <thead>
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
                                                            <tr>
                                                                <td><?php echo $i ?></td>
                                                                <td class="text-left">
                                                                    <a href="<?php echo base_url()?>index.php/hasil/tampil/<?php echo $row->id_guru ?>">
                                                                    <?php echo $row->mata_pelajaran ?>
                                                                    </a>
                                                                </td>
                                                                <td class="text-left"><?php echo $row->nama_guru ?></td>
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
                                    </div><!-- /.col-xs-12 -->
                                </div> <!-- end container daftar mapel wajib dan pilihan -->


                                <div class="col-xs-12 col-sm-6 widget-container-col m-t-25" id="widget-container-col-2">
                                    <div class="widget-box widget-color-green2 m-b-10" id="widget-box-2" data-color="#2E8965">
                                        <div class="widget-header">
                                            <h5 class="widget-title bigger lighter"><i class="ace-icon fa fa-table"></i>
                                                Daftar Siswa
                                            </h5>                                            
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <table id="tblData">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>No Induk</th>
                                                            <th>Nama Siswa</th>
                                                            <th>Cetak Nilai</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        foreach ($data_siswa->result() as $row) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $row->no_induk ?></td>
                                                            <td class="text-left"><?php echo $row->nama_siswa ?></td>
                                                            <td>
                                                                <a href="<?php echo base_url()?>index.php/hasil/cetak/<?php echo $row->id_siswa ?>" class="btn btn-xs btn-success"><i class="ace-icon fa fa-print bigger-120"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end widget-main -->
                                        </div> <!-- end widget-body -->
                                    </div> <!-- end widget-box -->
                                    <!-- untuk pagination -->
                                    <div class="pull-right" id="pagination"></div>
                                </div><!-- end container daftar siswa -->
                            </div> <!-- end container semua daftar -->
                        <!-- PAGE CONTENT ENDS -->
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

        <script>
        $(document).ready(function(){
            var totalRows = $('#tblData').find('tbody tr:has(td)').length;
            var recordPerPage = 10;
            var totalPages = Math.ceil(totalRows / recordPerPage);
            var $pages = $('<div id="pages">Halaman </div>');
            
            for (i = 0; i < totalPages; i++) {
                $('<span class="pageNumber" id="'+i+'">' + (i + 1) + '</span>').appendTo($pages);
            }
            $pages.appendTo('#pagination');

            $('#0').addClass('focus_active');

            $('.pageNumber').hover(
                function() {
                  $(this).addClass('focus');
                },
                function() {
                  $(this).removeClass('focus');
                }
            );

            $('#tblData').find('tbody tr:has(td)').hide();
            var tr = $('#tblData tbody tr:has(td)');
            for (var i = 0; i <= recordPerPage - 1; i++) {
              $(tr[i]).show();
            }
            $('.pageNumber').click(function(event) {

                // $('.pageNumber').addClass('focus');
                $('.pageNumber').removeClass('focus_active');
                pagenya = $(this).attr('id');
                console.log('#'+pagenya);
                $('#'+pagenya).addClass('focus_active');
                $('#tblData').find('tbody tr:has(td)').hide();
                var nBegin = ($(this).text() - 1) * recordPerPage;
                var nEnd = $(this).text() * recordPerPage - 1;
                for (var i = nBegin; i <= nEnd; i++) {
                    $(tr[i]).show();
                }
            });
        });
        </script>

    </body>
</html>
