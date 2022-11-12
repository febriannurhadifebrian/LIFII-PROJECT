<?php 
    
    require('./Asset/Spreadsheet/vendor/autoload.php');

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper('url');
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI

	}

    function manggil_spreasheet(){
		$data['rd'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_xlsx');
    }

     function export()
     {
         $data = $this->m_data->tampil_data()->result();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Nama')
                      ->setCellValue('C1', 'Jenis ')
                      ->setCellValue('D1', '1 Tahun')
                      ->setCellValue('E1', '3 Tahun');

          $kolom = 2;
          $no = 1;
          foreach($data as $data) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $no)
                           ->setCellValue('B' . $kolom, $data->nama)
                           ->setCellValue('C' . $kolom, $data->jenis)
                           ->setCellValue('D' . $kolom, $data->satuthn)
                           ->setCellValue('E' . $kolom, $data->tigathn);

               $kolom++;
               $no++;

          }

          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
	  header('Content-Disposition: attachment;filename="Data Reksadana.xlsx"');
	  header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }

}