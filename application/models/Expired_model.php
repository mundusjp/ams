<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Expired_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get beli by id_beli
     */
    function get_expired($id_inventory)
    {
        return $this->db->get_where('tidakhabispakai',array('id_inventory'=>$id_inventory))->row_array();
    }
    function join()
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('tidakhabispakai', 'inventory.id_inventory = tidakhabispakai.id_inventory');
        $this->db->where('tidakhabispakai.status',"ada");
        $query = $this->db->get();
        return $query->result();
    }

    function join_penjualan()
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('inventory', 'penjualan.id_inventory = inventory.id_inventory');
        $this->db->join('tidakhabispakai', 'penjualan.id_inventory = tidakhabispakai.id_inventory');
        $query = $this->db->get();
        return $query->result();
    }

    function join_pembuangan()
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('tidakhabispakai', 'inventory.id_inventory = tidakhabispakai.id_inventory');
        $this->db->where('tidakhabispakai.status',"dibuang");
        $query = $this->db->get();
        return $query->result();
    }

    /*
     * Get all inventory
     */
    function get_all_expired()
    {
        $this->db->order_by('id_inventory', 'desc');
        return $this->db->get('inventory')->result_array();
    }

    function add_penjualan($id_inventory, $params, $param)
    {
        $this->db->insert('penjualan',$params);
        $this->db->insert_id();
        $this->db->where('id_inventory',$id_inventory);
        $this->db->update('tidakhabispakai',$param);   
    }

    function add_pembuangan($id_inventory,$params)
    {
        $this->db->where('id_inventory',$id_inventory);
        return $this->db->update('tidakhabispakai',$params);
    }

    function add_perpanjang($id_inventory,$params)
    {
        $this->db->where('id_inventory',$id_inventory);
        return $this->db->update('tidakhabispakai',$params);
    }
}
