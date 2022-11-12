<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('list');
	}

	public function import_data($databarang)
    {
        $jumlah = count($databarang);
        if ($jumlah > 0) {
            $this->db->replace('list', $databarang);
        }
    }

    public function getDataBarang()
    {
        return $this->db->get('list')->result_array();
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}   