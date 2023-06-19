<?php

class Modelsiswa extends CI_Model
{
    function tampil_data_siswa()
    {
        return $this->db->get('m_siswa');
    }
}
