<?php

class Profile_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }

   public function getInstruments($id)
   {
       $query = $this->db->query("Select * from instrument WHERE id = '$id'");
       return $query->result_array();
   }
   public function getGenre()
   {
       $query = $this->db->get('genre');
       return $query->result_array();
   }
   public function getMusicianID($id)
   {
       $query = $this->db->query("Select * from musician WHERE id = '$id'");
       return $query->result_array();
   }



}

?>
