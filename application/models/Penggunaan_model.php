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
    function get_penggunaan_by_filter($by_kantor, $by_divisi){
      $this->db->select('*');
      $this->db->from('penggunaan');
      $this->db->join('inventory', 'penggunaan.id_inventory = inventory.id_inventory');
      $this->db->join('habispakai', 'inventory.id_inventory = habispakai.id_inventory');
      $this->db->join('divisi', 'divisi.id_divisi = inventory.id_divisi_penerima');
      $this->db->join('kantor', 'kantor.id_kantor = divisi.id_kantor');
      if($by_divisi == 0 && $by_kantor == 0){
        ;
      }
      else if($by_divisi == null){
        $this->db->where('kantor.id_kantor =', $by_kantor);
      }
      else if($by_kantor == 0){
        $this->db->where('nama_divisi =', $by_divisi);
      }
      else{
        $this->db->where('kantor.id_kantor =', $by_kantor);
        $this->db->where('nama_divisi =', $by_divisi);
      }
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_penggunaan_by_kantor($id_kantor){
      $this->db->select('*');
      $this->db->from('penggunaan');
      $this->db->join('inventory', 'penggunaan.id_inventory = inventory.id_inventory');
      $this->db->join('habispakai', 'inventory.id_inventory = habispakai.id_inventory');
      $this->db->join('divisi', 'divisi.id_divisi = inventory.id_divisi_penerima');
      $this->db->join('kantor', 'kantor.id_kantor = divisi.id_kantor');
      $this->db->where('kantor.id_kantor =', $id_kantor);
      $query = $this->db->get();
      return $query->result_array();
    }
}
