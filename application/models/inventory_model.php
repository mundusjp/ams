<?php

// class Inventory_model extends CI_Model{
// 	function ambil_data(){
// 		return $this->db->get('inventory');
//     }
//     function input_data($data,$table){
// 		$this->db->insert($table,$data);
//     }
//     function hapus_data($where,$table){
//         $this->db->where($where);
//         $this->db->delete($table);
//     }
//     // function update_data(){
// 	// 	return $this->db->get('inventory');
//     // }
//     function edit_data($where,$table){
//         return $this->db->get_where($table,$where);
//     }
//     function update_data($where,$data,$table){
// 		$this->db->where($where);
// 		$this->db->update($table,$data);
// 	}
// }
class Inventory_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get inventory by id_inventory
     */
    function get_last_id()
    {
        return $this->db->select("id_inventory")->limit(1)->order_by('id_inventory',"DESC")->get("inventory")->row();
    }
    function get_time($id_inventory)
    {
      $this->db->select('tanggal');
      $this->db->from('inventory');
      $this->db->where('id_inventory', $id_inventory);
      $query = $this->db->get();
      return $query->result_array();
    }
    function get_inventory($id_inventory)
    {
        return $this->db->get_where('inventory',array('id_inventory'=>$id_inventory))->row_array();
    }
    function get_beli($id_beli)
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->where('inventory.kategori',"beli");
        $this->db->where('inventory.id_transaksi',$id_beli);
        $query = $this->db->get();
        return $query->result();
    }
    function get_sewa($id_sewa)
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->where('inventory.kategori',"sewa");
        $this->db->where('inventory.id_transaksi',$id_sewa);
        $query = $this->db->get();
        return $query->result();
    }
    /*
     * Get all inventory
     */
    function get_all_inventory()
    {
        $this->db->order_by('nama', 'asc');
        return $this->db->get('inventory')->result_array();
    }

    function get_all_inventory_kantor()
    {
        $this->db->select('*');
        $this->db->order_by('nama', 'asc');
        $this->db->from('inventory');
        $this->db->join('divisi', 'inventory.id_divisi_penerima = divisi.id_divisi');
        $this->db->join('kantor', 'divisi.id_kantor = kantor.id_kantor');
        $query = $this->db->get();
          return $query->result_array();
    }

    function get_inventory_by_kantor($by_kantor){
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('divisi', 'inventory.id_divisi_penerima = divisi.id_divisi');
        $this->db->join('kantor', 'divisi.id_kantor = kantor.id_kantor');
        $this->db->where('kantor.id_kantor', $by_kantor);
        $query = $this->db->get();
          return $query->result_array();
    }
    /*
     * function to add new inventory
     */
    function add_inventory($params)
    {
        $this->db->insert('inventory',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update inventory
     */
    function update_inventory($id_inventory,$params)
    {
        $this->db->where('id_inventory',$id_inventory);
        return $this->db->update('inventory',$params);
    }

    /*
     * function to delete inventory
     */
    function delete_inventory($id_inventory)
    {
        return $this->db->delete('inventory',array('id_inventory'=>$id_inventory));
    }
}
