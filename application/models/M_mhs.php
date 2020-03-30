
<?php



class M_mhs extends CI_Model{
    public function getdata(){
        return $this->db->get('tb_mahasiswa')->result();
    }
}