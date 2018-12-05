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
        <script>

        $(document).ready(function() {
        
            $(".hilang").hide();
                

            $("i").click(function(){
                var tombol = ($(this).attr('id'));

                $("."+tombol).toggle(300);
            });

            $("table input[type=number]").on('keyup',function(e){
                var siswanya = ($(this).attr('id')).substring(0,5); 
                var idnya = ($(this).attr('id')).substring(0,8);
                var nama_all_kd = idnya.substring(0,7);
                var total_kd = 0;
                var kd = 0;
                var a = 0;
                var rerata = 0;
                var total_nilai_pengetahuan = 0;
                var nilai_uas = 0;
                var nilai_uts = 0;
                var test = siswanya+'kd';
                if($(this).val() > 100 || $(this).val() < 0 ){
                    alert('Maaf, nilai Maks = 100 dan min  = 0, Lihat modul untuk keterangan lebih lanjut');
                    $(this).val(0);
                }

                if(nama_all_kd == siswanya+'kd'){
                    for (var i = 0; i < 3; i++) {
                        a++;
                        kd = kd + parseInt($('#'+idnya+'_'+a).val());
                    }
                             
                    $('#'+idnya).val(kd/3); 
                    if($('#'+idnya).val() < 75){
                        $('#'+idnya+'_4').addClass('attention');
                        $('#'+idnya+'_4').prop("disabled", false);
                    }
                    else{
                        $('#'+idnya+'_4').removeClass('attention');
                        $('#'+idnya+'_4').prop("disabled", true);
                        $('#'+idnya+'_4').val(0);
                    }
                    a = 0;
                    for (var i = 0; i < 10; i++) {
                        a++;
                        total_kd = total_kd + parseInt($('#'+siswanya+'kd'+i).val());
                    }
                    rerata = total_kd/10;
                    $('#'+siswanya+'rerata').val(rerata); 
                    nilai_uas = parseInt($('#'+siswanya+'uas').val());
                    nilai_uts = parseInt($('#'+siswanya+'uts').val());
                    total_nilai_pengetahuan = (rerata + nilai_uas + nilai_uts)/3; 
                    $('#'+siswanya+'nilaipengetahuan').val(total_nilai_pengetahuan);              
                }
                else{
                    rerata = parseInt($('#'+siswanya+'rerata').val());
                    nilai_uas = parseInt($('#'+siswanya+'uas').val());
                    nilai_uts = parseInt($('#'+siswanya+'uts').val());
                    total_nilai_pengetahuan = (rerata + nilai_uas + nilai_uts)/3; 
                    $('#'+siswanya+'nilaipengetahuan').val(total_nilai_pengetahuan);
                }
                if (total_nilai_pengetahuan >= 93 && total_nilai_pengetahuan<=100){
                    $('#'+siswanya+'predikat').val("A");
                    $('#'+siswanya+'lulus').val("T");
                }
                else if(total_nilai_pengetahuan < 93 && total_nilai_pengetahuan>=85){
                    $('#'+siswanya+'predikat').val("B");
                    $('#'+siswanya+'lulus').val("T");
                }
                else if(total_nilai_pengetahuan < 85 && total_nilai_pengetahuan>=75){
                    $('#'+siswanya+'predikat').val("C");
                    $('#'+siswanya+'lulus').val("T");
                }
                else{
                    $('#'+siswanya+'predikat').val("D");
                    $('#'+siswanya+'lulus').val("TT");
                }
            });
        
        }); 
        // end document ready

        </script>

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
                            <li><a href="<?php echo base_url()?>">Penilaian</a></li>
                            <li class="active">Pengetahuan</li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                        



