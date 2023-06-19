<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
class c_print extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'pdflibrary'));
    }

    //cetak_kartu_ujian
    public function m_cetak_kartu()
    {
        $data = $this->db->query("SELECT * FROM m_siswa")->result_array();
        $nama_sekolah = $this->config->item('nama_sekolah');
        $nama_ujian = $this->config->item('nama_ujian');

        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        foreach ($data as $load) {
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(80, null, $pdf->Image('___/img/man1.png', null, null, 10, 10), 0, 0, 'C');

            $pdf->Cell(80, 3, 'KARTU PESERTA UJIAN', 0, 1, 'C');
            $pdf->Cell(80, 3, $nama_sekolah, 0, 1, 'C');
            $pdf->Cell(80, 3, $nama_ujian . $pdf->SetLineWidth(1), 0, 1, 'C');
            $pdf->SetFont('Arial', '', 8);
            $pdf->Cell(25, 10, 'NAMA', 0, 0);
            $pdf->Cell(40, 10, ': ' . $load['nama'], 0, 0, 'L');
            $pdf->Ln(3);
            $pdf->Cell(25, 10, 'KELAS', 0, 0);
            $pdf->Cell(10, 10, ': ' . $load['jurusan'] . ' ' . $load['id_jurusan'], 0, 0, 'L');
            $pdf->Ln(4);
            $pdf->Cell(25, 10, 'USERNAME', 0, 0);
            $pdf->Cell(30, 10, ': ' . $load['nim'], 0, 0, 'L');
            $pdf->Ln(3);
            $pdf->Cell(25, 10, 'PASSWORD', 0, 0);
            $pdf->Cell(10, 10, ': ' . $load['nim'], 0, 1, 'L');
            // ======== footer ========= //
            // $pdf->Footer1();

        }
        $pdf->Output();
    }
}
