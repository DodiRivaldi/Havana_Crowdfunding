<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Project
 *
 * @author Green Lenovo
 */
class Project extends CI_Controller {

    //put your code here

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->load->helper('form');
//        if (!$this->ion_auth->logged_in()) {
//            $data['is_loggedin'] = $this->ion_auth->logged_in();
//            $this->load->view("auth/login", $data);
//        }
    }

    /**
     * Index Controller
     */
    public function index($category = "") {

        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['category'] = $category;
        // Checking if user is logged in
        //if ($this->ion_auth->logged_in()) {
            $this->load->view("project/index", $data);
        //}
    }

    public function details($id) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['projectId'] = $id;
        // Checking if user is logged in
        //if ($this->ion_auth->logged_in()) {
            $this->load->view("project/details", $data);
       // }
    }

    /**
     * Create project controller
     */
    public function create() {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        
        //Setting validation rules
        $config = array(
            array(
                'field' => 'title',
                'label' => 'Project Name',
                'rules' => 'required|is_unique[projects.title]|max_length[30]|min_length[5]',
                array(
                    'required' => 'You hav not entered %s',
                    'is_unique' => 'This %s already exists'
                )
            ),
            array(
                'field' => 'description',
                'label' => 'Project Description',
                'rules' => 'required|min_length[15]|max_length[240]'
            ),
            array(
                'field' => 'address',
                'label' => 'Address',
                'rules' => 'required|min_length[5]|max_length[100]'
            ),
            array(
                'field' => 'telephone',
                'label' => 'Contact Number',
                'rules' => 'required|min_length[15]|max_length[50]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email Address',
                'rules' => 'required|min_length[15]|max_length[50]'
            ),
        );
        $this->form_validation->set_rules($config);
        $data['create_form'] = $config;
        if ($this->input->post() != NULL && $this->form_validation->run()) {
            $this->load->view("");
        } else {
            $this->load->view("project/create", $data);
        }
    }

    /**
     * Edit project controller
     * @param int $id ProjectId
     */
    public function edit($id) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['projectId'] = $id;
        $this->load->view("project/edit", $data);
    }

    /**
     * Deletes/Deactive project controller
     * @param int $int
     */
    public function delete($id) {
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $data['projectId'] = $id;
        $this->load->view("project/delete", $data);
    }

}
