<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sikap_model extends CI_Model {

        public function cek($key)
        {
                $this->db->where('id_sikap',$key);
                $hasil = $this->db->get('t_sikap');
                return $hasil;
        }
        
        public function get_data_sikap($kunci)
        {
                $query = "SELECT * FROM t_sikap tp INNER JOIN t_guru tg ON tp.id_guru = tg.id_guru INNER JOIN t_siswa ts ON tp.id_siswa = ts.id_siswa WHERE tp.id_guru = $kunci ORDER BY tp.id_sikap ASC";
                return $this->db->query($query);
        }

        public function update_sikap($kunci, $data)
        {
                $this->db->where('id_sikap', $kunci);
                $this->db->update('t_sikap', $data);
        }

}