<?php

class Admin_model extends CI_Model{

    // function ambil_data(){
		//     return $this->db->get('user');
    // }
    function input_data($data,$table){
		    $this->db->insert($table,$data);
    }
    // function hapus_data($where,$table){
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
    // function update_data(){
		//     return $this->db->get('user');
    // }
    // function edit_data($where,$table){
    //     return $this->db->get_where($table,$where);
    // }
}