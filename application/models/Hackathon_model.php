 <?php

class Hackathon_model extends CI_Model
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

    public function insertMusician($data)
    {
       $this->db->insert('musician', $data);
    }
    public function musicianGenre($data)
    {
       $this->db->insert('genre', $datagenre);
    }
}

?>
