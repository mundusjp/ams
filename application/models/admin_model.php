<?php

class Admin_model extends CI_Model{

    // function ambil_data(){
		//     return $this->db->get('user');
    // }
    function input_data($data,$table){
		    $this->db->insert($table,$data);
    }

    function get_admin($id_admin)
    {
        return $this->db->get_where('user',array('id_user'=>$id_admin))->row_array();
    }

    function get_all_admin()
    {
        $this->db->order_by('id_user', 'desc');
        return $this->db->get('user')->result_array();
    }

    // function hapus_data($where,$table){
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
    function update_data(){
		     return $this->db->get('user');
     }

     function hapus_admin($id_admin)
     {
         return $this->db->delete('user',array('id_user'=>$id_admin));
     }
    // function edit_data($where,$table){
    //     return $this->db->get_where($table,$where);
    // }
}
