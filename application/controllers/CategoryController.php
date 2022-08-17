<?php
class CategoryController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('category');
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
        $data['category'] = $this->category->getAll();        
        $data['contents'] = 'category/manage-category';
		$this->load->view('layout/main', $data);
    }
    /*
    function for  add Category get
    created by your name
    created at 15-08-22.
    */
    public function addCategory() {
        $data['contents'] = 'category/add-category';
        $this->load->view('layout/main', $data);
    }
    /*
    function for add Category post
    created by your name
    created at 15-08-22.
    */
    public function addCategoryPost() {
        $data['category_name'] = $this->input->post('category_name');
    $this->category->insert($data);
        $this->session->set_flashdata('success', 'Category added Successfully');
        redirect('manage-category');
    }
    /*
    function for edit Category get
    returns  Category by id.
    created by your name
    created at 15-08-22.
    */
    public function editCategory($category_id) {
        $data['category_id'] = $category_id;
        $data['category'] = $this->category->getDataById($category_id);
        $data['contents'] = 'category/edit-category';
        $this->load->view('layout/main', $data);
    }
    /*
    function for edit Category post
    created by your name
    created at 15-08-22.
    */
    public function editCategoryPost() {
        $category_id = $this->input->post('category_id');
        $category = $this->category->getDataById($category_id);
        $data['category_name'] = $this->input->post('category_name');
    $edit = $this->category->update($category_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Category Updated');
            redirect('manage-category');
        }
    }
    /*
    function for view Category get
    created by your name
    created at 15-08-22.
    */
    public function viewCategory($category_id) {
        $data['category_id'] = $category_id;
        $data['category'] = $this->category->getDataById($category_id);
        $data['contents'] = 'category/view-category';
        $this->load->view('layout/main', $data);
    }
    /*
    function for delete Category    created by your name
    created at 15-08-22.
    */
    public function deleteCategory($category_id) {
        $delete = $this->category->delete($category_id);
        $this->session->set_flashdata('success', 'category deleted');
        redirect('manage-category');
    }
    /*
    function for activation and deactivation of Category.
    created by your name
    created at 15-08-22.
    */
    public function changeStatusCategory($category_id) {
        $edit = $this->category->changeStatus($category_id);
        $this->session->set_flashdata('success', 'category '.$edit.' Successfully');
        redirect('manage-category');
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