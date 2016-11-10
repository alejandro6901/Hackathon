<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function load_search()
    {
        $data['musicians'] = array();
        $data['instrument'] = $this->Hackathon_model->getInstruments();
        $data['genre'] = $this->Hackathon_model->getGenre();
        if (isset($_POST['submit'])) {
          $name = $_POST['name'];
          $id_instrument = $_POST['instrument'];
          $this->load->model('Search_model');
          $data['musicians'] = $this->Search_model->getMusician($name, $id_instrument);

        }
        $this->load->view('Search/searches', $data);
    }
    public function load_profile()
    {
      $id = $_POST['more'];
      $this->session->set_flashdata('id_musician', $id);
      redirect('Profile/load_profile/');

    }

}
