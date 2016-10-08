<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of project_model
 *
 * @author Green Lenovo
 */
class project_model extends CI_Model{
  
    public $projectId;
    public $userId;
    public $title;
    public $description;
    public $profilePic;
    public $categoryId;
    public $video;
    public $business_plan;
    public $address;
    public $telephone;
    public $email;
    public $facebook;
    public $active;
    public  $dateCreated;
    public $dateModified;
    
    
    public function __construct() {
        parent::__construct();
        
    }
    
    /**
     * Gets a project from db
     * @param int $id
     * @return object
     */
    public function get_project($id){
        return $project;
    }
    
    /**
     * Gets all projects from db
     * @return array
     */
    public function get_projects() {
        return $projects;
    }
    
    /**
     * Updates project details
     * @param object $project
     * @return object
     */
    public function update_project($project) {
        return $project;
    }
    
    /**
     * Creates new project from $_POST values
     * @return object
     */
    public function create_project() {
        return $project;
    }
    
    /**
     * Deletes a project
     * @param int $id
     * @return boolean
     */
    public function delete_project($id) {
        return $status;
    }

    
   
            
}
