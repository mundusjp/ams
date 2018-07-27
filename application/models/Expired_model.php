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
}
