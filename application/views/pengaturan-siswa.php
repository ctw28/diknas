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
                            <li class="">
                                <a href="<?php echo base_url()?>index.php/pengaturan/mata_pelajaran">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mata Pelajaran
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="active">
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
                            <li class="active">Penilaian Sikap</li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <a style="color:white;" href="<?php echo base_url()?>index.php/pengaturan/tambah_siswa" id="demo-delete-row" class="btn btn-primary">
                                    <i class="fa fa-plus m-r-5"></i>
                                Tambah Siswa
                                </a>
                                <div class="widget-box widget-color-green2 m-b-10" id="widget-box-2" data-color="#2E8965">
                                    <div class="widget-header text-center">
                                        <h3 class="widget-title bigger lighter">
                                            Daftar Siswa
                                        </h3>                                            
                                    </div>
                                    <div class="widget-body m-b-10">
                                        <div class="widget-main no-padding ">
                                            <table id="tblData">
                                                <thead>
                                                    <tr> 
                                                        <th>NO</th>
                                                        <th>NO. INDUK</th>
                                                        <th>NAMA SISWA</th>
                                                        <th>AKSI</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $i = 1;
                                                        foreach ($data_siswa->result() as $row) {
                                                    ?>
                                                    <tr> 
                                                        <td><?php echo $i; ?></td>
                                	                    <td><?php echo $row->no_induk ?></td>
                                	                    <td><?php echo $row->nama_siswa ?></td>
                                	                    <td>
                                	                    	<a href="<?php echo base_url()?>index.php/pengaturan/edit_siswa/<?php echo $row->id_siswa ?>" class="btn btn-xs btn-info">
                                								<i class="ace-icon fa fa-pencil bigger-120"></i>
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
