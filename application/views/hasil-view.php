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
                            <li class="active">Penilaian Sikap</li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                        


<?php 
$aaa = 1;
foreach ($data_pengetahuan->result() as $row) {
    if ($aaa==1) {
    echo "<h2 style='text-transform: uppercase;'>Mata Pelajaran : $row->mata_pelajaran</h2>";
    echo "<h3>Nama Guru : $row->nama_guru</h3>";
    }
    $aaa++;
}
?>


                            <div class="col-sm-6">
                                

        <table border="0" cellpadding="5" id="simple-table" align="center" class="table  table-bordered table-hover">
            <thead>
                <tr> 
                    <th></th>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NILAI</th>
                    <th>PREDIKAT</th>
                    <th>DESKRIPSI</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $i = 1;
                        $no = 1;
                        $gg = 0;
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
                        $predikat = 'E';
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
                        $rata = 0;

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

                        }
                        
                        
                        if($i==3){
                            $kd1[$gg] = $nil_kd1/3;
                            $kd2[$gg] = $nil_kd2/3;
                            $kd3[$gg] = $nil_kd3/3;
                            $kd4[$gg] = $nil_kd4/3;
                            $kd5[$gg] = $nil_kd5/3;
                            $kd6[$gg] = $nil_kd6/3;
                            $kd7[$gg] = $nil_kd7/3;
                            $kd8[$gg] = $nil_kd8/3;
                            $kd9[$gg] = $nil_kd9/3;
                            $kd10[$gg] = $nil_kd10/3;
                            $rata = ($kd1[$gg] + $kd2[$gg] + $kd3[$gg] + $kd4[$gg] + $kd5[$gg] + $kd6[$gg] + $kd7[$gg] + $kd8[$gg] + $kd9[$gg] +  $kd10[$gg])/10;
                            $nilai = ($rata+ $nilai_uts + $nilai_uas)/3;

                            if($nilai >=85 && $nilai<=100)
                            $predikat = 'A';
                            else if($nilai >=75 && $nilai < 85)
                            $predikat = 'B';
                            else if($nilai >=65 && $nilai < 75)
                            $predikat = 'C';
                            else if($nilai >=45 && $nilai < 65)
                            $predikat = 'D';
                            else
                            $predikat = 'E';

                            $rerata[$gg] = $rata;
                            $nilai_pengetahuan[$gg] = $nilai;
                            $predikatnya[$gg] = $predikat;
                            // echo $kd1[$gg];
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
                            $gg++;
                        }
                        else{

                        $i++;
                        } 
                    }

$i=1;
$nil_kd1 = 0;
$gg = 0;
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
                        foreach ($data_pengetahuan->result() as $row) {
                        
                        if($i == 4) {
                            $i = 1;
                            $no = $no - 2;

                        }
                        if($i == 1){
                    ?>
                    <tr> 
                        <td><a href="#" class="green bigger-140 show-details-btn" title="Lihat Detail"><i class="ace-icon fa fa-angle-double-down" id="<?php echo $row->no_induk ?>"></i></a></td>
                        <td><?php echo $no ?></td>
                        <td class="nama"><?php echo $row->nama_siswa ?></td>
                        <td ><input type="number" id="<?php echo $row->no_induk ?>nilaipengetahuan" readonly="" value="<?php echo $nilai_pengetahuan[$gg] ?>"></td>
                        <td><span id="<?php echo $row->no_induk ?>predikat" class="label label-sm label-success"> <?php echo $predikatnya[$gg] ?> </span></td>
                        <td><textarea></textarea></td>
                    </tr>
                    <?php 
                    $gg++;
                        }
                    ?>
                    <!-- <form action="pengetahuan/edit/<?php echo $row->id_pengetahuan?>" method="post" > -->
                   
                        


                        <!-- <tr class="<?php echo $row->no_induk ?>" style="display: none;"> 
                            <td></td>
                            <td></td>
                            <td>Remedial</td>
                            <input type="hidden" name="id" value="<?php echo $row->id_pengetahuan ?>">
                            <td><input type="number" name="kd1" id="<?php echo $row->no_induk ?>kd1_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd2" id="<?php echo $row->no_induk ?>kd2_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd3" id="<?php echo $row->no_induk ?>kd3_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd4" id="<?php echo $row->no_induk ?>kd4_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd5" id="<?php echo $row->no_induk ?>kd5_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd6" id="<?php echo $row->no_induk ?>kd6_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd7" id="<?php echo $row->no_induk ?>kd7_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd8" id="<?php echo $row->no_induk ?>kd8_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd9" id="<?php echo $row->no_induk ?>kd9_<?php echo $i; ?>" value="0"></td>
                            <td><input type="number" name="kd10" id="<?php echo $row->no_induk ?>kd0_<?php echo $i; ?>" value="0"></td>
                            <td>
                                <button type="button" id="<?php echo $row->no_induk ?><?php echo $i ?>kd1" class="btn btn-xs btn-success"><i class="ace-icon fa fa-pencil bigger-120"></i></button>
                            </td>
                                
                        </tr> -->
                    
                    <?php
                    $i++; $no++;
                        }
                    ?>
                </table>


                            </div>




