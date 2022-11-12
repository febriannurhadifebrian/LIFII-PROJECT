<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporanfpdf extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }

    function manggil_fpdf(){
		$data['rd'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_fpdf',$data);
    }

    function index(){
        echo "tes";
    }
    
	// function index()
	// {
    //     error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
    //     $pdf = new FPDF('P', 'mm','Letter');
    //     $pdf->AddPage();
    //     $pdf->SetFont('Arial','B',16);
    //     $pdf->Cell(0,7,'List Reksadana',0,1,'C');
    //     $pdf->Cell(10,7,'',0,1,);
    //     $pdf->SetFont('Arial','B',10);
    //     $pdf->Cell(10,6,'No',1,0,'C');
    //     $pdf->Cell(90,6,'Nama',1,0,'C');
    //     $pdf->Cell(50,6,'Jenis',1,0,'C');
    //     $pdf->Cell(20,6,'1 Tahun',1,0,'C');
    //     $pdf->Cell(20,6,'3 Tahun',1,1,'C');
    //     $pdf->SetFont('Arial','',10);
    //     $rd = $this->db->get('list')->result();
    //     $no=0;
    //     foreach ($rd as $data){
    //         $no++;
    //         $pdf->Cell(10,6,$no,1,0, 'C');
    //         $pdf->Cell(90,6,$data->nama,1,0);
    //         $pdf->Cell(50,6,$data->jenis,1,0);
    //         $pdf->Cell(20,6,$data->satuthn,1,0);
    //         $pdf->Cell(20,6,$data->tigathn,1,1);
            
    //     }
    //     $pdf->Output();
	// }
}