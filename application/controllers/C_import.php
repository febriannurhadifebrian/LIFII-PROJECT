<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_import extends CI_Controller {

        function __construct(){
            parent::__construct();		
            
            $this->load->model('m_data');
            $this->load->model('DataGrafik');
            $this->load->helper('url');
            $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    
        }

        public function index()
        {
            $data['title'] = 'Import Excel';
            $data['mahasiswa'] = $this->db->get('list')->result();
            $this->load->view('import/tes', $data);
        }

        public function create()
        {
            $data['title'] = "Upload File Excel";
            $this->load->view('import/create', $data);
        }

        public function excel()
        {
            if(isset($_FILES["file"]["name"])){
                  // upload
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_type=$_FILES['file']['type'];
                // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads
                
                $object = PHPExcel_IOFactory::load($file_tmp);
        
                foreach($object->getWorksheetIterator() as $worksheet){
        
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
        
                    for($row=4; $row<=$highestRow; $row++){
        
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
        
                $this->db->insert_batch('list', $data);
        
                $message = array(
                    'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('import');
            }
            else
            {
                 $message = array(
                    'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
                );
                
                $this->session->set_flashdata($message);
                redirect('import');
            }
        }

    }