<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengetahuan_model extends CI_Model {

        public function cek($key)
        {
                $this->db->where('id_pengetahuan',$key);
                $hasil = $this->db->get('t_pengetahuan');
                return $hasil;
        }
        
        public function get_data_pengetahuan($kunci)
        {
                $query = "SELECT * FROM t_pengetahuan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_guru = $kunci ORDER BY tp.id_siswa ASC, tp.id_pengetahuan ASC";
                return $this->db->query($query);
        }


        public function get_data_pengetahuan_siswa($kunci)
        {
                $query = "SELECT * FROM t_pengetahuan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_siswa = $kunci ORDER BY tp.id_guru ASC, tp.id_pengetahuan ASC";
                return $this->db->query($query);
        }

        public function get_data_pengetahuan_siswa_mapel($mapel, $siswa)
        {
                $query = "SELECT * FROM t_pengetahuan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_siswa = $siswa AND tp.id_guru = $mapel ORDER BY tp.id_guru ASC, tp.id_pengetahuan ASC";
                return $this->db->query($query);
        }


        public function get_data_keterampilan_siswa($kunci)
        {
                $query = "SELECT * FROM t_keterampilan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_siswa = $kunci ORDER BY tp.id_guru ASC, tp.id_keterampilan ASC";
                return $this->db->query($query);
        }


        public function get_data_siswa($kunci)
        {
                $query = "SELECT * FROM t_siswa WHERE id_siswa = $kunci";
                return $this->db->query($query);
        }


        public function get_data_all($kunci)
        {
                $query = "SELECT * FROM t_pengetahuan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_siswa = $kunci ORDER BY tp.id_siswa ASC, tp.id_pengetahuan ASC";
                return $this->db->query($query);
        }


        public function update_pengetahuan($kunci, $data)
        {
                $this->db->where('id_pengetahuan', $kunci);
                $this->db->update('t_pengetahuan', $data);
        }

}