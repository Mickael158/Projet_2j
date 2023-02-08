<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement extends CI_Controller {

    public function checkLogin() {
        $this->load->model('Membre');
        $rep = true;
        try {
            $this->Membre->checkLog($this->input->post('email'), $this->input->post('password'));
        } catch (Exception $e) {
            $rep = $e->getMessage();
        }

        echo json_encode($rep);
    }

    public function newMembre() {
        $this->load->model('Membre');
        $rep = true;
        try {
            $this->Membre->newMembre($this->input->post('nom'), $this->input->post('prenom'), $this->input->post('email'), $this->input->post('dtn'), $this->input->post('password'));
        } catch (Exception $e) {
            $rep = $e->getMessage();
        }

        echo json_encode($rep);
    }
}