<?php

class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


  function add_admin($params)
  {
      $this->db->insert('user',$params);
      return $this->db->insert_id();
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

    function update_admin($id_admin,$params)
    {
        $this->db->where('id_user',$id_admin);
        return $this->db->update('user',$params);
    }

    function delete_admin($id_admin)
    {
        return $this->db->delete('user',array('id_user'=>$id_admin));
    }
}
