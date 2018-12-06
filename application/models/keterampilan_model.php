<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class keterampilan_model extends CI_Model {

        public function cek($key)
        {
                $this->db->where('id_keterampilan',$key);
                $hasil = $this->db->get('t_keterampilan');
                return $hasil;
        }
        
        public function get_data_keterampilan($kunci)
        {
                $query = "SELECT * FROM t_keterampilan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_guru = $kunci ORDER BY tp.id_keterampilan ASC";
                return $this->db->query($query);
        }
        

        public function get_data_keterampilan_siswa_mapel($mapel, $siswa)
        {
                $query = "SELECT * FROM t_keterampilan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_siswa = $siswa AND tp.id_guru = $mapel ORDER BY tp.id_guru ASC, tp.id_keterampilan ASC";
                return $this->db->query($query);
        }

        public function update_keterampilan($kunci, $data)
        {
                $this->db->where('id_keterampilan', $kunci);
                $this->db->update('t_keterampilan', $data);
        }

}