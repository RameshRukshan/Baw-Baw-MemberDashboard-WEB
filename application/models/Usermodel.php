<?php

class Usermodel extends CI_Model {


	function checkLoginCredentials(){

        $email = $this->input->post('username'); 
        $pass = $this->input->post('password');

        $this->db->where('RMID', $email);
        $this->db->where('password', $pass);

        $respond = $this->db->get('RMember');
        if ($respond->num_rows() == 1){
            return $respond->row(0);
        }else{
            return false;
        }
    }

    function getAllUserDetails(){
        $query = $this->db->get('RMember');
        return $query->result();
    }

    function getNewNotifications(){
        $this->db->where('status', 1);
        $query = $this->db->get('notification');

        return $query->result(); 
    }

    function getAllNotification() {

        $query = $this->db->get('notification');

        return $query->result();
    }

    function getNotification($id){
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        return $query->result(); 
    }

}
?>