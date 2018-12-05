<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaturan_model extends CI_Model {

        public function cek($key)
        {
                $this->db->where('id_guru',$key);
                $hasil = $this->db->get('t_guru');
                return $hasil;
        }
        
        public function get_data_mata_pelajaran()
        {
                $query = "SELECT * FROM t_guru ORDER BY mata_pelajaran ASC";
                return $this->db->query($query);
        }

        public function update_mata_pelajaran($kunci, $data)
        {
                $this->db->where('id_guru', $kunci);
                $this->db->update('t_guru', $data);
        }



        public function cek_siswa($key)
        {
                $this->db->where('id_siswa',$key);
                $hasil = $this->db->get('t_siswa');
                return $hasil;
        }

        public function get_data_siswa()
        {
                $query = "SELECT * FROM t_siswa ORDER BY id_siswa ASC";
                return $this->db->query($query);
        }

        public function update_siswa($kunci, $data)
        {
                $this->db->where('id_siswa', $kunci);
                $this->db->update('t_siswa', $data);
        }
        public function tambah_siswa($data)
        {
                // $this->db->where('id_siswa', $kunci);
                $this->db->insert('t_siswa',$data);
        }

}