<?php 
 

class TidakHabis_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get inventory by id_inventory
     */
    function get_tidakhabis($id_inventory)
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
    /*
     * Get all inventory
     */
    function get_all_tidakhabis()
    {
        $this->db->order_by('id_inventory', 'desc');
        return $this->db->get('inventory')->result_array();
    }
        
    /*
     * function to add new inventory
     */
    function add_tidakhabis($params)
    {
        $this->db->insert('tidakhabispakai',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update inventory
     */
    function update_tidakhabis($id_inventory,$params)
    {
        $this->db->where('id_inventory',$id_inventory);
        return $this->db->update('tidakhabispakai',$params);
    }
    
    /*
     * function to delete inventory
     */
    function delete_tidakhabis($id_inventory)
    {
        return $this->db->delete('tidakhabispakai',array('id_inventory'=>$id_inventory));
    }
}