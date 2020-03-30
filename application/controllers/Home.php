<?php
Class Home extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="https://covid19.mathdro.id";
       
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data kontak
    function index(){
        $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/api/confirmed'));
        $data['baru']= json_decode($this->curl->simple_get($this->API.'/api'));
     
        $this->load->view('admin/mahasiswa',$data);
       
    }

    function home(){
        $data['total'] = json_decode($this->curl->simple_get('https://api.kawalcorona.com/indonesia'));
        $data['indo'] = json_decode($this->curl->simple_get('https://api.kawalcorona.com/indonesia/provinsi/'));
     
        
        $this->load->view('admin/indonesia',$data);
       
    }

    // insert data kontak
   

    // edit data kontak
    
}