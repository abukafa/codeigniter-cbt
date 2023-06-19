<?php

class Siswa extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('modelsiswa');
        $this->load->helper('url');
    }

    function index()
    {
        $data['m_siswa'] = $this->modelsiswa->tampil_data_siswa()->result();
        $this->load->view('c_print_kartu', $data);
    }
}
