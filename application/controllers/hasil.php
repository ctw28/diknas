<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {
   
    function __construct() {
        parent::__construct();
        $this->load->library('fpdf/fpdf');
    }
    
    function cetak(){
		$this->load->model('pengetahuan_model');

        $kunci = $this->uri->segment(3);
        $hasil = $this->pengetahuan_model->get_data_siswa($kunci);  
        $nama = '';
        $no_induk = '';
        $a = 0;
        $i = 1;
        $j  = 0;
        $k = 0;
        $xPos = 0;
        $yPos = 0;
        $line = 0;
        $line_keterampilan = 0;
        $no = 1;
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
        $deskripsi = [];


        $hasil = $this->pengetahuan_model->get_data_pengetahuan_siswa($kunci);
        $data_keterampilan = $this->pengetahuan_model->get_data_keterampilan_siswa($kunci);     



        $pdf = new FPDF('l','mm','A4');
        $pdf->AddPage('L');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,7,'LAPORAN HASIL PENILAIAN BELAJAR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,7,'',0,1);

		foreach ($hasil -> result() as $row) {	
			$nama = $row->nama_siswa;
			$no_induk = $row->no_induk;
		}

        $pdf->Cell(40,6,'NIM',0,0);
        $pdf->Cell(80,6,': '.$no_induk,0,0);
        $pdf->Cell(30,6,'KELAS',0,0);
        $pdf->Cell(26,6,': XII.IA.1',0,0);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'NAMA SISWA',0,0);
        $pdf->Cell(80,6,': '.$nama,0,0);
        $pdf->Cell(30,6,'SEMESTER',0,0);
        $pdf->Cell(26,6,': I (SATU)',0,0);

        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,7,'',0,1);



        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,10,'NO',1,0,'C');
        $pdf->Cell(60,10,'MATA PELAJARAN',1,0,'C');
        $pdf->Cell(12,10,'NILAI',1,0,'C');
        $pdf->Cell(12,10,'PRED',1,0,'C');
        $pdf->Cell(45,10,'DESKRIPSI',1,0,'C');
        $pdf->Cell(12,10,'NILAI',1,0,'C');
        $pdf->Cell(12,10,'PRED',1,0,'C');
        $pdf->Cell(45,10,'DESKRIPSI',1,0,'C');	

        foreach ($hasil->result() as $row) {
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
                $deskripsi[$k] = $row->deskripsi;
                $k++;
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



		$i=1;
        $no = 1;
        $nilai = [];
        $predikat_keterampilan = [];
        $deskripsi_keterampilan = [];
        $lulus = '';
        foreach ($data_keterampilan->result() as $row) {
            $nilai[$no-1] = ($row->k1 + $row->k2 + $row->k3 + $row->k4 + $row->k5 + $row->k6 + $row->k7 + $row->k8 + $row->k9 + $row->k10)/30*100;
            $deskripsi_keterampilan[$no-1] = $row->deskripsi;
            if($nilai[$no-1] >=93 && $nilai[$no-1]<=100){
                $predikat_keterampilan[$no-1] = 'A';
                $label = 'label-success';
                $lulus ="T";
            }
            else if($nilai[$no-1] >=85 && $nilai[$no-1] < 92){
                $predikat_keterampilan[$no-1] = 'B';
                $label = 'label-success';
                $lulus ="T";
            }
            else if($nilai[$no-1] >=75 && $nilai[$no-1] < 84){
                $predikat_keterampilan[$no-1] = 'C';
                $label = 'label-warning';
                $lulus ="T";
            }
            else {
                $predikat_keterampilan[$no-1] = 'D';
                $label = 'label-danger';
                $lulus ="TT";
            }

            $i++; 
            $no++;
        } // end foreach


		$i = 1;

        $pdf->SetFont('Arial','',8);
		$pdf->Cell(10,4,'',0,1);

        $pdf->Cell(10,6,'',0,1);

		foreach ($hasil -> result() as $row) {	
			if($a==0){
				if($pdf->GetStringWidth($deskripsi[$i-1]) > 45){
					$panjangText = strlen($deskripsi[$i-1]);
					$errMargin = 10;
					$karakterAwal = 0;
					$maksimalKarakter = 0;
					$textArray = array();
					$tempString = '';
					while ($karakterAwal < $panjangText) {
						while (
							$pdf->GetStringWidth($tempString) < (45 - $errMargin) &&
							($karakterAwal + $maksimalKarakter) < $panjangText
						) {
							$maksimalKarakter++;
							$tempString = substr($deskripsi[$i-1], $karakterAwal, $maksimalKarakter);
						}
						$karakterAwal = $karakterAwal + $maksimalKarakter;
						array_push($textArray, $tempString);
						$maksimalKarakter = 0;
						$tempString = '';
					}
					$line = count($textArray);
				}
				else {
					$line = 1;
				}


				if($pdf->GetStringWidth($deskripsi_keterampilan[$i-1]) > 45){
					$panjangText = strlen($deskripsi_keterampilan[$i-1]);
					$errMargin = 10;
					$karakterAwal = 0;
					$maksimalKarakter = 0;
					$textArray = array();
					$tempString = '';
					while ($karakterAwal < $panjangText) {
						while (
							$pdf->GetStringWidth($tempString) < (45 - $errMargin) &&
							($karakterAwal + $maksimalKarakter) < $panjangText
						) {
							$maksimalKarakter++;
							$tempString = substr($deskripsi_keterampilan[$i-1], $karakterAwal, $maksimalKarakter);
						}
						$karakterAwal = $karakterAwal + $maksimalKarakter;
						array_push($textArray, $tempString);
						$maksimalKarakter = 0;
						$tempString = '';
					}
					$line_keterampilan = count($textArray);
				}
				else{
					$line_keterampilan = 1;
				}


				if($line == $line_keterampilan){
			        $pdf->Cell(10,($line * 6),$i,1,0,'C');
			        $pdf->Cell(60,($line * 6),$row->mata_pelajaran,1,0);
			        $pdf->Cell(12,($line * 6),number_format($nilai_pengetahuan[$i-1],2),1,0,'C');
			        $pdf->Cell(12,($line * 6),$predikatnya[$i-1],1,0,'C');
			        $xPos = $pdf->GetX();
			        $yPos = $pdf->GetY();
			        $pdf->MultiCell(45,6, $deskripsi[$i-1],1);
			        $pdf->setXY($xPos + 45, $yPos);
			        $pdf->Cell(12,($line * 6),number_format($nilai[$i-1]),1,0,'C');
			        $pdf->Cell(12,($line * 6),$predikat_keterampilan[$i-1],1,0,'C');
			        $xPos = $pdf->GetX();
			        $yPos = $pdf->GetY();
		        	$pdf->MultiCell(45,6, trim($deskripsi_keterampilan[$i-1]),1);
				}
				else if($line > $line_keterampilan){
			        $pdf->Cell(10,(($line-1) * 6),$i,1,0,'C');
			        $pdf->Cell(60,(($line-1) * 6),$row->mata_pelajaran,1,0);
			        $pdf->Cell(12,(($line-1) * 6),number_format($nilai_pengetahuan[$i-1],2),1,0,'C');
			        $pdf->Cell(12,(($line-1) * 6),$predikatnya[$i-1],1,0,'C');
			        $xPos = $pdf->GetX();
			        $yPos = $pdf->GetY();
			        $pdf->MultiCell(45,6, $deskripsi[$i-1],1);
			        $pdf->setXY($xPos + 45, $yPos);
			        $pdf->Cell(12,(($line-1) * 6),number_format($nilai[$i-1]),1,0,'C');
			        $pdf->Cell(12,(($line-1) * 6),$predikat_keterampilan[$i-1],1,0,'C');
		        	$pdf->MultiCell(45,6, trim($deskripsi_keterampilan[$i-1]),1);
			        $pdf->setXY(10, $yPos+($line-1)*6);
				}else{
			        $pdf->Cell(10,($line_keterampilan * 6),$i,1,0,'C');
			        $pdf->Cell(60,($line_keterampilan * 6),$row->mata_pelajaran,1,0);
			        $pdf->Cell(12,($line_keterampilan * 6),number_format($nilai_pengetahuan[$i-1],2),1,0,'C');
			        $pdf->Cell(12,($line_keterampilan * 6),$predikatnya[$i-1],1,0,'C');
			        $xPos = $pdf->GetX();
			        $yPos = $pdf->GetY();
			        $pdf->MultiCell(45,$line_keterampilan*6, $deskripsi[$i-1],1);
			        $pdf->setXY($xPos + 45, $yPos);
			        $pdf->Cell(12,($line_keterampilan * 6),number_format($nilai[$i-1]),1,0,'C');
			        $pdf->Cell(12,($line_keterampilan * 6),$predikat_keterampilan[$i-1],1,0,'C');
			        $xPos = $pdf->GetX();
			        $yPos = $pdf->GetY();
		        	$pdf->MultiCell(45,6, $deskripsi_keterampilan[$i-1],1);
				}
		        $a++;
			}
			else if($a==3){
				$a=0;
				$i++;
			}
			else{
				$a++;
			}

    	}

        $pdf->Output();
    }





    function cetak_detail(){
        $this->load->model('pengetahuan_model');
        $this->load->model('keterampilan_model');
        $this->load->model('sikap_model');

        $siswa = $this->uri->segment(4);
        $mapel = $this->uri->segment(3);

        $nama = '';
        $no_induk = '';
        $nama_mata_pelajaran = '';

        $i=0;
        $total = 0;
        $total_keterampilan = 0;
        $total_sikap = 0;
        $rerata_sikap = 0;

        $detail_siswa = $this->pengetahuan_model->get_data_pengetahuan_siswa_mapel($mapel, $siswa); 
        $data_pengetahuan = $this->pengetahuan_model->get_data_pengetahuan_siswa_mapel($mapel, $siswa); 
        $data_keterampilan = $this->keterampilan_model->get_data_keterampilan_by_($mapel, $siswa);  
        $data_sikap = $this->sikap_model->get_data_sikap_siswa_mapel($mapel, $siswa); 

        $data_sikap_siswa = array();
        $data_keterampilan_siswa = array();
        $data = array();

        $pdf = new FPDF('l','mm','A4');
        $pdf->AddPage('L');

        if ($detail_siswa->num_rows()>0 AND $data_pengetahuan->num_rows()>0 AND $data_keterampilan->num_rows()>0 AND $data_sikap->num_rows()>0){
            foreach ($detail_siswa -> result() as $row) {  
                $nama = $row->nama_siswa;
                $no_induk = $row->no_induk;
                $nama_mata_pelajaran = $row->mata_pelajaran;
            }
        }
        else{
            echo "Maaf tidak ada data";
            return;
        }

        foreach ($data_pengetahuan -> result() as $row) {
            $data['nama'] = $row->nama_siswa;
            $data['kd1'][] = $row->kd1;
            $data['kd2'][] = $row->kd2;
            $data['kd3'][] = $row->kd3;
            $data['kd4'][] = $row->kd4;
            $data['kd5'][] = $row->kd5;
            $data['kd6'][] = $row->kd6;
            $data['kd7'][] = $row->kd7;
            $data['kd8'][] = $row->kd8;
            $data['kd9'][] = $row->kd9;
            $data['kd10'][] = $row->kd10;
            if($i==0){
                $data['uas'] = $row->uas;
                $data['uts'] = $row->uts;                   
            }
            $i++;
        }
        
        foreach ($data_keterampilan -> result() as $row) {
            $data_keterampilan_siswa['k1'] = $row->k1;
            $data_keterampilan_siswa['k2'] = $row->k2;
            $data_keterampilan_siswa['k3'] = $row->k3;
            $data_keterampilan_siswa['k4'] = $row->k4;
            $data_keterampilan_siswa['k5'] = $row->k5;
            $data_keterampilan_siswa['k6'] = $row->k6;
            $data_keterampilan_siswa['k7'] = $row->k7;
            $data_keterampilan_siswa['k8'] = $row->k8;
            $data_keterampilan_siswa['k9'] = $row->k9;
            $data_keterampilan_siswa['k10'] = $row->k10;
        }

        foreach ($data_sikap -> result() as $row) {
            $data_sikap_siswa['s1'][] = $row->sikap1;
            $data_sikap_siswa['s2'][] = $row->sikap2;
            $data_sikap_siswa['s3'][] = $row->sikap3;
            $data_sikap_siswa['s4'][] = $row->sikap4;
            $data_sikap_siswa['s5'][] = $row->sikap5;
            $data_sikap_siswa['s6'][] = $row->sikap6;
            $data_sikap_siswa['s7'][] = $row->sikap7;
            $data_sikap_siswa['s8'][] = $row->sikap8;
            $data_sikap_siswa['s9'][] = $row->sikap9;
            $data_sikap_siswa['s10'][] = $row->sikap10;
        }

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(280,7,'DETAIL PENILAIAN HASIL BELAJAR',0,1,'C');
        $pdf->Cell(280,6,'MATA PELAJARAN : '.strtoupper($nama_mata_pelajaran),0,0, 'C');
        $pdf->Cell(10,7,'',0,1);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,7,'',0,1);

        $pdf->Cell(40,6,'NIM',0,0);
        $pdf->Cell(180,6,': '.$no_induk,0,0);
        $pdf->Cell(30,6,'KELAS',0,0);
        $pdf->Cell(26,6,': XII.IA.1',0,0);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'NAMA SISWA',0,0);
        $pdf->Cell(180,6,': '.strtoupper($nama),0,0);
        $pdf->Cell(30,6,'SEMESTER',0,0);
        $pdf->Cell(26,6,': I (SATU)',0,0);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,7,'',0,1);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(20,6,'A. DETAIL NILAI PENGETAHUAN',0,0);
            $xPos = $pdf->GetX();
            $yPos = $pdf->GetY();
            $pdf->setXY($xPos + 73, $yPos);

        $pdf->Cell(20,6,'B. DETAIL NILAI KETERAMPILAN',0,0);

            $xPos = $pdf->GetX();
            $yPos = $pdf->GetY();
            $pdf->setXY($xPos + 40, $yPos);

        $pdf->Cell(20,6,'C. DETAIL NILAI SIKAP',0,0);
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,10,'NO',1,0,'C');
        $pdf->Cell(25,10,'KOMPETENSI',1,0,'C');
        $pdf->Cell(12,10,'P1',1,0,'C');
        $pdf->Cell(12,10,'P2',1,0,'C');
        $pdf->Cell(12,10,'P3',1,0,'C');
        $pdf->Cell(15,10,'RERATA',1,0,'C');

        $xPos = $pdf->GetX();
        $yPos = $pdf->GetY();
        $pdf->setXY($xPos + 10, $yPos);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,10,'NO',1,0,'C');
        $pdf->Cell(27,10,'KINERJA',1,0,'C');
        $pdf->Cell(12,10,'NILAI',1,0,'C');

        $xPos = $pdf->GetX();
        $yPos = $pdf->GetY();
        $pdf->setXY($xPos + 10, $yPos);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(10,10,'NO',1,0,'C');
        $pdf->Cell(25,10,'SIKAP',1,0,'C');
        $pdf->Cell(12,10,'PP',1,0,'C');
        $pdf->Cell(12,10,'PS',1,0,'C');
        $pdf->Cell(12,10,'PD',1,0,'C');
        $pdf->Cell(12,10,'PBJ',1,0,'C');
        $pdf->Cell(12,10,'PKJ',1,0,'C');
        $pdf->Cell(12,10,'PPD',1,0,'C');
        $pdf->Cell(15,10,'RERATA',1,0,'C');

        $pdf->SetFont('Arial','',8);
        $pdf->Cell(10,4,'',0,1);
        $pdf->Cell(10,6,'',0,1);

        for($i=1; $i<=10; $i++){
            $pertemuan1 = $data['kd'.$i][0];
            $pertemuan2 = $data['kd'.$i][1];
            $pertemuan3 = $data['kd'.$i][2];
            $sikap1 = $data_sikap_siswa['s'.$i][0]/2*100;
            $sikap2 = $data_sikap_siswa['s'.$i][1]/3*100;
            $sikap3 = $data_sikap_siswa['s'.$i][2]/2*100;
            $sikap4 = $data_sikap_siswa['s'.$i][3]/2*100;
            $sikap5 = $data_sikap_siswa['s'.$i][4]/4*100;
            $sikap6 = $data_sikap_siswa['s'.$i][5]/3*100;

            $rerata = ($pertemuan1+$pertemuan2+$pertemuan3)/3;
            $nil_keterampilan = $data_keterampilan_siswa['k'.$i]/3*100;
            $rerata_sikap = ($sikap1+$sikap2+$sikap3+$sikap4+$sikap5+$sikap6)/6;
            
            $pdf->Cell(10,6,$i,1,0,'C');
            $pdf->Cell(25,6,'KD '.$i,1,0,'C');
            $pdf->Cell(12,6, number_format($data['kd'.$i][0]),1,0,'C');
            $pdf->Cell(12,6, number_format($data['kd'.$i][1]),1,0,'C');
            $pdf->Cell(12,6, number_format($data['kd'.$i][2]),1,0, 'C');
            $pdf->Cell(15,6, number_format($rerata),1,0,'C');
                $xPos = $pdf->GetX();
                $yPos = $pdf->GetY();
                $pdf->setXY($xPos + 10, $yPos);
            $pdf->Cell(10,6,$i,1,0,'C');
            $pdf->Cell(27,6,'K'.$i,1,0,'C');
            $pdf->Cell(12,6, number_format($nil_keterampilan),1,0,'C');
                $xPos = $pdf->GetX();
                $yPos = $pdf->GetY();
                $pdf->setXY($xPos + 10, $yPos);
            $pdf->Cell(10,6,$i,1,0,'C');
            $pdf->Cell(25,6,'S'.$i,1,0,'C');
            $pdf->Cell(12,6, number_format($sikap1),1,0,'C');
            $pdf->Cell(12,6, number_format($sikap2),1,0,'C');
            $pdf->Cell(12,6, number_format($sikap3),1,0,'C');
            $pdf->Cell(12,6, number_format($sikap4),1,0,'C');
            $pdf->Cell(12,6, number_format($sikap5),1,0,'C');
            $pdf->Cell(12,6, number_format($sikap6),1,0,'C');
            $pdf->Cell(15,6, number_format($rerata_sikap),1,0,'C');
            $pdf->Cell(10,6,'',0,1);

            $total = $total + $rerata; 
            $total_keterampilan = $total_keterampilan + $nil_keterampilan;
            $total_sikap = $total_sikap + $rerata_sikap;

        }

        $nilai_pengetahuan = ($total/10+$data['uts']+$data['uas'])/3;
        $pdf->Cell(71,6,"TOTAL",1,0,'C');
        $pdf->Cell(15,6,number_format($total/10),1,0,'C');
            $xPos = $pdf->GetX();
            $yPos = $pdf->GetY();
            $pdf->setXY($xPos + 10, $yPos);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(37,6,"NILAI KETERAMPILAN",1,0,'C');
        $pdf->Cell(12,6,number_format($total_keterampilan/10),1,0,'C');
            $xPos = $pdf->GetX();
            $yPos = $pdf->GetY();
            $pdf->setXY($xPos + 10, $yPos);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(107,6,"NILAI SIKAP",1,0,'C');
        $pdf->Cell(15,6,number_format($total_sikap/10),1,0,'C');
        $pdf->Cell(10,6,'',0,1);

        $pdf->SetFont('Arial','',9);
        $pdf->Cell(71,6,"UTS",1,0,'C');
        $pdf->Cell(15,6,$data['uts'],1,0,'C');

        $pdf->Cell(10,6,'',0,1);
        $pdf->Cell(71,6,"UAS",1,0,'C');
        $pdf->Cell(15,6,$data['uas'],1,0,'C');
        $pdf->Cell(10,6,'',0,1);

        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(71,6,"NILAI PENGETAHUAN",1,0,'C');
        $pdf->Cell(15,6,number_format($nilai_pengetahuan),1,0,'C');
        $pdf->Cell(10,6,'',0,1);
        $pdf->Cell(10,6,'',0,1);
        
        $pdf->SetFont('Arial','I',9);
        $pdf->Cell(71,6,"Keterangan :",0,0,'L');
        $pdf->Cell(10,6,'',0,1);
        
        $pdf->Cell(71,6,"P = Pertemuan, K = Kinerja, S = Sikap",0,0,'L');
        $pdf->Cell(10,6,'',0,1);
        
        $pdf->Cell(71,6,"KD = Kompetensi Dasar, PP = Penilaian Patuh, PS = Penilaian Santun",0,0,'L');
        $pdf->Cell(10,6,'',0,1);
        
        $pdf->Cell(71,6,"PD = Penilaian Disipilin, PBJ = Penilaian Tanggung Jawab",0,0,'L');
        $pdf->Cell(10,6,'',0,1);
        
        $pdf->Cell(71,6,"PKJ = Penilaian Kejujuran, PPD = Penilain Percaya Diri",0,0,'L');

        // $pdf->Output($nama.'_Detail_Nilai.pdf','D');
        $pdf->Output();
    }


	public function tampil()
	{
        if($this->session->userdata('logged_in_hasil'))
        {
            $session_data = $this->session->userdata('logged_in_hasil');
            $isi['nama'] = $session_data['nama_wali_kelas']; 
            $isi['kelas'] = $session_data['kelas'];
        }   

		$this->load->model('keterampilan_model');
		$this->load->model('pengetahuan_model');
		$this->load->model('sikap_model');
		// $isi['content'] = 'keterampilan-view';

		$isi['kunci'] = $this->uri->segment(3);
		$isi['data_pengetahuan'] = $this->pengetahuan_model->get_data_pengetahuan($isi['kunci']);		
		$isi['data_keterampilan'] = $this->keterampilan_model->get_data_keterampilan_by_mapel($isi['kunci']); // kunci = id_guru	
		$isi['data_sikap'] = $this->sikap_model->get_data_sikap($isi['kunci']);		

		$this->load->view('hasil-view', $isi);
	}

}
