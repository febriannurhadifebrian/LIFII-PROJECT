<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportExcel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
		$this->load->model('ImportModel');
	}

	function index()
	{
		$this->load->model('ImportModel');
		$data = array(
			'list_data'	=> $this->ImportModel->getData()
		);
		$this->load->view('v_tampil.php',$data);
	}

	function import_excel(){
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
					$nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$jenis = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$satuthn = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$tigathn = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$temp_data[] = array(
						'nama'	=> $nama,
						'jenis'	=> $jenis,
						'satuthn'	=> $satuthn,
						'tigathn'	=> $tigathn

					); 	
				}
			}
			$this->load->model('ImportModel');
			$insert = $this->ImportModel->insert($temp_data);
			redirect('ImportExcel/index');
			if($insert){
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			echo "Tidak ada file yang masuk";
		}
	}

}