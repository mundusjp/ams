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
    function get_inventory($id_inventory)
    {
        return $this->db->get_where('inventory',array('id_inventory'=>$id_inventory))->row_array();
    }
        
    /*
     * Get all inventory
     */
    function get_all_inventory()
    {
        $this->db->order_by('id_inventory', 'desc');
        return $this->db->get('inventory')->result_array();
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