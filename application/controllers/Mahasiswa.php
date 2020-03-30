<?php



class Mahasiswa extends CI_Controller{
    public function index(){
        $this->load->model('M_mhs');

        $data['mhs']=$this->M_mhs->getdata();
       
        $this->load->view('admin/mahasiswa',$data);
      
    }
    
}