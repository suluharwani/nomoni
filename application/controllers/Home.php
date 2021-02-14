<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	// $this->load->model('mdl_login');
	$data['judul'] = "home";

	$submit = $this->input->post('submit',TRUE);

	if ($submit=="daftar") {

		$this->fetch_data_from_post();
		redirect('home/peserta','refresh');


	}

	$this->load->view('depan/index', $data);
	}

	function gallery(){

	$data['judul'] = "gallery";
	$this->load->view('depan/gallery', $data);
	}
	function faq(){

	$data['judul'] = "faq";
	$this->load->view('depan/faq', $data);
	}
	function peserta(){
		$data['nomor_peserta'] = $this->session->userdata('no_peserta');
		// $coba = $this->session->userdata('no_peserta');
		$this->load->view('depan/verifikasidata', $data);
	
	}
	function invoice(){
		$data['nomor_peserta'] = $this->session->userdata('no_peserta');
		$nomor_peserta = $data['nomor_peserta'];
		$data['title'] = "Invoice no $nomor_peserta";

		$this->load->view('depan/invoice', $data);
	}


	function fetch_data_from_post(){
		$id = $this->db->insert_id();
		$nomor_identitas = $this->input->post('nomor_identitas');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$nama_nbib = $this->input->post('nama_nbib');
		$email = $this->input->post('email');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$gol_darah = $this->input->post('gol_darah');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$kategori_lomba = $this->input->post('kategori_lomba');
		$hp1 = $this->input->post('hp1');
		$hp2 = $this->input->post('hp2');
		$riwayat_penyakit = $this->input->post('riwayat_penyakit');
		$komunitas = $this->input->post('komunitas');
		$prediksi_waktu = $this->input->post('prediksi_waktu');
		$kode_unik = $this->generate_random_string(10);
		$status = 0;
		$metode_daftar = $this->input->post('metode_daftar');
		$tgl = date('Y-m-d H:i:s');

		
		
		$object = array(
			
			'nomor_identitas'=> $nomor_identitas,
			'nama_lengkap'=> $nama_lengkap,
			'nama_nbib'=> $nama_nbib,
			'email'=> $email,
			'jenis_kelamin'=> $jenis_kelamin,
			'gol_darah'=> $gol_darah,
			'tempat_lahir'=> $tempat_lahir,
			'tgl_lahir'=> $tgl_lahir,
			'alamat'=> $alamat,
			'kota'=> $kota,
			'provinsi'=> $provinsi,
			'kategori_lomba'=> $kategori_lomba,
			'hp1'=> $hp1,
			'hp2'=> $hp2,
			'riwayat_penyakit'=> $riwayat_penyakit,
			'komunitas'=> $komunitas,
			'prediksi_waktu'=> $prediksi_waktu,
			'kode_unik'=> $kode_unik,
			'status'=> $status,
			'metode_daftar'=> $metode_daftar,
			'tgl'=> $tgl

		);
		$this->session->set_userdata(array('no_peserta' => $kode_unik));
		$this->db->insert('peserta', $object);
		return $id;
}

function generate_random_string($length){
	$characters = '0123456789';
	$randomString = '';
	for ($i=0; $i <$length ; $i++) { 
		$randomString.=$characters[rand(0, strlen($characters)-1)];
	}
	return $randomString;
}
function kode_unik($id){
	$kode_awal = $id;
    $panjang_kode = strlen($kode_awal); 
    if ($panjang_kode<=3) {
      $kode_unik=$kode_awal;
    }else{
    // kode unik bila panjang uri segment 3 >= 3
    $sisa_potong = $panjang_kode-3;           //4-3=1    
    $kode_unik = substr($kode_awal, $sisa_potong);
    }
    return $kode_unik;
}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */