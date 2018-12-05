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
        <div id="navbar" class="navbar navbar-default ace-save-state" style="background-color: red !important;">
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
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle" style="background-color: red !important;">
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


                            <div class="col-sm-12">
                                <a href="<?php echo base_url()?>index.php/pengetahuan/tampil/<?php echo $kunci ?>">Lihat Proses Pengetahuan</a>

        <table border="0" cellpadding="5" id="simple-table" align="center" class="table  table-bordered table-hover">
            <thead>
                <tr> 
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>PENGETAHUAN</th>
                    <th>KETERAMPILAN</th>
                    <th>SIKAP</th>
                    <th>AKSI</th>
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

                                                // if($kd1[$j] < 75)
                                                //     $kd1[$j] = $row->pertemuan;


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
                    $i++; $no++;
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
                            // echo $kd1[$gg];
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






















                                        
                                        
                                        $i=1;
                                        $nil_kd1 = 0;
                                        $j = 0;
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
                                            if($i == 5) {
                                                $i = 1;
                                                $no = $no - 3;
                                            }
                                            if($i == 1){
                                        ?>
                                        <tr> 
                                            <td><?php echo $no ?></td>
                                            <td class="nama"><?php echo $row->nama_siswa ?></td>
                                            <td>
                                                <?php echo number_format($nilai_pengetahuan[$j]) ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($nilai_keterampilan[$j]) ?>
                                            </td>
                                            <td>
                                                <?php echo number_format($rerata_sikap[$j]) ?>
                                            </td>
                                            <td>
                                                <a type="button" title="<?php echo $row->id_siswa ?>" data-toggle="modal" data-target="#myModal" title="Lihat Detail" id="<?php echo $row->id_siswa ?>" class="btn btn-xs btn-info">
                                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                                </a>
                                                <a href="<?php echo base_url()?>index.php/hasil/cetak/<?php echo $row->id_siswa ?>" title="Cetak" id="<?php echo $row->no_induk ?><?php echo $i ?>kd1" class="btn btn-xs btn-success">
                                                    <i class="ace-icon fa fa-print bigger-120"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 
                                            $j++;
                                            } // end if
                                        ?>
                                                          
                                        <?php
                                            $i++; 
                                            $no++;
                                            }
                                        ?>
                                    </tbody>
                </table>


                            </div>







<!-- <button type="button" id="ggwp" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Nilai</h4>
      </div>
      <div class="modal-body">
        <table>
            <thead>
                <tr>
                    <th>Kompetensi</th>
                    <th>Pertemuan 1</th>
                    <th>Pertemuan 2</th>
                    <th>Pertemuan 3</th>
                    <th>Rata-Rata</th>
                </tr>
            </thead>
            <tbody id="detail-nilai">

            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

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

        <script>
            $(document).ready(function(){

            // untuk tombol update nilai menggunakan ajax
        $('a[type=button]').on('click', function(){
            var btn = $(this).attr('id');
            $.ajax({
                    url: "<?php echo base_url() ?>index.php/pengetahuan/get_pengetahuan/<?php echo $kunci ?>/"+btn,
                    type: "POST",
                    // data: $('#'+($(this).attr('id')).slice(0,-3)).serialize(),
                    dataType: 'json',
                    success: function(data){
                        isinya = '';
                        warna_1 = '';
                        warna_2 = '';
                        warna_3 = '';
                        warna_rerata = '';

                    // var data = JSON.parse(this.responseText);
                        console.log(data);
                        no=1;
                        rerata = 0;
                        for(var i=0; i<data.length; i++){
                            pertemuan1 = data[i][0];
                            pertemuan2 = data[i][1];
                            pertemuan3 = data[i][2];

                            rerata = ((parseInt(pertemuan1)+parseInt(pertemuan2)+parseInt(pertemuan3))/3).toFixed(0);
                            if(data[i][0] < 75)
                                warna_1 = 'red';
                            else
                                warna_1 = '';

                            if(data[i][1] < 75)
                                warna_2 = 'red';
                            else
                                warna_2 = '';
                            if(data[i][2] < 75)
                                warna_3 = 'red';
                            else
                                warna_3 = '';
                            if(rerata < 75)
                                warna_rerata = 'red';
                            else
                                warna_rerata = 'green';

                            isinya +="<tr>";
                            isinya +="<td>KD"+no+"</td>";
                            isinya +="<td style='color:"+warna_1+"'>"+data[i][0]+"</td>";
                            isinya +="<td style='color:"+warna_2+"'>"+data[i][1]+"</td>";
                            isinya +="<td style='color:"+warna_3+"'>"+data[i][2]+"</td>";
                            isinya +="<td style='color:"+warna_rerata+"'>"+rerata+"</td>";
                            isinya +="</tr>";
                            no++;
                        }
                        document.getElementById('detail-nilai').innerHTML = isinya;
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
