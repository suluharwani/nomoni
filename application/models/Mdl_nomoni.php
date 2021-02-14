<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_nomoni extends CI_Model {

	function admin(){
	$query = $this->db->get('admin');
	return $query;
}

}

/* End of file Mdl_nomoni.php */
/* Location: ./application/models/Mdl_nomoni.php */