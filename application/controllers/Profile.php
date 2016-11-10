<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function load_profile()
    {
        $valorrecuperado = $this->session->flashdata('id_musician');
        $data['id']  = $valorrecuperado;
        $data['genre'] = $this->Hackathon_model->getGenre();
        $this->load->model('Profile_model');
        $data['instruments'] = $this->Profile_model->getInstruments($valorrecuperado);
        $data['musician'] = $this->Profile_model->getMusicianID($valorrecuperado);

        $this->load->view('Profile/profiles', $data);
    }
  

  }
