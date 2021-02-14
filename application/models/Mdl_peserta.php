<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_Peserta extends CI_Model {

public $_table = 'peserta';
    var $column_order = array(null, 'nama_lengkap','kode_unik','hp1','hp2','kategori_lomba','riwayat_penyakit','id','id','id','id','id','id','id','status','id'); //set column field database for datatable orderable
    var $column_search = array('nama_lengkap','kode_unik','hp1','hp2','email','status'); //set column field database for datatable searchable 
    var $order = array('id' => 'desc'); // default order

    function __construct() {
        parent::__construct();
    }



    //// data tables query //////
    private function _get_datatables_query()
    {

        $this->db->from($this->_table);
       


        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }


    function count_filtered()
    {
        $this->_get_datatables_query();
        $this->_get_custom_field();
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function get_datatables_bike()
    {
        $this->_get_datatables_query();
        $this->_get_custom_field();
        $this->db->where('kategori_lomba=', 4);

        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        //$query = $this->db->query('select * from peserta where kategori_lomba < 4'); 
        return $query->result();
    }

    function get_datatables()
    { 
        $this->_get_datatables_query();
        $this->_get_custom_field();
        $this->db->where('kategori_lomba<', 4);

        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        //$query = $this->db->query('select * from peserta where kategori_lomba < 4'); 
        return $query->result();
    }
    function _get_custom_field()
    {
        if(isset($_POST['columns'][6]['search']['value']) and $_POST['columns'][6]['search']['value'] !=''){
            $this->db->where('status',$_POST['columns'][6]['search']['value']);
        }
    }

    public function count_all()
    {
        return $this->db->count_all_results('peserta'); 
    }
    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }


    public function metopem($id) 
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', array('tipe_bayar' => $tipe_bayar));
    }
 
    public function konfirmasi($id, $id_admin, $nama_admin)
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', array('status' => 1, 'id_admin' => $id_admin , 'nama_admin' => $nama_admin));
    }
    public function batal_konfirmasi($id)
    {
        $this->db->where('id', $id);
        $this->db->update('peserta', array('status' => 0));
    }



//dashboard

function jumlah_marathon(){
$this->db->from($this->_table);
$this->db->where('kategori_lomba<', 4);
$query = $this->db->get();
return $query->num_rows();
}
function jumlah_marathon_bayar(){
$array = array(
    'kategori_lomba<' => 4 ,
    'status'=>1
);
$this->db->from($this->_table);
$this->db->where($array);
$query = $this->db->get();
return $query->num_rows();
}
function jumlah_bike(){
$this->db->from($this->_table);
$this->db->where('kategori_lomba=', 4);
$query = $this->db->get();
return $query->num_rows();
}
function jumlah_bike_bayar(){
$array = array(
    'kategori_lomba' => 4 ,
    'status'=>1
);
$this->db->from($this->_table);
$this->db->where($array);
$query = $this->db->get();
return $query->num_rows();
}

function jumlah_pendaftaran_online(){
    $array = array(
    'metode_daftar'=>1,
    'status'=>1
);
$this->db->from($this->_table);
$this->db->where($array);
$query = $this->db->get();
return $query->num_rows();
}
function jumlah_pendaftaran_offline(){
    $array = array(
    'metode_daftar'=>0,
    'status'=>1
);
$this->db->from($this->_table);
$this->db->where($array);
$query = $this->db->get();
return $query->num_rows();
}




//dashboard
function get_table() {
$table = "peserta";
return $table;
}

function get($order_by) {
$table = $this->get_table();
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$table = $this->get_table();
$this->db->limit($limit, $offset);
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}

function get_where($id) {
$table = $this->get_table();
$this->db->where('id', $id);
$query=$this->db->get($table);
return $query;
}

function get_where_custom($col, $value) {
$table = $this->get_table();
$this->db->where($col, $value);
$query=$this->db->get($table);
return $query;
}

function _insert($data) {
$table = $this->get_table();
$this->db->insert($table, $data);
}

function _update($id, $data) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->update($table, $data);
}

function _delete($id) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->delete($table);
}

function count_where($column, $value) {
$table = $this->get_table();
$this->db->where($column, $value);
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}


function get_max() {
$table = $this->get_table();
$this->db->select_max('id');
$query = $this->db->get($table);
$row=$query->row();
$id=$row->id;
return $id;
}

function _custom_query($mysql_query) {
$query = $this->db->query($mysql_query);
return $query;
}

}

/* End of file Mdl_peserta.php */
/* Location: ./application/models/Mdl_peserta.php */