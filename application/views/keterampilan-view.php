<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Penilaian keterampilan</title>
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
        <script type="text/javascript">
        $(document).ready(function() {

          $("button").click(function(){
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
              var total_nilai_keterampilan = 0;
              var nilai_uas = 0;
              var nilai_uts = 0;
              var test = siswanya+'kd';

              if(nama_all_kd == siswanya+'kd'){
                  for (var i = 0; i < 3; i++) {
                      a++;
                      kd = kd + parseInt($('#'+idnya+'_'+a).val());
                  }
                           
                  $('#'+idnya).val(kd/3); 
                  a = 0;
                  for (var i = 0; i < 5; i++) {
                      a++;
                      total_kd = total_kd + parseInt($('#'+siswanya+'kd'+a).val());
                  }
                  rerata = total_kd/5;
                  $('#'+siswanya+'rerata').val(rerata); 
                  nilai_uas = parseInt($('#'+siswanya+'uas').val());
                  nilai_uts = parseInt($('#'+siswanya+'uts').val());
                  total_nilai_keterampilan = (rerata + nilai_uas + nilai_uts)/3; 
                  $('#'+siswanya+'nilaiketerampilan').val(total_nilai_keterampilan);              
              }
              else{
                  rerata = parseInt($('#'+siswanya+'rerata').val());
                  nilai_uas = parseInt($('#'+siswanya+'uas').val());
                  nilai_uts = parseInt($('#'+siswanya+'uts').val());
                  total_nilai_keterampilan = (rerata + nilai_uas + nilai_uts)/3; 
                  $('#'+siswanya+'nilaiketerampilan').val(total_nilai_keterampilan);              

              }
              if (total_nilai_keterampilan >= 85)
                  $('#'+siswanya+'predikat').val("A");
              else if(total_nilai_keterampilan < 85 && total_nilai_keterampilan>=75)
                  $('#'+siswanya+'predikat').val("B");

          });
        
        }); 
        // end document ready
        </script>

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
                        <small class="title_aplikasi">Penilaian <b>PROSES</b> Belajar</small>
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
		          		<b><?php echo $nama;?></b><br>
		              	<b>Wali Kelas : XII.A</b><br>
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

                            <li class="active">
                                <a href="http://localhost/proses_belajar/index.php/keterampilan/tampil/<?php echo $id_guru?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Keterampilan
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="http://localhost/proses_belajar/index.php/sikap/tampil/<?php echo $id_guru?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Sikap
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
                                <a href="http://localhost/proses_belajar">Home</a>
                            </li>
                            <li><a href="http://localhost/proses_belajar/index.php/keterampilan">Penilaian</a></li>
                            <li class="active">Penilaian keterampilan</li>
                        </ul><!-- /.breadcrumb -->
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                    






<h3 class="header smaller lighter blue">Penilaian Keterampilan</h3>

<div class="clearfix">
	<div class="pull-right tableTools-container"></div>
</div>
<div class="table-header">
	Mata Pelajaran : <?php echo $mata_pelajaran; ?>
</div>





    <table border="0" cellpadding="5" id="simple-table" align="center" class="table  table-bordered table-hover">
            <thead>
                <tr> 
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                    <th>K8</th>
                    <th>K9</th>
                    <th>K10</th>
                    <th>Update</th>
                    <th>KETERAMPILAN</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        $i = 1;
                        $no = 1;
                        foreach ($data_keterampilan->result() as $row) {

                    ?>                   
                        
                        <form id="<?php echo $row->no_induk ?><?php echo $i ?>">
                        <tr class="<?php echo $row->no_induk ?>">
                            <td><?php echo $no ?></td>
                          <td><?php echo $row->nama_siswa ?></td>
                            <input type="hidden" name="id" value="<?php echo $row->id_keterampilan ?>">
                            <td><input type="number" name="k1" id="<?php echo $row->no_induk ?>kd1_<?php echo $i; ?>" value="<?php echo $row->k1 ?>"></td>
                            <td><input type="number" name="k2" id="<?php echo $row->no_induk ?>kd2_<?php echo $i; ?>" value="<?php echo $row->k2 ?>"></td>
                            <td><input type="number" name="k3" id="<?php echo $row->no_induk ?>kd3_<?php echo $i; ?>" value="<?php echo $row->k3 ?>"></td>
                            <td><input type="number" name="k4" id="<?php echo $row->no_induk ?>kd4_<?php echo $i; ?>" value="<?php echo $row->k4 ?>"></td>
                            <td><input type="number" name="k5" id="<?php echo $row->no_induk ?>kd5_<?php echo $i; ?>" value="<?php echo $row->k5 ?>"></td>
                            <td><input type="number" name="k6" id="<?php echo $row->no_induk ?>kd6_<?php echo $i; ?>" value="<?php echo $row->k6 ?>"></td>
                            <td><input type="number" name="k7" id="<?php echo $row->no_induk ?>kd7_<?php echo $i; ?>" value="<?php echo $row->k7 ?>"></td>
                            <td><input type="number" name="k8" id="<?php echo $row->no_induk ?>kd8_<?php echo $i; ?>" value="<?php echo $row->k8 ?>"></td>
                            <td><input type="number" name="k9" id="<?php echo $row->no_induk ?>kd9_<?php echo $i; ?>" value="<?php echo $row->k9 ?>"></td>
                            <td><input type="number" name="k9" id="<?php echo $row->no_induk ?>kd0_<?php echo $i; ?>" value="<?php echo $row->k10 ?>"></td>                            
                            <td>
                                <button type="button" id="<?php echo $row->no_induk ?><?php echo $i ?>kd1">update</button>
                            </td>
                        <td>KETERAMPILAN</td>
                        <td>KETERANGAN</td>

                                
                        </tr>
                        </form>
                    
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


    <script>
        $(document).ready(function(){
            $('button[type=button]').on('click', function(){
                var btn = ($(this).attr('id')).substring(0,6);
                // alert("<?php echo base_url() ?>index.php/pengetahuan/edit/");
                $.ajax({
                    url: "<?php echo base_url() ?>index.php/keterampilan/edit/",
                    type: "POST",
                    data: $('#'+btn).serialize(),
                    dataType: 'json',
                    success: function(data){
                        if (data.status) {
                            alert('nilai berhasil di update');
                        }
                    },
                    error: function(){
                        alert('ada kesalahan jaringan');
                    }
                });
            });
        });
    </script>
       
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/ace.min.js"></script>

    </body>
</html>
