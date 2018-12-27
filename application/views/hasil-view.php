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
                            <li><a href="<?php echo base_url()?>index.php/sikap">Hasil Penilaian</a></li>
                            
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="col-xs-12 col-sm-12 widget-container-col" id="widget-container-col-2">
                                    <div class="widget-box widget-color-green2 text-center" id="widget-box-2" data-color="#2E8965" >
                                        <div class="widget-header">
                                            <h5 class="widget-title bigger lighter">
                                                Daftar Nilai <?php 
                                                $aaa = 1;
                                                foreach ($data_pengetahuan->result() as $row) {
                                                    if ($aaa==1) {
                                                    echo "Mata Pelajaran : $row->mata_pelajaran</h5>";
                                                    echo "<h5>Nama Guru : $row->nama_guru</h5>";
                                                    }
                                                    $aaa++;
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div><!-- /.widget-container-col -->

                                <div class="col-sm-12">
                                    <table class="tabel-nilai">
                                        <thead>
                                            <tr> 
                                                <th rowspan="2">NO</th>
                                                <th rowspan="2">NO INDUK</th>
                                                <th rowspan="2">NAMA</th>
                                                <th colspan="3">NILAI</th>
                                                <th rowspan="2">AKSI</th>
                                            </tr>
                                            <tr style="background-color: white !important">
                                                <th>PENGETAHUAN</th>
                                                <th>KETERAMPILAN</th>
                                                <th>SIKAP</th>                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $i  = 1;
                                            $no = 1;
                                            $j  = 0;
                                            $nil_kd1 = 0;
                                            $nil_kd2 = 0;
                                            $nil_kd3 = 0;
                                            $nil_kd4 = 0;
                                            $nil_kd5 = 0;
                                            $nil_kd6 = 0;
                                            $nil_kd7 = 0;
                                            $nil_kd8 = 0;
                                            $nil_kd9 = 0;
                                            $nil_kd10 = 0;
                                            $nilai = 0;
                                            $nilai_uas = 0;
                                            $nilai_uts = 0;
                                            $kd1 = [];
                                            $kd2 = [];
                                            $kd3 = [];
                                            $kd4 = [];
                                            $kd5 = [];
                                            $kd6 = [];
                                            $kd7 = [];
                                            $kd8 = [];
                                            $kd9 = [];
                                            $kd10 = []; 
                                            $rerata = [];
                                            $nilai_pengetahuan = [];
                                            $predikatnya = [];
                                            $status = [];
                                            $predikat = '';
                                            $rata = 0;
                                            $label = '';
                                            $lulus = 'T';

                                            foreach ($data_pengetahuan->result() as $row) {
                                                $nil_kd1 = $nil_kd1 + $row->kd1;
                                                $nil_kd2 = $nil_kd2 + $row->kd2;
                                                $nil_kd3 = $nil_kd3 + $row->kd3;
                                                $nil_kd4 = $nil_kd4 + $row->kd4;
                                                $nil_kd5 = $nil_kd5 + $row->kd5;
                                                $nil_kd6 = $nil_kd6 + $row->kd6;
                                                $nil_kd7 = $nil_kd7 + $row->kd7;
                                                $nil_kd8 = $nil_kd8 + $row->kd8;
                                                $nil_kd9 = $nil_kd9 + $row->kd9;
                                                $nil_kd10 = $nil_kd10 + $row->kd10;

                                                if($i==1){
                                                    $nilai_uas = $row->uas;
                                                    $nilai_uts = $row->uts;
                                                } //end if
                                                
                                                if($i==4){
                                                    $kd1[$j] = $nil_kd1/3;
                                                    $kd2[$j] = $nil_kd2/3;
                                                    $kd3[$j] = $nil_kd3/3;
                                                    $kd4[$j] = $nil_kd4/3;
                                                    $kd5[$j] = $nil_kd5/3;
                                                    $kd6[$j] = $nil_kd6/3;
                                                    $kd7[$j] = $nil_kd7/3;
                                                    $kd8[$j] = $nil_kd8/3;
                                                    $kd9[$j] = $nil_kd9/3;
                                                    $kd10[$j] = $nil_kd10/3;

                                                    $rata = ($kd1[$j] + $kd2[$j] + $kd3[$j] + $kd4[$j] + $kd5[$j] + $kd6[$j] + $kd7[$j] + $kd8[$j] + $kd9[$j] +  $kd10[$j])/10;
                                                    $nilai = ($rata+ $nilai_uas + $nilai_uts)/3;

                                                    if($nilai >=93 && $nilai<=100){
                                                        $predikat = 'A';
                                                        $label = 'label-success';
                                                        $lulus ="T";
                                                    }
                                                    else if($nilai >=85 && $nilai < 92){
                                                        $predikat = 'B';
                                                        $label = 'label-success';
                                                        $lulus ="T";
                                                    }
                                                    else if($nilai >=75 && $nilai < 84){
                                                        $predikat = 'C';
                                                        $label = 'label-warning';
                                                        $lulus ="T";
                                                    }
                                                    else {
                                                        $predikat = 'D';
                                                        $label = 'label-danger';
                                                        $lulus ="TT";
                                                    }

                                                    $rerata[$j] = $rata;
                                                    $nilai_pengetahuan[$j] = $nilai;
                                                    $predikatnya[$j] = $predikat;
                                                    $status[$j] = $lulus;

                                                    $nil_kd1 = 0;
                                                    $nil_kd2 = 0;
                                                    $nil_kd3 = 0;
                                                    $nil_kd4 = 0;
                                                    $nil_kd5 = 0;
                                                    $nil_kd6 = 0;
                                                    $nil_kd7 = 0;
                                                    $nil_kd8 = 0;
                                                    $nil_kd9 = 0;
                                                    $nil_kd10 = 0;
                                                    $nilai = 0;
                                                    $rata = 0;
                                                    $i = 1;
                                                    $j++;
                                                } // end if
                                                else{
                                                    $i++;
                                                } 
                                            } // end foreach

                                            $i = 1;
                                            $j = 0;
                                            $no = 1;
                                            $nilai_keterampilan = [];
                                            $predikat = '';
                                            $lulus = '';

                                            foreach ($data_keterampilan->result() as $row) {
                                                $nilai_keterampilan[$j] = ($row->k1 + $row->k2 + $row->k3 + $row->k4 + $row->k5 + $row->k6 + $row->k7 + $row->k8 + $row->k9 + $row->k10)/30*100;
                                                if($nilai_keterampilan[$j] >=93 && $nilai_keterampilan[$j]<=100){
                                                    $predikat = 'A';
                                                    $label = 'label-success';
                                                    $lulus ="T";
                                                }
                                                else if($nilai_keterampilan[$j] >=85 && $nilai_keterampilan[$j] < 92){
                                                    $predikat = 'B';
                                                    $label = 'label-success';
                                                    $lulus ="T";
                                                }
                                                else if($nilai_keterampilan[$j] >=75 && $nilai_keterampilan[$j] < 84){
                                                    $predikat = 'C';
                                                    $label = 'label-warning';
                                                    $lulus ="T";
                                                }
                                                else {
                                                    $predikat = 'D';
                                                    $label = 'label-danger';
                                                    $lulus ="TT";
                                                }                                                     
                                                $j++;
                                                $i++; 
                                                $no++;
                                            }

                                            $i = 1;
                                            $no = 1;
                                            $gg = 0;
                                            $nil_kd1_sikap = 0;
                                            $nil_kd2_sikap = 0;
                                            $nil_kd3_sikap = 0;
                                            $nil_kd4_sikap = 0;
                                            $nil_kd5_sikap = 0;
                                            $nil_kd6_sikap = 0;
                                            $nil_kd7_sikap = 0;
                                            $nil_kd8_sikap = 0;
                                            $nil_kd9_sikap = 0;
                                            $nil_kd10_sikap = 0;
                                            $nilai_sikap = 0;
                                            $kd1_sikap = [];
                                            $kd2_sikap = [];
                                            $kd3_sikap = [];
                                            $kd4_sikap = [];
                                            $kd5_sikap = [];
                                            $kd6_sikap = [];
                                            $kd7_sikap = [];
                                            $kd8_sikap = [];
                                            $kd9_sikap = [];
                                            $kd10_sikap = []; 
                                            $rerata_sikap = [];
                                            $predikatnya_sikap = [];
                                            $rata_sikap = 0;
                                            $label_sikap = '';

                                        foreach ($data_sikap->result() as $row) {
                                            $nil_kd1_sikap = $nil_kd1_sikap + $row->sikap1;
                                            $nil_kd2_sikap = $nil_kd2_sikap + $row->sikap2;
                                            $nil_kd3_sikap = $nil_kd3_sikap + $row->sikap3;
                                            $nil_kd4_sikap = $nil_kd4_sikap + $row->sikap4;
                                            $nil_kd5_sikap = $nil_kd5_sikap + $row->sikap5;
                                            $nil_kd6_sikap = $nil_kd6_sikap + $row->sikap6;
                                            $nil_kd7_sikap = $nil_kd7_sikap + $row->sikap7;
                                            $nil_kd8_sikap = $nil_kd8_sikap + $row->sikap8;
                                            $nil_kd9_sikap = $nil_kd9_sikap + $row->sikap9;
                                            $nil_kd10_sikap = $nil_kd10_sikap + $row->sikap10;

                                            if($i==6){
                                                $kd1_sikap[$gg] = $nil_kd1_sikap/16*100;
                                                $kd2_sikap[$gg] = $nil_kd2_sikap/16*100;
                                                $kd3_sikap[$gg] = $nil_kd3_sikap/16*100;
                                                $kd4_sikap[$gg] = $nil_kd4_sikap/16*100;
                                                $kd5_sikap[$gg] = $nil_kd5_sikap/16*100;
                                                $kd6_sikap[$gg] = $nil_kd6_sikap/16*100;
                                                $kd7_sikap[$gg] = $nil_kd7_sikap/16*100;
                                                $kd8_sikap[$gg] = $nil_kd8_sikap/16*100;
                                                $kd9_sikap[$gg] = $nil_kd9_sikap/16*100;
                                                $kd10_sikap[$gg] = $nil_kd10_sikap/16*100;
                                                $rata_sikap = ($kd1_sikap[$gg] + $kd2_sikap[$gg] + $kd3_sikap[$gg] + $kd4_sikap[$gg] + $kd5_sikap[$gg] + $kd6_sikap[$gg] + $kd7_sikap[$gg] + $kd8_sikap[$gg] + $kd9_sikap[$gg] +  $kd10_sikap[$gg])/10;
                                                $nilai_sikap = $rata_sikap;

                                                if($nilai_sikap >=85 && $nilai_sikap<=100){
                                                    $predikat_sikap = 'A';
                                                    $label_sikap = 'label-success';
                                                    $lulus ="LULUS";
                                                }
                                                else if($nilai_sikap >=75 && $nilai_sikap < 85){
                                                    $predikat_sikap = 'B';
                                                    $label_sikap = 'label-success';
                                                    $lulus ="LULUS";
                                                }
                                                else if($nilai_sikap >=65 && $nilai_sikap < 75){
                                                    $predikat_sikap = 'C';
                                                    $label_sikap = 'label-warning';
                                                    $lulus ="LULUS";
                                                }
                                                else if($nilai_sikap >=45 && $nilai_sikap < 65){
                                                    $predikat_sikap = 'D';
                                                    $label_sikap = 'label-warning';
                                                    $lulus ="TIDAK LULUS";
                                                }
                                                else{
                                                    $lulus ="TIDAK LULUS";
                                                    $predikat_sikap = 'E';
                                                    $label_sikap = 'label-danger';
                                                }

                                                $rerata_sikap[$gg] = $nilai_sikap;
                                                $predikatnya_sikap[$gg] = $predikat_sikap;
                                                $nil_kd1_sikap = 0;
                                                $nil_kd2_sikap = 0;
                                                $nil_kd3_sikap = 0;
                                                $nil_kd4_sikap = 0;
                                                $nil_kd5_sikap = 0;
                                                $nil_kd6_sikap = 0;
                                                $nil_kd7_sikap = 0;
                                                $nil_kd8_sikap = 0;
                                                $nil_kd9_sikap = 0;
                                                $nil_kd10_sikap = 0;
                                                $nilai_sikap = 0;
                                                $rata_sikap = 0;
                                                $i = 1;
                                                $gg++;
                                            }
                                            else{
                                                $i++;
                                            } 
                                        }

                                        $i=1;
                                        $gg = 0;
                                        $no = 1;
                                        $j = 0;
                                        $nil_kd3 = 0;
                                        $nil_kd4 = 0;
                                        $nil_kd5 = 0;
                                        $nil_kd6 = 0;
                                        $nil_kd7 = 0;
                                        $nil_kd8 = 0;
                                        $nil_kd9 = 0;
                                        $nil_kd10 = 0;
                                        $nilai = 0;
                                        $nilai_uas = 0;
                                        $nilai_uts = 0;

                                        foreach ($data_pengetahuan->result() as $row) {
                                            if($i == 5) {
                                                $i = 1;
                                                $no = $no - 3;
                                            }
                                            if($i == 1){
                                        ?>
                                                <tr style="text-align: left !important;"> 
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row->no_induk ?></td>
                                                    <td class="nama"><?php echo $row->nama_siswa ?></td>
                                                    <td><?php echo number_format($nilai_pengetahuan[$j]) ?></td>
                                                    <td><?php echo number_format($nilai_keterampilan[$j]) ?></td>
                                                    <td><?php echo number_format($rerata_sikap[$j]) ?></td>
                                                    <td>
                                                        <a type="button" title="Lihat Detail <?php echo $row->nama_siswa ?>" data-toggle="modal" data-target="#myModal" title="Lihat Detail" id="<?php echo $row->id_siswa ?>" class="btn btn-xs btn-primary">
                                                            <i class="ace-icon fa fa-eye bigger-120"></i>
                                                        </a>
                                                        <a href="<?php echo base_url()?>index.php/hasil/cetak_detail/<?php echo $row->id_guru ?>/<?php echo $row->id_siswa ?>" title="Cetak Detail <?php echo $row->nama_siswa ?>" id="<?php echo $row->no_induk ?><?php echo $i ?>kd1" class="btn btn-xs btn-success">
                                                            <i class="ace-icon fa fa-print bigger-120"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                        <?php 
                                                $j++;
                                            } // end if
                                        $i++; 
                                        $no++;
                                        } // end foreach
                                        ?>
                                        </tbody>
                                    </table>
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

        <!-- Modal Untuk Lihat Detail Nilai -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title" style="text-align: center;">Detail Nilai <b><span id="detail_nama"></span></b></h4>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center;"><b>Mata Pelajaran : <?php echo $row->mata_pelajaran ?></b></p>
                        <ul class="nav nav-tabs" id="myTab" >
                            <li class="active" style="background-color: red;">
                                <a data-toggle="tab" href="#pengetahuan">Pengetahuan</a>
                            </li>
                            <li>
                                <a style="background-color: yellow !important; color:black" data-toggle="tab" href="#keterampilan">
                                    Keterampilan
                                </a>
                            </li>
                            <li>
                                <a style="background-color: #2E8965 !important; color:white" data-toggle="tab" href="#sikap">
                                    Sikap
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="pengetahuan" class="tab-pane fade in active">
                                <table>
                                    <thead style="background-color: #2E8965; color:white">
                                        <tr>
                                            <th>Kompetensi</th>
                                            <th>P 1</th>
                                            <th>P 2</th>
                                            <th>P 3</th>
                                            <th>Rata-Rata</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detail-nilai">
                                        <!-- ini diisi menggunakan ajax -->
                                    </tbody>
                                </table>
                            </div>

                            <div id="keterampilan" class="tab-pane fade">
                                <table>
                                    <thead style="background-color: #2E8965; color:white">
                                        <tr>
                                            <th>Kinerja</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detail-keterampilan">
                                        <!-- ini diisi menggunakan ajax -->
                                    </tbody>
                                </table>
                            </div>

                            <div id="sikap" class="tab-pane fade">
                                <table>
                                    <thead style="background-color: #2E8965; color:white">
                                        <tr>
                                            <th>Sikap</th>
                                            <th>PP</th>
                                            <th>PS</th>
                                            <th>PD</th>
                                            <th>PBJ</th>
                                            <th>PKJ</th>
                                            <th>PPD</th>
                                            <th>Rata-Rata</th>
                                        </tr>
                                    </thead>
                                    <tbody id="detail-sikap">
                                        <!-- ini diisi menggunakan ajax -->
                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- end tab content -->

                    </div> <!-- end modal body -->
                    <div class="modal-footer">
                        <p style="float: left; text-align: left;">Ket : <br>P = Pertemuan, K = Kinerja, S = Sikap</p>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div> <!-- end modal content -->
            </div>
        </div>



        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>


        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/ace.min.js"></script>

        <script>
        $(document).ready(function(){

            // untuk tombol update nilai menggunakan ajax
            $('a[type=button]').on('click', function(){
                var btn = $(this).attr('id');
                $.ajax({
                    url: "<?php echo base_url() ?>index.php/pengetahuan/get_pengetahuan/<?php echo $kunci ?>/"+btn,
                    type: "POST",
                    dataType: 'json',
                    success: function(data){
                        isinya = '';
                        warna_1 = '';
                        warna_2 = '';
                        warna_3 = '';
                        warna_rerata = '';
                        warna_total = '';
                        warna_uts = '';
                        warna_uas = '';
                        warna_nilai_akhir = '';
                        nilai_pengetahuan = 0;
                        no=1;
                        rerata = 0;
                        total = 0;
                        for(var i=1; i<=10; i++){
                            pertemuan1 = data['kd'+i][0];
                            pertemuan2 = data['kd'+i][1];
                            pertemuan3 = data['kd'+i][2];

                            rerata = ((parseInt(pertemuan1)+parseInt(pertemuan2)+parseInt(pertemuan3))/3).toFixed(0);
                            if(data['kd'+i][0] < 75)
                                warna_1 = 'red';
                            else
                                warna_1 = '';

                            if(data['kd'+i][1] < 75)
                                warna_2 = 'red';
                            else
                                warna_2 = '';
                            if(data['kd'+i][2] < 75)
                                warna_3 = 'red';
                            else
                                warna_3 = '';
                            if(rerata < 75)
                                warna_rerata = 'red';
                            else
                                warna_rerata = 'green';

                            isinya +="<tr>";
                            isinya +="<td>KD "+no+"</td>";
                            isinya +="<td style='color:"+warna_1+"'>"+data['kd'+i][0]+"</td>";
                            isinya +="<td style='color:"+warna_2+"'>"+data['kd'+i][1]+"</td>";
                            isinya +="<td style='color:"+warna_3+"'>"+data['kd'+i][2]+"</td>";
                            isinya +="<td style='color:"+warna_rerata+"'><b>"+rerata+"</b></td>";
                            isinya +="</tr>";
                            no++;
                            total = parseInt(total) + parseInt(rerata); 
                        }
                        document.getElementById('detail_nama').innerHTML = data['nama'];
                        nilai_pengetahuan = ((total/10)+parseInt(data['uts'])+parseInt(data['uas']))/3;
                            if((total/10) < 75)
                                warna_total = 'red';
                            else
                                warna_total = 'green';
                            if(data['uts'] < 75)
                                warna_uts = 'red';
                            else
                                warna_uts = 'green';
                            if(data['uas'] < 75)
                                warna_uas = 'red';
                            else
                                warna_uas = 'green';
                            if(nilai_pengetahuan < 75)
                                warna_nilai_akhir = 'red';
                            else
                                warna_nilai_akhir = 'green';

                        isinya +="<tr>";
                        isinya +="<td colspan=4>RATA-RATA TOTAL</td>";
                        isinya +="<td style='color:"+warna_total+"'><b>"+total/10+"</b></td>";
                        isinya +="</tr>";
                        isinya +="<tr>";
                        isinya +="<td colspan=4>NILAI UTS</td>";
                        isinya +="<td style='color:"+warna_uts+"'><b>"+data['uts']+"</b></td>";
                        isinya +="</tr>";
                        isinya +="<tr>";
                        isinya +="<td colspan=4>NILAI UAS</td>";
                        isinya +="<td style='color:"+warna_uas+"'><b>"+data['uas']+"</b></td>";
                        isinya +="</tr>";
                        isinya +="<tr>";
                        isinya +="<td colspan=4><b>NILAI PENGETAHUAN</b></td>";
                        isinya +="<td style='color:"+warna_nilai_akhir+"'><b>"+nilai_pengetahuan.toFixed(0)+"</b></td>";
                        isinya +="</tr>";

                        document.getElementById('detail-nilai').innerHTML = isinya;
                    },
                    error: function(){
                        alert('ada kesalahan jaringan');
                    }
                }); 

                $.ajax({
                    url: "<?php echo base_url() ?>index.php/keterampilan/get_keterampilan/<?php echo $kunci ?>/"+btn,
                    type: "POST",
                    dataType: 'json',
                    success: function(data){
                        isinya = '';
                        warna_1 = '';
                        nilai_keterampilan = 0;
                        warna_nilai_akhir = '';
                        nil_keterampilan = 0;

                        no=1;
                        rerata = 0;
                        total = 0;
                        for(var i=1; i<=10; i++){
                            nil_keterampilan = data['k'+i]/3*100;
                            console.log('nilai keterampilan  = '+nil_keterampilan);
                            if(nil_keterampilan < 75)
                                warna_1 = 'red';
                            else
                                warna_1 = 'green';


                            isinya +="<tr>";
                            isinya +="<td>K"+no+"</td>";
                            isinya +="<td style='color:"+warna_1+"'>"+nil_keterampilan.toFixed(0)+"</td>";
                            isinya +="</tr>";
                            no++;
                            total = parseInt(total) + parseInt(nil_keterampilan); 
                        }

                        nilai_keterampilan = total/10;
                        if(nilai_keterampilan < 75)
                            warna_nilai_akhir = 'red';
                        else
                            warna_nilai_akhir = 'green';

                        isinya +="<tr>";
                        isinya +="<td><b>NILAI KETERAMPILAN</b></td>";
                        isinya +="<td style='color:"+warna_nilai_akhir+"'><b>"+nilai_keterampilan.toFixed(0)+"</b></td>";
                        isinya +="</tr>";

                        document.getElementById('detail-keterampilan').innerHTML = isinya;
                    },
                    error: function(){
                        alert('ada kesalahan jaringan');
                    }
                }); 

                $.ajax({
                    url: "<?php echo base_url() ?>index.php/sikap/get_sikap/<?php echo $kunci ?>/"+btn,
                    type: "POST",
                    // data: $('#'+($(this).attr('id')).slice(0,-3)).serialize(),
                    dataType: 'json',
                    success: function(data){
                        // $('#'+siswanya+'uas_1').val()
                        isinya = '';
                        warna_1 = '';
                        warna_2 = '';
                        warna_3 = '';
                        warna_4 = '';
                        warna_5 = '';
                        warna_6 = '';
                        warna_rerata = '';
                        warna_total = '';
                        warna_nilai_akhir = '';
                        nilai_sikap = 0;
                        no=1;
                        rerata = 0;
                        total = 0;
                        for(var i=1; i<=10; i++){
                            sikap1 = data['s'+i][0];
                            sikap2 = data['s'+i][1];
                            sikap3 = data['s'+i][2];
                            sikap4 = data['s'+i][3];
                            sikap5 = data['s'+i][4];
                            sikap6 = data['s'+i][5];

                            rerata = ((parseInt(sikap1)+parseInt(sikap2)+parseInt(sikap3)+parseInt(sikap4)+parseInt(sikap5)+parseInt(sikap6))/16*100).toFixed(0);
                            if(data['s'+i][0]/2*100 < 75)
                                warna_1 = 'red';
                            else
                                warna_1 = '';

                            if(data['s'+i][1]/3*100 < 75)
                                warna_2 = 'red';
                            else
                                warna_2 = '';

                            if(data['s'+i][2]/2*100 < 75)
                                warna_3 = 'red';
                            else
                                warna_3 = '';

                            if(data['s'+i][3]/2*100 < 75)
                                warna_4 = 'red';
                            else
                                warna_4 = '';

                            if(data['s'+i][4]/4*100 < 75)
                                warna_5 = 'red';
                            else
                                warna_5 = '';

                            if(data['s'+i][5]/3*100 < 75)
                                warna_6 = 'red';
                            else
                                warna_6 = '';

                            if(rerata < 75)
                                warna_rerata = 'red';
                            else
                                warna_rerata = 'green';

                            isinya +="<tr>";
                            isinya +="<td>S"+no+"</td>";
                            isinya +="<td style='color:"+warna_1+"'>"+data['s'+i][0]/2*100+"</td>";
                            isinya +="<td style='color:"+warna_2+"'>"+data['s'+i][1]/3*100+"</td>";
                            isinya +="<td style='color:"+warna_3+"'>"+data['s'+i][2]/2*100+"</td>";
                            isinya +="<td style='color:"+warna_4+"'>"+data['s'+i][3]/2*100+"</td>";
                            isinya +="<td style='color:"+warna_5+"'>"+data['s'+i][4]/4*100+"</td>";
                            isinya +="<td style='color:"+warna_6+"'>"+data['s'+i][5]/3*100+"</td>";
                            isinya +="<td style='color:"+warna_rerata+"'><b>"+rerata+"</b></td>";
                            isinya +="</tr>";
                            no++;
                            total = parseInt(total) + parseInt(rerata); 
                        }
                        nilai_sikap = total/10;
                            if((total) < 75)
                                warna_total = 'red';
                            else
                                warna_total = 'green';

                            if(nilai_sikap < 75)
                                warna_nilai_akhir = 'red';
                            else
                                warna_nilai_akhir = 'green';

                        isinya +="<tr>";
                        isinya +="<td colspan=7>RATA-RATA TOTAL</td>";
                        isinya +="<td style='color:"+warna_total+"'><b>"+total/10+"</b></td>";
                        isinya +="</tr>";
                        isinya +="<td colspan=7><b>NILAI SIKAP</b></td>";
                        isinya +="<td style='color:"+warna_nilai_akhir+"'><b>"+nilai_sikap.toFixed(0)+"</b></td>";
                        isinya +="</tr>";

                        document.getElementById('detail-sikap').innerHTML = isinya;
                    },
                    error: function(){
                        alert('ada kesalahan jaringan');
                    }
                }); 
            });
        });
        </script>

    </body>
</html>
