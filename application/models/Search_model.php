<?php

class Search_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getInstruments()
    {
        $query = $this->db->get('instrument');

        return $query->result_array();
    }
    public function getGenre()
    {
        $query = $this->db->get('genre');

        return $query->result_array();
    }

    public function getMusician($name, $instrument)
    {
        $query = $this->db->query("select * from musician where (name LIKE '%$name%') and (id_instrument = '$instrument')");
        return $query->result_array();
    }
}
