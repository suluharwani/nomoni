<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->model('mdl_nomoni');
$this->load->library('session');
$this->load->model('Mdl_admin','admin');
$this->load->model('Mdl_peserta','peserta');





}
	public function index()
	{
	$data['title'] = "Admin Palu Nomoni - dashboard";
	$this->_make_sure_is_admin();
	$this->load->model('mdl_login');

	$admin =  $this->session->userdata('status_login');

	if ($admin) {
		foreach ($admin as $row) {
		$data['level'] = $row->level;
 		$data['id'] = $row->id;
 		$data['nama'] = $row->nama;
 		$data['email'] = $row->email;
 		$data['password'] = $row->password;
 		$data['hp'] = $row->hp;
 		$data['hp2'] = $row->hp2;
 		$data['alamat'] = $row->alamat;
 		$data['gender'] = $row->gender;
				
	}			
 
	$data['title'] = "PALU NOMONI 2018";

	    foreach ($admin as $row) {
		$level = $row->level;
 		$id = $row->id;
 		$nama = $row->nama;
 		$email = $row->email;
 		$password = $row->password;
 		$hp = $row->hp;
 		$hp2 = $row->hp2;
 		$alamat = $row->alamat;
 		$gender = $row->gender;			
	}	
	
    //info dashboard
    $data['jumlah_marathon']=$this->peserta->jumlah_marathon();
    $data['jumlah_marathon_bayar']=$this->peserta->jumlah_marathon_bayar();
    $data['jumlah_bike']=$this->peserta->jumlah_bike();
    $data['jumlah_bike_bayar']=$this->peserta->jumlah_bike_bayar();
    $data['jumlah_pendaftaran_online']=$this->peserta->jumlah_pendaftaran_online();
    $data['jumlah_pendaftaran_offline']=$this->peserta->jumlah_pendaftaran_offline();
    $data['total_peserta'] = $data['jumlah_marathon_bayar']+$data['jumlah_bike_bayar'];
    $data['total_pendaftar'] = $data['jumlah_marathon']+$data['jumlah_bike'];
    //sementara
    $data['kuota_marathon_5k'] = 100; 
    $data['kuota_marathon_10k'] = 100; 
    $data['kuota_marathon_21k'] = 100; 
    $data['kuota_marathon'] = $data['kuota_marathon_5k']+$data['kuota_marathon_10k']+$data['kuota_marathon_21k'];
    $data['kuota_bike'] = 100; 
    //sementara
    //data stat
    $data['persetase_marathon'] = ($data['jumlah_marathon_bayar']/$data['kuota_marathon'])*100;
    $data['persetase_bike'] = ($data['jumlah_bike_bayar']/$data['kuota_bike'])*100;
    $data['persetase_daftar_online'] = ($data['jumlah_pendaftaran_online']/$data['total_peserta'])*100;
    $data['persetase_daftar_offline'] = ($data['jumlah_pendaftaran_offline']/$data['total_peserta'])*100;



    //info dashboard



    $this->load->view('super/view_dashboard', $data); 
	}
	}
    function kuota(){
    $data['title'] = "Admin Palu Nomoni - Kuota";
    $data['halaman'] = "Kuota";
    $this->_make_sure_is_super_admin();
    $this->load->model('mdl_login');
    $admin =  $this->session->userdata('status_login');
    if ($admin) {
        foreach ($admin as $row) {
        $data['level'] = $row->level;
        $data['id'] = $row->id;
        $data['nama'] = $row->nama;
        $data['email'] = $row->email;
        $data['password'] = $row->password;
        $data['hp'] = $row->hp;
        $data['hp2'] = $row->hp2;
        $data['alamat'] = $row->alamat;
        $data['gender'] = $row->gender;
                
    }     
}      
 
    $data['title'] = "PALU NOMONI 2018";

        foreach ($admin as $row) {
        $level = $row->level;
        $id = $row->id;
        $nama = $row->nama;
        $email = $row->email;
        $password = $row->password;
        $hp = $row->hp;
        $hp2 = $row->hp2;
        $alamat = $row->alamat;
        $gender = $row->gender;         
    }   
    
    //info dashboard
    $data['jumlah_marathon']=$this->peserta->jumlah_marathon();
    $data['jumlah_marathon_bayar']=$this->peserta->jumlah_marathon_bayar();
    $data['jumlah_bike']=$this->peserta->jumlah_bike();
    $data['jumlah_bike_bayar']=$this->peserta->jumlah_bike_bayar();
    $data['jumlah_pendaftaran_online']=$this->peserta->jumlah_pendaftaran_online();
    $data['jumlah_pendaftaran_offline']=$this->peserta->jumlah_pendaftaran_offline();
    $data['total_peserta'] = $data['jumlah_marathon_bayar']+$data['jumlah_bike_bayar'];
    $data['total_pendaftar'] = $data['jumlah_marathon']+$data['jumlah_bike'];
    //sementara
    $data['kuota_marathon_5k'] = 100; 
    $data['kuota_marathon_10k'] = 100; 
    $data['kuota_marathon_21k'] = 100; 
    $data['kuota_marathon'] = $data['kuota_marathon_5k']+$data['kuota_marathon_10k']+$data['kuota_marathon_21k'];
    $data['kuota_bike'] = 100; 
    //sementara
    //data stat
    $data['persetase_marathon'] = ($data['jumlah_marathon_bayar']/$data['kuota_marathon'])*100;
    $data['persetase_bike'] = ($data['jumlah_bike_bayar']/$data['kuota_bike'])*100;
    $data['persetase_daftar_online'] = ($data['jumlah_pendaftaran_online']/$data['total_peserta'])*100;
    $data['persetase_daftar_offline'] = ($data['jumlah_pendaftaran_offline']/$data['total_peserta'])*100;
      

       $this->load->view('super/view_kuota', $data);  
    }


        function laporanmarathon(){
        $data['title'] = "Admin Palu Nomoni - laporan marathon";
        $this->_make_sure_is_admin();
        $this->load->helper('url');
        $this->load->helper('form');

        $data['judul'] = "Laporan Mrathon";
        $admin =  $this->session->userdata('status_login');

    if ($admin) {
        foreach ($admin as $row) {
        $data['level'] = $row->level;
        $data['id'] = $row->id;
        $data['nama'] = $row->nama;
        $data['email'] = $row->email;
        $data['password'] = $row->password;
        $data['hp'] = $row->hp;
        $data['hp2'] = $row->hp2;
        $data['alamat'] = $row->alamat;
        $data['gender'] = $row->gender;
                
            }       
        }



        $this->load->view('super/view_laporan_marathon', $data);
    }
        function laporanbike(){
        $data['title'] = "Admin Palu Nomoni - laporan bike";
        $this->_make_sure_is_admin();
        $this->load->helper('url');
        $this->load->helper('form');

        $data['judul'] = "Laporan Mrathon";
        $admin =  $this->session->userdata('status_login');

    if ($admin) {
        foreach ($admin as $row) {
        $data['level'] = $row->level;
        $data['id'] = $row->id;
        $data['nama'] = $row->nama;
        $data['email'] = $row->email;
        $data['password'] = $row->password;
        $data['hp'] = $row->hp;
        $data['hp2'] = $row->hp2;
        $data['alamat'] = $row->alamat;
        $data['gender'] = $row->gender;
                
            }       
        }



        $this->load->view('super/view_laporan_bike', $data);
    }


    //peserta start

        function peserta_bike(){
        $data['title'] = "Admin Palu Nomoni - PESERTA BIKE";
        $this->_make_sure_is_admin();
        $this->load->helper('url');
        $this->load->helper('form');

        $data['judul'] = "Peserta Bike";
        $admin =  $this->session->userdata('status_login');

    if ($admin) {
        foreach ($admin as $row) {
        $data['level'] = $row->level;
        $data['id'] = $row->id;
        $data['nama'] = $row->nama;
        $data['email'] = $row->email;
        $data['password'] = $row->password;
        $data['hp'] = $row->hp;
        $data['hp2'] = $row->hp2;
        $data['alamat'] = $row->alamat;
        $data['gender'] = $row->gender;
                
            }       
        }

    $submit = $this->input->post('submit',TRUE);

    if ($submit=="daftar") {

        $this->fetch_data_from_post();
        redirect('admin/peserta_bike','refresh');


    }



        $this->load->view('super/view_peserta_bike', $data);
    }






	function peserta_marathon(){
        $data['title'] = "Admin Palu Nomoni - peserta marathon";
		$this->_make_sure_is_admin();
		$this->load->helper('url');
        $this->load->helper('form');

        $data['judul'] = "Peserta Marathon";
        $admin =  $this->session->userdata('status_login');

	if ($admin) {
		foreach ($admin as $row) {
		$data['level'] = $row->level;
 		$data['id'] = $row->id;
 		$data['nama'] = $row->nama;
 		$data['email'] = $row->email;
 		$data['password'] = $row->password;
 		$data['hp'] = $row->hp;
 		$data['hp2'] = $row->hp2;
 		$data['alamat'] = $row->alamat;
 		$data['gender'] = $row->gender;
				
			}		
		}
    $submit = $this->input->post('submit',TRUE);

    if ($submit=="daftar") {

        $this->fetch_data_from_post();
        redirect('admin/peserta_marathon','refresh');


    }


        $this->load->view('super/view_peserta_marathon', $data);
	}

	public function ajax_delete_peserta_marathon($id)
    {
    	$this->_make_sure_is_admin();
        $this->peserta->delete_by_id($id);
        redirect('admin/peserta_marathon');    
    }
        public function ajax_delete_peserta_bike($id)
    {
        $this->_make_sure_is_admin();
        $this->peserta->delete_by_id($id);
        redirect('admin/peserta_bike');    
    }

