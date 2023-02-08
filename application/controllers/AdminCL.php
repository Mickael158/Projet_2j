<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCL extends CI_Controller {

    public function index() {
        $this->load->model('Membre');
        $this->load->model('Echange');
        $data['nbr'] = $this->Membre->count();
        $data['change'] = $this->Echange->count();
        $data['title'] = 'Statistiques';
        $this->load->view('header-Admin', $data);
        $this->load->view('stat',$data);
        $this->load->view('footer');
    }
}