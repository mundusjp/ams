<?php 
 

class Habis_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get inventory by id_inventory
     */
    function get_habis($id_inventory)
    {
        return $this->db->get_where('habispakai',array('id_inventory'=>$id_inventory))->row_array();
    }
    function join()
    {
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('habispakai', 'inventory.id_inventory = habispakai.id_inventory');
        $query = $this->db->get();
        return $query->result();
    }
    /*
     * Get all inventory
     */
    function get_all_habis()
    {
        $this->db->order_by('id_inventory', 'desc');
        return $this->db->get('inventory')->result_array();
    }
        
    /*
     * function to add new inventory
     */
    function add_habis($params)
    {
        $this->db->insert('habispakai',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update inventory
     */
    function update_habis($id_inventory,$params)
    {
        $this->db->where('id_inventory',$id_inventory);
        return $this->db->update('habispakai',$params);
    }
    
    /*
     * function to delete inventory
     */
    function delete_habis($id_inventory)
    {
        return $this->db->delete('habispakai',array('id_inventory'=>$id_inventory));
    }
}