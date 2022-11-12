<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Exportimport extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
		$this->load->model('m_data');
    }



    public function index()
    {
        $data['title'] = 'Export Import';
        $data['rd'] = $this->Barang_model->getDataBarang();
		$data1['rd'] = $this->m_data->tampil_data()->result();

        $this->load->view('v_tampil', $data1);
    }

    public function uploaddata()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $databarang = array(
                            'nama'  => $row->getCellAtIndex(1),
                            'jenis'  => $row->getCellAtIndex(2),
                            'satuthn' => $row->getCellAtIndex(3),
                            'tigathn' => $row->getCellAtIndex(3)
                           
                        );
                        $this->Barang_model->import_data($databarang);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('exportimport');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
}
