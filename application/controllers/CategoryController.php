<?php
class CategoryController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category');
        $this->load->library('session');
    }
    /*
    function for manage Category.
    return all Categorys.
    created by your name
    created at 15-08-22.
	santosh salve
    */
    public function manageCategory() { 
        $data['Categorys'] = $this->Category->getAll();        
        $data['contents'] = 'category/manage-Category';
		$this->load->view('layout/main', $data);
    }
    /*
    function for  add Category get
    created by your name
    created at 15-08-22.
    */
    public function addCategory() {
        $data['contents'] = 'category/add-Category';
        $this->load->view('layout/main', $data);
    }
    /*
    function for add Category post
    created by your name
    created at 15-08-22.
    */
    public function addCategoryPost() {
        $data['category_name'] = $this->input->post('category_name');
    $this->Category->insert($data);
        $this->session->set_flashdata('success', 'Category added Successfully');
        redirect('manage-Category');
    }
    /*
    function for edit Category get
    returns  Category by id.
    created by your name
    created at 15-08-22.
    */
    public function editCategory($Category_id) {
        $data['Category_id'] = $Category_id;
        $data['Category'] = $this->Category->getDataById($Category_id);
        $data['contents'] = 'category/edit-Category';
        $this->load->view('layout/main', $data);
    }
    /*
    function for edit Category post
    created by your name
    created at 15-08-22.
    */
    public function editCategoryPost() {
        $Category_id = $this->input->post('Category_id');
        $Category = $this->Category->getDataById($Category_id);
        $data['category_name'] = $this->input->post('category_name');
    $edit = $this->Category->update($Category_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Category Updated');
            redirect('manage-Category');
        }
    }
    /*
    function for view Category get
    created by your name
    created at 15-08-22.
    */
    public function viewCategory($Category_id) {
        $data['Category_id'] = $Category_id;
        $data['Category'] = $this->Category->getDataById($Category_id);
        $data['contents'] = 'category/view-Category';
        $this->load->view('layout/main', $data);
    }
    /*
    function for delete Category    created by your name
    created at 15-08-22.
    */
    public function deleteCategory($Category_id) {
        $delete = $this->Category->delete($Category_id);
        $this->session->set_flashdata('success', 'Category deleted');
        redirect('manage-Category');
    }
    /*
    function for activation and deactivation of Category.
    created by your name
    created at 15-08-22.
    */
    public function changeStatusCategory($Category_id) {
        $edit = $this->Category->changeStatus($Category_id);
        $this->session->set_flashdata('success', 'Category '.$edit.' Successfully');
        redirect('manage-Category');
    }

    public function get_items()
   {
      $draw = intval($this->input->get("draw"));
      $start = intval($this->input->get("start"));
      $length = intval($this->input->get("length"));

      $query = $this->db->get("category");

      $data = [];

      foreach($query->result() as $r) {
           $data[] = $r;
      }

    //   echo '<pre>';
    //   print_r($data);
    //   echo '</pre>';
    //   die;

      $result = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );

      echo json_encode($result);
      exit();
   }
    
}