<?php 
    
    require('./Asset/Spreadsheet/vendor/autoload.php');

    use PhpOffice\PhpSpreadsheet\Spreadsheet;

class crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->model('Barang_model');
		$this->load->model('DataGrafik');
        $this->load->helper('url');
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI

	}
 
	function index(){
		$data['rd'] = $this->m_data->tampil_data()->result();
		// $this->load->view('v_tampil',$data);

        // $data['rd'] = $this->m_data->getDataBarang();
        $this->load->view('v_tampil', $data);
	}

    

    function fpdf(){
		$data['rd'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_fpdf',$data);
    }

    // function manggil_spreasheet(){
	// 	$data['rd'] = $this->m_data->tampil_data()->result();
    //     $this->load->view('v_xlsx');
    // }

    function grafik(){
		$data = array(
			'list_data'	=> $this->DataGrafik->data()
		);
        // print_r($data);
        $this->load->view('v_grafik');
    }



    function tambah(){
        $this->load->view('v_input');
    }

    function tambah_aksi(){
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $satuthn = $this->input->post('satuthn');
        $tigathn = $this->input->post('tigathn');


        $data = array(
            'nama' => $nama,
            'jenis' => $jenis,
            'satuthn' => $satuthn,
            'tigathn' => $tigathn

            );
        $this->m_data->input_data($data,'list');
        redirect('crud/index');
    }

    function hapus($no){
		$where = array('no' => $no);
		$this->m_data->hapus_data($where,'list');
		redirect('crud/index');
	}

    function edit($no){
        $where = array('no' => $no);
        $data['rd'] = $this->m_data->edit_data($where,'list')->result();
        $this->load->view('v_edit',$data);
    }

    function update(){
        $no = $this->input->post('no');
        $nama = $this->input->post('nama');
        $jenis = $this->input->post('jenis');
        $satuthn = $this->input->post('satuthn');
        $tigathn = $this->input->post('tigathn');
     
        $data = array(
            'nama' => $nama,
            'jenis' => $jenis,
            'satuthn' => $satuthn,
            'tigathn' => $tigathn
        );
     
        $where = array(
            'no' => $no
        );
     
        $this->m_data->update_data($where,$data,'list');
        redirect('crud/index');
    }
}