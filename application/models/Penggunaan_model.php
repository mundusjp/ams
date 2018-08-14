<?php
class Penggunaan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function add_penggunaan($peng)
    {
        $this->db->insert('penggunaan',$peng);
        return $this->db->insert_id();
    }

    function update_penggunaan($id_penggunaan,$params)
    {
        $this->db->where('id_penggunaan',$id_penggunaan);
        return $this->db->update('penggunaan',$params);
    }

    function get_penggunaan($id_inventory)
    {
      $this->db->select('*');
      $this->db->from('penggunaan');
      $this->db->join('inventory', 'penggunaan.id_inventory = inventory.id_inventory');
      $this->db->join('habispakai', 'inventory.id_inventory = habispakai.id_inventory');
      $this->db->join('divisi', 'divisi.id_divisi = inventory.id_divisi_penerima');
      $this->db->where('inventory.id_inventory =', $id_inventory);
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_all_penggunaan()
    {
      $this->db->select('*');
      $this->db->from('penggunaan');
      $this->db->join('inventory', 'penggunaan.id_inventory = inventory.id_inventory');
      $this->db->join('habispakai', 'inventory.id_inventory = habispakai.id_inventory');
      $this->db->join('divisi', 'divisi.id_divisi = inventory.id_divisi_penerima');
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_penggunaan_by_kantor($by_kantor){
      $this->db->select('*');
      $this->db->from('penggunaan');
      $this->db->join('inventory', 'penggunaan.id_inventory = inventory.id_inventory');
      $this->db->join('habispakai', 'inventory.id_inventory = habispakai.id_inventory');
      $this->db->join('divisi', 'divisi.id_divisi = inventory.id_divisi_penerima');
      $this->db->join('kantor', 'kantor.id_kantor = divisi.id_kantor');
      $this->db->where('kantor.id_kantor =', $by_kantor);
      $query = $this->db->get();
      return $query->result_array();
    }
}
