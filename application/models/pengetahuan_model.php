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
                $query = "SELECT * FROM t_pengetahuan tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_guru = $kunci ORDER BY tp.id_pengetahuan ASC";
                return $this->db->query($query);
        }

        public function update_pengetahuan($kunci, $data)
        {
                $this->db->where('id_pengetahuan', $kunci);
                $this->db->update('t_pengetahuan', $data);
        }

}