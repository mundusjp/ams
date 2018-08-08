<?php
class Penggunaan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
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
}
