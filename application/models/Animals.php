<?php

class Animals extends CI_Model {

	function insertAnimalData(){

		date_default_timezone_set("Asia/Colombo");

		$data = array (
            'name' => $this->input->post('name',true),
            'age' => $this->input->post('age',true),
            'type' => $this->input->post('type',true),
            'description' => $this->input->post('description',true),
            'gender' => $this->input->post('gender', true)    
        );
  
        $this->db->insert('animal',$data);

        $recData = array(
        	'animal_id' => $this->db->insert_id(),
        	'RMID' => $this->session->userData('RMID'),
        	'location' => $this->input->post('location',true),
        	'date' => date("Y-m-d"),
            'time' => date("h:i:sa")
        );
        
        return $this->db->insert('rescue',$recData);
	}

    function getLatestInc()
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit(8);
        $query = $this->db->get('inform');

        return $query->result();
    }
}

?>