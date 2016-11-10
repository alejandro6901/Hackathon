<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hackathon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function load_view()
    {
        $data['instrument'] = $this->Hackathon_model->getInstruments();
        $data['genre'] = $this->Hackathon_model->getGenre();
        $this->load->view('Hackathon/hackathons', $data);
    }
    public function registerMusician()
    {
        $data = array(
               'city' => $_POST['city'],
               'name' => $_POST['name'],
               'id_instrument' => $_POST['instrument']
         );
        $this->Hackathon_model->insertMusician($data);
      
        redirect('Search/load_search');
    }
}
