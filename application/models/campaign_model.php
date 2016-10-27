<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of campaign_model
 *
 * @author Green Lenovo
 */
class campaign_model extends CI_Model {

    //put your code here
    public $CampaignId;
    public $ProjectId;
    public $StartDate;
    public $EndDate;
    public $Description;
    public $StatusId;
    public $Amount;
    public $Current;
    public $DateCreated;
    public $DateModified;

    public function get_campaign($id, $projectId = NULL) {
        if($projectId == NULL){
            $query = $this->db->get_where("Campaigns", array("CampaignId" => $id));
            return $query->row();
        } else {
            return NULL;
        }
    }
    
    public function get_project_campaigns($projectId) {
        $query = $this->db->get_where("Campaigns", array("ProjectId" => $projectId));
        return $query->result();
    }
    
    public function create_campaign($projectId, $startDate, $endDate, $description, $statusId, $amount){
        $this->ProjectId = $projectId;
        $this->StartDate = $startDate;
        $this->EndDate = $endDate;
        $this->Description = $description;
        $this->StatusId = $statusId;
        $this->Amount = $amount;
        $this->Current = 0;
        $this->DateCreated = new DateTime();
        $this->DateModified = new DateTime();
         $this->db->insert('campaigns', $this);
        return $this->db->insert_id();
    }
    
    public function update_campaign($description){
        $this->CampaignId = $id;
        $this->Description = $description;
        return $this->db->update("Campaigns", $this, array("CampaignId" => $this->CampaignId));
    }

}