<div style="overflow-x:auto;">
                                <table id="tblData" class="table">
                                    <thead>
                                        <tr> 
                                            <th></th>
                                            <th>NO</th>
                                            <th>NAMA SISWA</th>
                                            <th>KD 1</th>
                                            <th>KD 2</th>
                                            <th>KD 3</th>
                                            <th>KD 4</th>
                                            <th>KD 5</th>
                                            <th>KD 6</th>
                                            <th>KD 7</th>
                                            <th>KD 8</th>
                                            <th>KD 9</th>
                                            <th>KD 10</th>
                                            <th>Rerata</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            <th>NILAI</th>
                                            <th>PRED</th>
                                            <th>KET</th>
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
                                            <td><a class="green bigger-140 show-details-btn" title="Lihat Detail"><i class="ace-icon fa fa-angle-double-down" id="<?php echo $row->no_induk ?>"></i></a></td>
                                            <td><?php echo $no ?></td>
                                            <td class="nama"><?php echo $row->nama_siswa ?></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd1" disabled value="<?php echo $kd1[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd2" disabled value="<?php echo $kd2[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd3" disabled value="<?php echo $kd3[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd4" disabled value="<?php echo $kd4[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd5" disabled value="<?php echo $kd5[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd6" disabled value="<?php echo $kd6[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd7" disabled value="<?php echo $kd7[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd8" disabled value="<?php echo $kd8[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd9" disabled value="<?php echo $kd9[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>kd0" disabled value="<?php echo $kd10[$j] ?>"></td>
                                            <td><input type="number" id="<?php echo $row->no_induk ?>rerata" disabled value="<?php echo $rerata[$j] ?>"></td>
                                            <form id="<?php echo $row->no_induk ?><?php echo "uas" ?><?php echo $i ?>">
                                                <input type="hidden" name="id_pengetahuan_uas" value="<?php echo $row->id_pengetahuan ?>">
                                                <td><input disabled type="number" name="uts" id="<?php echo $row->no_induk ?>uts" value="<?php echo $row->uts ?>" min='0' max='100'></td>
                                                <td><input disabled type="number" name="uas" id="<?php echo $row->no_induk ?>uas" value="<?php echo $row->uas ?>"></td>
                                                
                                            </form>
                                            <td>
                                                <input type="number" id="<?php echo $row->no_induk ?>nilaipengetahuan" disabled value="<?php echo $nilai_pengetahuan[$j] ?>">
                                            </td>
                                            <td>
                                                <input type="text" id="<?php echo $row->no_induk ?>predikat" value="<?php echo $predikatnya[$j] ?>" disabled>
                                            </td>
                                            <td>
                                                <input type="text" id="<?php echo $row->no_induk ?>lulus" value="<?php echo $status[$j] ?>" disabled>
                                            </td>
                                        </tr>
                                        <?php 
                                            $j++;
                                            } // end if
                                        ?>
                                        <form id="<?php echo $row->no_induk ?><?php echo $i ?>">
                                        <tr class="<?php echo $row->no_induk ?> hilang"> 
                                            <td></td>
                                            <td></td>
                                            <td class="pertemuan"><?php echo $row->pertemuan ?></td>
                                            <input type="hidden" name="id" value="<?php echo $row->id_pengetahuan ?>">
                                            <td><input type="number" name="kd1" id="<?php echo $row->no_induk ?>kd1_<?php echo $i; ?>" value="<?php echo $row->kd1 ?>" disabled></td>
                                            <td><input type="number" name="kd2" id="<?php echo $row->no_induk ?>kd2_<?php echo $i; ?>" value="<?php echo $row->kd2 ?>" disabled></td>
                                            <td><input type="number" name="kd3" id="<?php echo $row->no_induk ?>kd3_<?php echo $i; ?>" value="<?php echo $row->kd3 ?>" disabled></td>
                                            <td><input type="number" name="kd4" id="<?php echo $row->no_induk ?>kd4_<?php echo $i; ?>" value="<?php echo $row->kd4 ?>" disabled></td>
                                            <td><input type="number" name="kd5" id="<?php echo $row->no_induk ?>kd5_<?php echo $i; ?>" value="<?php echo $row->kd5 ?>" disabled></td>
                                            <td><input type="number" name="kd6" id="<?php echo $row->no_induk ?>kd6_<?php echo $i; ?>" value="<?php echo $row->kd6 ?>" disabled></td>
                                            <td><input type="number" name="kd7" id="<?php echo $row->no_induk ?>kd7_<?php echo $i; ?>" value="<?php echo $row->kd7 ?>" disabled></td>
                                            <td><input type="number" name="kd8" id="<?php echo $row->no_induk ?>kd8_<?php echo $i; ?>" value="<?php echo $row->kd8 ?>" disabled></td>
                                            <td><input type="number" name="kd9" id="<?php echo $row->no_induk ?>kd9_<?php echo $i; ?>" value="<?php echo $row->kd9 ?>" disabled></td>
                                            <td><input type="number" name="kd10" id="<?php echo $row->no_induk ?>kd0_<?php echo $i; ?>" value="<?php echo $row->kd10 ?>" disabled></td>
                                            
                                        </tr>
                                        </form>                    
                                        <?php
                                            $i++; 
                                            $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- untuk pagination -->
                            <div id="pagination"></div>















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


        <script>
            $(document).ready(function(){
                var totalRows = $('#tblData').find('tbody tr:has(td)').length;
            var recordPerPage = 25;
            var totalPages = Math.ceil(totalRows / recordPerPage);
            var $pages = $('<div id="pages"></div>');
            
            for (i = 0; i < totalPages; i++) {
                $('<span class="pageNumber">&nbsp;' + (i + 1) + '</span>').appendTo($pages);
            }
            $pages.appendTo('#pagination');

            $('.pageNumber').hover(
                function() {
                  $(this).addClass('focus');
                },
                function() {
                  $(this).removeClass('focus');
                }
            );

            $('table').find('tbody tr:has(td)').hide();
            var tr = $('table tbody tr:has(td)');
            for (var i = 0; i <= recordPerPage - 1; i++) {
              $(tr[i]).show();
            }
            $('span').click(function(event) {

                $('#tblData').find('tbody tr:has(td)').hide();
                var nBegin = ($(this).text() - 1) * recordPerPage;
                var nEnd = $(this).text() * recordPerPage - 1;
                for (var i = nBegin; i <= nEnd; i++) {
                    $(tr[i]).show();
                }
                $(".hilang").hide();
            });
        });
        </script>
       
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/ace.min.js"></script>

    </body>
</html>
