<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Green Lenovo
 */
class Home extends CI_Controller {

    //put your code here
    public function index() {
        $this->load->library('ion_auth');
        $this->load->model('project_model');
        if ($this->ion_auth->logged_in()) {
            $data['project'] = $this->project_model->get_user_project($this->ion_auth->user()->row()->id);
        }
        $data['projects'] = $this->project_model->get_projects();
//        print_r($this->project_model->get_projects()) ;
//        die();
        $data['is_loggedin'] = $this->ion_auth->logged_in();
        $this->load->view('Home/index', $data);
    }
    
    

}