<div class="col-sm-6">
                                

        <table border="0" cellpadding="5" id="simple-table" align="center" class="table  table-bordered table-hover">
            <thead>
                <tr> 
                    <th>NILAI KETERAMPILAN</th>
                    <th>PREDIKAT</th>
                    <th>DESKRIPSI</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $i = 1;
                        $no = 1;
                        $i = 1;
                        $nil_k1 = 0;
                        $nil_k2 = 0;
                        $nil_k3 = 0;
                        $nil_k4 = 0;
                        $nil_k5 = 0;
                        $nil_k6 = 0;
                        $nil_k7 = 0;
                        $nil_k8 = 0;
                        $nil_k9 = 0;
                        $nil_k10 = 0;
                        $nilai_keterampilan = 0;
                        $predikat_keterampilan = 'E';
                        foreach ($data_keterampilan->result() as $row) {
                            $nil_k1 = $nil_k1 + ($row->k1/2*100);
                            $nil_k2 = $nil_k2 + ($row->k2/2*100);
                            $nil_k3 = $nil_k3 + ($row->k3/2*100);
                            $nil_k4 = $nil_k4 + ($row->k4/2*100);
                            $nil_k5 = $nil_k5 + ($row->k5/2*100);
                            $nil_k6 = $nil_k6 + ($row->k6/2*100);
                            $nil_k7 = $nil_k7 + ($row->k7/2*100);
                            $nil_k8 = $nil_k8 + ($row->k8/2*100);
                            $nil_k9 = $nil_k9 + ($row->k9/2*100);
                            $nil_k10 = $nil_k10 + ($row->k10/2*100);

                            $nilai_keterampilan = ($nil_k1 + $nil_k2 + $nil_k3 + $nil_k4 + $nil_k5 + $nil_k6 + $nil_k7 + $nil_k8 + $nil_k9 + $nil_k10)/10;    


                            if($nilai_keterampilan >=85 && $nilai_keterampilan<=100)
                            $predikat_keterampilan = 'A';
                            else if($nilai_keterampilan >=75 && $nilai_keterampilan < 85)
                            $predikat_keterampilan = 'B';
                            else if($nilai_keterampilan >=65 && $nilai_keterampilan < 75)
                            $predikat_keterampilan = 'C';
                            else if($nilai_keterampilan >=45 && $nilai_keterampilan < 65)
                            $predikat_keterampilan = 'D';
                            else
                            $predikat_keterampilan = 'E';              
                    ?>
                    <tr> 
                        <td><?php echo $nilai_keterampilan ?></td>
                        <td><?php echo $predikat_keterampilan ?></td>
                        <td><textarea></textarea></td>
                    </tr>
                    <?php
                        $i++;
                            $no++;   
                            $nil_k1 = 0;
                        $nil_k2 = 0;
                        $nil_k3 = 0;
                        $nil_k4 = 0;
                        $nil_k5 = 0;
                        $nil_k6 = 0;
                        $nil_k7 = 0;
                        $nil_k8 = 0;
                        $nil_k9 = 0;
                        $nil_k10 = 0;
                        $nilai_keterampilan = 0;                     
                        }
                    ?>
                </table>


                            </div>


<table border="0" cellpadding="5" id="simple-table" align="center" class="table  table-bordered table-hover">
            <thead>
                <tr> 
                    <th></th>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>NILAI SIKAP</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $i = 1;
                        $no = 1;