public function ajax_list_peserta_bike()
    {
        $this->_make_sure_is_admin();
        $list = $this->peserta->get_datatables_bike();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $peserta) {
            $no++;
            $row = array();
            $row[] = $no;  //0
            $row[] = $peserta->kategori_lomba; //1
            $row[] = $peserta->nama_lengkap;  //2
            $row[] = $peserta->nama_nbib; //3
            $row[] = $peserta->email; //4
            $row[] = $peserta->status; //5
            $row[] = $peserta->jenis_kelamin; //6
            $row[] = $peserta->gol_darah; //7
            $row[] = $peserta->tempat_lahir; //8
            $row[] = $peserta->alamat; //9
            $row[] = $peserta->kota; //10
            $row[] = $peserta->provinsi; //11
            $row[] = $peserta->id; //12
            $row[] = $peserta->hp1; //13
            $row[] = $peserta->hp2; //14
            $row[] = $peserta->riwayat_penyakit; //15
            $row[] = $peserta->komunitas; //16
            $row[] = $peserta->prediksi_waktu; //17
            $row[] = $peserta->kode_unik; //18
            $row[] = $peserta->status; //19 
            $row[] = $peserta->metode_daftar; //20 
            $row[] = $peserta->tgl; //21
            $row[] = $peserta->id_admin; //22 
            $row[] = $peserta->nama_admin; //23  
            $row[] = $peserta->nomor_identitas; //24 
            $row[] = $peserta->tgl_lahir; //25

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->peserta->count_all(),
                        "recordsFiltered" => $this->peserta->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

  public function ajax_list_peserta()
    {
    	$this->_make_sure_is_admin();
        $list = $this->peserta->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $peserta) {
            $no++;
            $row = array();
            $row[] = $no;  //0
            $row[] = $peserta->kategori_lomba; //1
            $row[] = $peserta->nama_lengkap;  //2
            $row[] = $peserta->nama_nbib; //3
            $row[] = $peserta->email; //4
            $row[] = $peserta->status; //5
            $row[] = $peserta->jenis_kelamin; //6
            $row[] = $peserta->gol_darah; //7
            $row[] = $peserta->tempat_lahir; //8
 			$row[] = $peserta->alamat; //9
 			$row[] = $peserta->kota; //10
 			$row[] = $peserta->provinsi; //11
 			$row[] = $peserta->id; //12
 			$row[] = $peserta->hp1; //13
 			$row[] = $peserta->hp2; //14
 			$row[] = $peserta->riwayat_penyakit; //15
 			$row[] = $peserta->komunitas; //16
 			$row[] = $peserta->prediksi_waktu; //17
            $row[] = $peserta->kode_unik; //18
            $row[] = $peserta->status; //19 
            $row[] = $peserta->metode_daftar; //20 
            $row[] = $peserta->tgl; //21
            $row[] = $peserta->id_admin; //22 
 			$row[] = $peserta->nama_admin; //23  
            $row[] = $peserta->nomor_identitas; //24 
            $row[] = $peserta->tgl_lahir; //25
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->peserta->count_all(),
                        "recordsFiltered" => $this->peserta->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
    public function ajax_konfirmasi($id, $id_admin)
    {
        $this->_make_sure_is_admin();
        $admin =  $this->session->userdata('status_login');
    if ($admin) {
        foreach ($admin as $row) {
        $data['level'] = $row->level;
        $data['id'] = $row->id;
        $data['nama'] = $row->nama;
        $data['email'] = $row->email;
        $data['password'] = $row->password;
        $data['hp'] = $row->hp;
        $data['hp2'] = $row->hp2;
        $data['alamat'] = $row->alamat;
        $data['gender'] = $row->gender;
                
            }       
        }
        $id_admin = $data['id'];
        $nama_admin =  $data['nama'];
        $this->peserta->konfirmasi($id,$id_admin, $nama_admin);
        redirect('admin/peserta_marathon');     
    }
    public function ajax_batal_konfirmasi($id)
    {
        $this->_make_sure_is_admin();
        $this->peserta->batal_konfirmasi($id);
        redirect('admin/peserta_marathon');     
    }
        public function ajax_konfirmasi_bike($id, $id_admin)
    {
        $this->_make_sure_is_admin();
       $admin =  $this->session->userdata('status_login');

    if ($admin) {
        foreach ($admin as $row) {
        $data['level'] = $row->level;
        $data['id'] = $row->id;
        $data['nama'] = $row->nama;
        $data['email'] = $row->email;
        $data['password'] = $row->password;
        $data['hp'] = $row->hp;
        $data['hp2'] = $row->hp2;
        $data['alamat'] = $row->alamat;
        $data['gender'] = $row->gender;
                
            }       
        }
        $id_admin = $data['id'];
        $nama_admin =  $data['nama'];
        $this->peserta->konfirmasi($id,$id_admin, $nama_admin);
        redirect('admin/peserta_bike');     
    }
    public function ajax_batal_konfirmasi_bike($id)
    {
        $this->_make_sure_is_admin();
        $this->peserta->batal_konfirmasi($id);
        redirect('admin/peserta_bike');     
    }


	//peserta end

	function anggota(){
        $data['title'] = "Admin Palu Nomoni - Admin";
		$this->_make_sure_is_super_admin();
		$this->load->helper('url');
        $this->load->helper('form');



        $level = $this->admin->get_list_level();
		$data['judul'] = "admin";


		$submit = $this->input->post('submit',TRUE);


		$level = "2";
        $email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$hp2 = $this->input->post('hp2');
		$alamat = $this->input->post('alamat');
		$gender = $this->input->post('gender');

		$object = array(
            'level' => $level,
			'email' => $email,
			'password' => $password,
			'nama' => $nama,
			'hp' => $hp,
			'hp2' => $hp2,
			'alamat' => $alamat,
			'gender' => $gender
			); 
		
		if ($submit=="submit") {

       			$this->db->insert('admin', $object);
				redirect('admin/anggota');
		 }	
	$admin =  $this->session->userdata('status_login');

	if ($admin) {
		foreach ($admin as $row) {
		$data['level'] = $row->level;
 		$data['id'] = $row->id;
 		$data['nama'] = $row->nama;
 		$data['email'] = $row->email;
 		$data['password'] = $row->password;
 		$data['hp'] = $row->hp;
 		$data['hp2'] = $row->hp2;
 		$data['alamat'] = $row->alamat;
 		$data['gender'] = $row->gender;
				
			}		
		}



		$this->load->view('super/view_admin', $data, FALSE);
	}


 public function ajax_delete($id)
    {
    	$this->_make_sure_is_admin();
        $this->admin->delete_by_id($id);
        redirect('admin/anggota');    
    }

  public function ajax_list()
    {
    	$this->_make_sure_is_admin();
        $list = $this->admin->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $admin) {
            $no++;
            $row = array();
            $row[] = $no;  //0
            $row[] = $admin->nama; //1
            $row[] = $admin->email;  //2
            $row[] = $admin->hp; //3
            $row[] = $admin->hp2; //4
            $row[] = $admin->alamat; //5
            $row[] = $admin->gender; //6
            $row[] = $admin->level; //7
            $row[] = $admin->id; //8
 
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->admin->count_all(),
                        "recordsFiltered" => $this->admin->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
        function fetch_data_from_post(){
        $this->_make_sure_is_admin();

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




//dipakai setiap function di atas
	function _make_sure_is_admin(){
	$level = "";
	$is_user="";
    $is_user = $this->session->userdata('status_login');
    if ($is_user) {
    foreach ($is_user as $row) {
		$level = $row->level;
 		$id = $row->id;
 		$nama = $row->nama;
 		$email = $row->email;
 		$password = $row->password;
 		$hp = $row->hp;
 		$hp2 = $row->hp2;
 		$alamat = $row->alamat;
 		$gender = $row->gender;
				
	}			
	}
    if ($level == "2" or $level == "1") {
        }else {
            redirect('login','refresh');
        }
     }

    function _make_sure_is_super_admin(){
    $level = "";
    $is_user="";
    $is_user = $this->session->userdata('status_login');
    if ($is_user) {
    foreach ($is_user as $row) {
        $level = $row->level;
        $id = $row->id;
        $nama = $row->nama;
        $email = $row->email;
        $password = $row->password;
        $hp = $row->hp;
        $hp2 = $row->hp2;
        $alamat = $row->alamat;
        $gender = $row->gender;
                
    }           
    }
    if ( $level == "1") {
        }else {
            redirect('login','refresh');
        }
     }
	
function generate_random_string($length){
    $this->_make_sure_is_admin();
    $characters = '0123456789';
    $randomString = '';
    for ($i=0; $i <$length ; $i++) { 
        $randomString.=$characters[rand(0, strlen($characters)-1)];
    }
    return $randomString;
}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */