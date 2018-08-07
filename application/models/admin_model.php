<?php

class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_admin_by_kantor($by_kantor){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('nama', 'asc');
        $this->db->join('divisi', 'user.id_divisi = divisi.id_divisi');
        $this->db->join('kantor', 'divisi.id_kantor = kantor.id_kantor');
        $this->db->where('kantor.id_kantor', $by_kantor);
        $query = $this->db->get();
          return $query->result_array();
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

    function get_all_admin_by_kantor()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('nama', 'asc');
        $this->db->join('divisi', 'user.id_divisi = divisi.id_divisi');
        $this->db->join('kantor', 'divisi.id_kantor = kantor.id_kantor');
        $query = $this->db->get();
          return $query->result_array();
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


    public function save()
    {
      $pass = $this->input->post('new');
      $data = array (
        'password' => $pass
      );
      $this->db->where('id_user', $this->session->userdata('id_user'));
      $this->db->update('user', $data);
    }

    public function cek_old()
    {
      $old = $this->input->post('old');    $this->db->where('password',$old);
      $query = $this->db->get('user');
      return $query->result();;
    }
}
