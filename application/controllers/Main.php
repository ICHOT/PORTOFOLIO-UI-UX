<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
  public function index()
  {
    $this->load->view("templates/header");
    $this->load->view("templates/navbar");
    $this->load->view("items/card");
    $this->load->view("items/skillpie");
    $this->load->view("items/foot");
    $this->load->view("templates/footer");
  }
}

// $this->load->view("items/piecart");
// $this->load->view("items/skill");
// $this->load->view("test");
