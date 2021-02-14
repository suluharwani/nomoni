<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_login extends CI_Model {

function login($email,$password){
	$check = $this->db->get_where('admin',array('email' => $email,'password' => md5($password)));
 	if ($check->num_rows()>0) {
 		return 1;
 	}
 	else{
 		return 0;
 	} 
 }
 function login_adm($email,$password){
 		$check = $this->db->get_where('admin',array('email' => $email,'password' => md5($password)));
 	
 	// foreach ($check->result() as $row) {
 	// 	$data_admin['level'] = $row->level;
 	// 	$data_admin['id'] = $row->id;
 	// 	$data_admin['nama'] = $row->nama;
 	// 	$data_admin['email'] = $row->email;
 	// 	$data_admin['password'] = $row->password;
 	// 	$data_admin['hp'] = $row->hp;
 	// 	$data_admin['hp2'] = $row->hp2;
 	// 	$data_admin['alamat'] = $row->alamat;
 	// 	$data_admin['gender'] = $row->gender;

 	//}

 	if ($check->num_rows()>0) {

 		return $check->result();
 	}
 	else{
 		return 0;
 	}
 }

}