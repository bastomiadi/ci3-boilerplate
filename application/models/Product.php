<?php

class Product extends CI_Model {

    /*
    return all Products.
    created by your name
    created at 17-08-22.
    */
    public function getAll() {
        return $this->db->get('product')->result();
    }
    /*
    function for create Product.
    return Product inserted id.
    created by your name
    created at 17-08-22.
    */
    public function insert($data) {
        $this->db->insert('product', $data);
        return $this->db->insert_id();
    }
    /*
    return Product by id.
    created by your name
    created at 17-08-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('product')->result();
    }
    /*
    function for update Product.
    return true.
    created by your name
    created at 17-08-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('product', $data);
        return true;
    }
    /*
    function for delete Product.
    return true.
    created by your name
    created at 17-08-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('product');
        return true;
    }
    /*
    function for change status of Product.
    return activated of deactivated.
    created by your name
    created at 17-08-22.
    */
    public function changeStatus($id) {
        $table=$this->getDataById($id);
             if($table[0]->status==0)
             {
                $this->update($id,array('status' => '1'));
                return "Activated";
             }else{
                $this->update($id,array('status' => '0'));
                return "Deactivated";
             }
    }

}