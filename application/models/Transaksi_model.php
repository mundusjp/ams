<?php

class Transaksi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get transaksi by id_transaksi
     */
    function get_transaksi($id_transaksi)
    {
        return $this->db->get_where('transaksi',array('id_transaksi'=>$id_transaksi))->row_array();
    }

    /*
     * Get all transaksi
     */
    function get_all_transaksi()
    {
        $this->db->order_by('id_transaksi', 'desc');
        return $this->db->get('transaksi')->result_array();
    }
    function get_all_sewa()
    {

        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('kantor', 'transaksi.id_kantor = kantor.id_kantor');
       $this->db->where('transaksi.jenis_transaksi',"sewa");
       return $this->db->get()->result_array();
   }
   function get_sewa_by_kantor($by_kantor)
   {
       $this->db->select('*');
       $this->db->from('transaksi');
       $this->db->join('kantor', 'transaksi.id_kantor = kantor.id_kantor');
       $this->db->where('kantor.id_kantor', $by_kantor);
        $this->db->where('transaksi.jenis_transaksi',"sewa");
        return $this->db->get()->result_array();

    }
    function get_all_beli()
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('kantor', 'transaksi.id_kantor = kantor.id_kantor');
       $this->db->where('transaksi.jenis_transaksi',"beli");
       return $this->db->get()->result_array();
   }
    function get_beli_by_kantor($by_kantor)
   {
       $this->db->select('*');
       $this->db->from('transaksi');
       $this->db->join('kantor', 'transaksi.id_kantor = kantor.id_kantor');
       $this->db->where('kantor.id_kantor', $by_kantor);
        $this->db->where('transaksi.jenis_transaksi',"beli");
        return $this->db->get()->result_array();
    }

    /*
     * function to add new transaksi
     */
    function add_transaksi($params)
    {
        $this->db->insert('transaksi',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update transaksi
     */
    function update_transaksi($id_transaksi,$params)
    {
        $this->db->where('id_transaksi',$id_transaksi);
        return $this->db->update('transaksi',$params);
    }

    /*
     * function to delete transaksi
     */
    function delete_transaksi($id_transaksi)
    {
        return $this->db->delete('transaksi',array('id_transaksi'=>$id_transaksi));
    }
}
