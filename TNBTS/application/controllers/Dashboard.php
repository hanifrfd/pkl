<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */	
	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect('Welcome', 'refresh');
		}			
		$this->load->model('M_satwa');
	}
	public function index()
	{	
	
		$this->load->view('dashboard',true);
	}	

	public function dash2(){
		$this->load->view('dashboard2',true);
	}
	public function testing(){
		$this->load->view('testing',true);
	}

	public function inputSatwa(){
		$famili = $this->input->post('famili');
		$nilmiah = $this->input->post('nilmiah');
		$nlokal = $this->input->post('nlokal');
		$deskripsi = $this->input->post('deskripsi');
		$lokal = $this->input->post('lokal');
		$migran = $this->input->post('migran');
		$IUCN = $this->input->post('IUCN');
		$peraturan = $this->input->post('peraturan');
		$koordinat = $this->input->post('koordinat');
		$dokumentasi = $this->input->post('dokumentasi');
		$keterangan = $this->input->post('keterangan');
		$data = array(
            'famili' => $famili,
            'nilmiah' => $nilmiah,            
            'nlokal' => $nlokal,
            'deskripsi' => $deskripsi,
            'lokal' => $lokal,
            'migran' => $migran,
            'IUCN' => $IUCN,
            'peraturan' => $peraturan,
            'IUCN' => $IUCN,
            'koordinat' => $koordinat,
            'dokumentasi' => $dokumentasi,
            'keterangan' => $keterangan
        );
		$cek = $this->M_satwa->input_all($data);
		if($cek){
			echo "<script>
			alert('Data berhasil dimasukkan');
			</script>";
			redirect('Dashboard/dash2', 'refresh');            
		}else{
			echo "<script>
			alert('Data gagal dimasukkan');			
			</script>";
			redirect('Dashboard/dash2', 'refresh');            
		}

	}

	public function dataSatwa(){
		
		$data = $this->M_satwa->data_all();				

		foreach($data->result_array() as $row){
		    echo '
		    		  <tr>	
		    		  <td style="border: 1px solid #000000;"><a href="pages/examples/invoice.html">'.$row['id'].'</a></td>
                      <td style="border: 1px solid #000000;">'.$row['Famili'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Namailmiah'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Namalokal'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Deskripsi'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Lokal'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Migran'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['IUCN'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Peraturan'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Koordinat'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Dokumentasi'].'</td>
                      <td style="border: 1px solid #000000;">'.$row['Ket'].'</td>                      
                      <td style="border: 1px solid #000000;">&nbsp; <i class="fa fa-trash"></i>&nbsp; &nbsp;<i class="fa fa-pencil"></i></td>
                      </tr>';
		}		
	}

	public function inputGambar(){
		$imgData =addslashes(file_get_contents($_FILES['file']['tmp_name']));
		$imageProperties = $_FILES['file']['type'];					
		$data = array(
            'Data' => $imgData,
            'img' => $imageProperties,                        
        );
		$cek = $this->M_satwa->input_gambar($data);	
		if($cek){
			echo "<script>
			alert('Data berhasil dimasukkan');
			</script>";
			redirect('Dashboard/dash2', 'refresh');            
		}else{
			echo "<script>
			alert('Data gagal dimasukkan');			
			</script>";
			redirect('Dashboard/dash2', 'refresh');            
		}
	}

}
