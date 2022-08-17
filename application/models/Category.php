<?php

class Category extends CI_Model {

    /*
    return all Categorys.
    created by your name
    created at 15-08-22.
    */
    public function getAll() {
        return $this->db->get('Category')->result();
    }
    /*
    function for create Category.
    return Category inserted id.
    created by your name
    created at 15-08-22.
    */
    public function insert($data) {
        $this->db->insert('Category', $data);
        return $this->db->insert_id();
    }
    /*
    return Category by id.
    created by your name
    created at 15-08-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('Category')->result();
    }
    /*
    function for update Category.
    return true.
    created by your name
    created at 15-08-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('Category', $data);
        return true;
    }
    /*
    function for delete Category.
    return true.
    created by your name
    created at 15-08-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('Category');
        return true;
    }
    /*
    function for change status of Category.
    return activated of deactivated.
    created by your name
    created at 15-08-22.
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