$gg = 0;
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
                        $rata = 0;
                        $label = '';

                    foreach ($data_sikap->result() as $row) {
                        $nil_kd1 = $nil_kd1 + $row->sikap1;
                        $nil_kd2 = $nil_kd2 + $row->sikap2;
                        $nil_kd3 = $nil_kd3 + $row->sikap3;
                        $nil_kd4 = $nil_kd4 + $row->sikap4;
                        $nil_kd5 = $nil_kd5 + $row->sikap5;
                        $nil_kd6 = $nil_kd6 + $row->sikap6;
                        $nil_kd7 = $nil_kd7 + $row->sikap7;
                        $nil_kd8 = $nil_kd8 + $row->sikap8;
                        $nil_kd9 = $nil_kd9 + $row->sikap9;
                        $nil_kd10 = $nil_kd10 + $row->sikap10;
                        // echo $nil_kd1."<br>";

                        // if($i==1){
                        //     $nilai_uas = $row->uas;
                        //     $nilai_uts = $row->uts;

                        // }

                        
                        if($i==6){
                            $kd1[$gg] = $nil_kd1/15*100;
                            $kd2[$gg] = $nil_kd2/15*100;
                            $kd3[$gg] = $nil_kd3/15*100;
                            $kd4[$gg] = $nil_kd4/15*100;
                            $kd5[$gg] = $nil_kd5/15*100;
                            $kd6[$gg] = $nil_kd6/15*100;
                            $kd7[$gg] = $nil_kd7/15*100;
                            $kd8[$gg] = $nil_kd8/15*100;
                            $kd9[$gg] = $nil_kd9/15*100;
                            $kd10[$gg] = $nil_kd10/15*100;
                            $rata = ($kd1[$gg] + $kd2[$gg] + $kd3[$gg] + $kd4[$gg] + $kd5[$gg] + $kd6[$gg] + $kd7[$gg] + $kd8[$gg] + $kd9[$gg] +  $kd10[$gg])/10;
                            $nilai = $rata;

                            if($nilai >=85 && $nilai<=100){
                            $predikat = 'A';
                            $label = 'label-success';
                            $lulus ="LULUS";

                            }
                            else if($nilai >=75 && $nilai < 85){

                            $predikat = 'B';
                            $label = 'label-success';
                            $lulus ="LULUS";
                            }
                            else if($nilai >=65 && $nilai < 75){

                            $predikat = 'C';
                            $label = 'label-warning';
                            $lulus ="LULUS";
                            }
                            else if($nilai >=45 && $nilai < 65){

                            $predikat = 'D';
                            $label = 'label-warning';
                            $lulus ="TIDAK LULUS";
                            }
                            else{

                            $lulus ="TIDAK LULUS";
                            $predikat = 'E';
                            $label = 'label-danger';
                            }

                            $rerata[$gg] = $rata;
                            $nilai_pengetahuan[$gg] = $nilai;
                            $predikatnya[$gg] = $predikat;
                            // echo $kd1[$gg];
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
                            $gg++;
                        }
                        else{

                        $i++;
                        } 
                    }

                        $i=1;
                        $nil_kd1 = 0;
                        $gg = 0;
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
















$gg=0;
$i=1;
$no = 1;

                        foreach ($data_sikap->result() as $row) {
                         
                        if($i == 7) {
                            $i = 1;
                            $no = $no - 5;
                        }
                        if($i == 1){
                    ?>
                    <tr> 
                        <td><a href="#" class="green bigger-140 show-details-btn" title="Lihat Detail"><i class="ace-icon fa fa-angle-double-down" id="<?php echo $row->no_induk ?>"></i></a></td>
                        <td><?php echo $no ?></td>
                        <td><?php echo $row->nama_siswa ?></td>
                        <td><input type="number" id="<?php echo $row->no_induk ?>nilaisikap" readonly="" value="<?php echo $rerata[$gg] ?>"></td>
                        <td>Keterangan</td>
                    </tr>
                    <?php 
                    $gg++;
                        }
                    ?>
                    <!-- <form action="pengetahuan/edit/<?php echo $row->id_pengetahuan?>" method="post" > -->
                   
                        
                        
                    
                    <?php
                    $i++; $no++;
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
