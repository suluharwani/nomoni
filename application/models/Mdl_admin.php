<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_admin extends CI_Model {
    public $_table = 'admin';
 
    var $table = 'admin';
    var $column_order = array(null, 'nama','email','hp','hp2','alamat','gender','level'); //set column field database for datatable orderable
    var $column_search = array('nama','email','hp','hp2','alamat'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
         
        //add custom filter here
        if($this->input->post('nama'))
        {
            $this->db->where('nama', $this->input->post('nama'));
        }
        if($this->input->post('email'))
        {
            $this->db->like('email', $this->input->post('email'));
        }
        if($this->input->post('hp'))
        {
            $this->db->like('hp', $this->input->post('hp'));
        }
        if($this->input->post('hp2'))
        {
            $this->db->like('hp2', $this->input->post('hp2'));
        }
 
        $this->db->from($this->table);
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
 
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
        
 
    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 
    public function get_list_level()
    {
        $this->db->select('level');
        $this->db->from($this->table);
        $this->db->order_by('level','asc');
        $query = $this->db->get();
        $result = $query->result();
 
        $level = array();
        foreach ($result as $row) 
        {
            $level[] = $row->level;
        }
        return $level;
    }

        public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }
 
}