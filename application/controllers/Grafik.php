<?php 
    
    require('./Asset/Spreadsheet/vendor/autoload.php');

    use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Grafik extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->model('DataGrafik');
        $this->load->helper('url');

	}

    function grafik(){
		$data = array(
			'list_data'	=> $this->DataGrafik->data()
		);
        // print_r($data);
        // $this->load->view('v_grafik',$data);

        $x1 = array(
            "caption"=>"Return Reksadana",
            "subCaption"=>"Dalam 1 Tahun",
            "xaxisName"=>"Tahun",
            "yAxisName"=>"Return",
            "NumberSuffix"=> "%",
            // "YAxisMaxValue"=> "40",
            "theme"=>"fint");
        
          $x2 = array();
          foreach($data as $row){
            print_r ($row[1]);
            }
        //   while($r = mysqli_fetch_assoc($data)){
        //     $datum = array("label"=>$r['nama'],"value"=>$r['satuthn']);
        //     array_push($x2,$datum);
        //   } 
        
        $x = array(
            "chart"=>$x1,
            "data"=>$x2
        );
        
        $y = json_encode($x);
        echo $y;
    }

}

?>