<?php

class ProductController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('product');
        $this->load->model('category');
        $this->load->library('session');
    }
    /*
    function for manage Product.
    return all Products.
    created by your name
    created at 17-08-22.
	santosh salve
    */
    public function manageProduct() { 
        $data['products'] = $this->product->getAll();
        $data['contents'] = 'product/manage-product';
		$this->load->view('layout/main', $data);
    }
    /*
    function for  add Product get
    created by your name
    created at 17-08-22.
    */
    public function addProduct() {
        $data['contents'] = 'product/add-product';
        $data['category'] = $this->category->getAll();
        // print_r($data);
        // die;
		$this->load->view('layout/main', $data);
    }
    /*
    function for add Product post
    created by your name
    created at 17-08-22.
    */
    public function addProductPost() {
        $data['category_id'] = $this->input->post('category_id');
        $data['product_name'] = $this->input->post('product_name');
        $data['product_detail'] = $this->input->post('product_detail');
        $data['product_price'] = $this->input->post('product_price');
        $data['product_stock'] = $this->input->post('product_stock');

        // print_r($data);
        // die;
    $this->product->insert($data);
        $this->session->set_flashdata('success', 'Product added Successfully');
        redirect('manage-product');
    }
    /*
    function for edit Product get
    returns  Product by id.
    created by your name
    created at 17-08-22.
    */
    public function editProduct($product_id) {
        $data['product_id'] = $product_id;
        $data['product'] = $this->product->getDataById($product_id);
        $data['category'] = $this->category->getAll();
        $data['contents'] = 'product/edit-product';
		$this->load->view('layout/main', $data);
    }
    /*
    function for edit Product post
    created by your name
    created at 17-08-22.
    */
    public function editProductPost() {
        $product_id = $this->input->post('product_id');
        $product = $this->product->getDataById($product_id);
        $data['category_id'] = $this->input->post('category_id');
        $data['product_name'] = $this->input->post('product_name');
        $data['product_detail'] = $this->input->post('product_detail');
        $data['product_price'] = $this->input->post('product_price');
        $data['product_stock'] = $this->input->post('product_stock');
    $edit = $this->product->update($product_id,$data);
        if ($edit) {
            $this->session->set_flashdata('success', 'Product Updated');
            redirect('manage-product');
        }
    }
    /*
    function for view Product get
    created by your name
    created at 17-08-22.
    */
    public function viewProduct($product_id) {
        $data['product_id'] = $product_id;
        $data['product'] = $this->product->getDataById($product_id);

        $data['contents'] = 'product/view-product';
		$this->load->view('layout/main', $data);

    }
    /*
    function for delete Product    created by your name
    created at 17-08-22.
    */
    public function deleteProduct($product_id) {
        $delete = $this->product->delete($product_id);
        $this->session->set_flashdata('success', 'product deleted');
        redirect('manage-product');
    }
    /*
    function for activation and deactivation of Product.
    created by your name
    created at 17-08-22.
    */
    public function changeStatusProduct($product_id) {
        $edit = $this->product->changeStatus($product_id);
        $this->session->set_flashdata('success', 'product '.$edit.' Successfully');
        redirect('manage-product');
    }
    
}