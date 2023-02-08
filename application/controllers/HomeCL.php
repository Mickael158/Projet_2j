<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCL extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        if($this->session->has_userdata('membre')) {
            if($this->session->userdata('membre')['admin'] == 0) {
                $this->load->model('Objet');
                $data['data'] = $this->Objet->getMembreActu($this->session->userdata('membre')['id']);
                $data['title'] = 'acceuil';
                $this->load->view('header', $data);
                $this->load->view('acceuil',$data);
                $this->load->view('footer');
            } else {
                redirect(base_url('index.php/AdminCL/index'));
            }
        } else {
            $this->load->view('login');
        }
    }

    public function echager($id = '') {
        $data['title'] = 'Detail du produit';

        $this->load->model('Objet');
        $data['data'] = $this->Objet->getObjectById($id);

        $this->load->view('header', $data);
        $this->load->view('echanger', $data); 
        $this->load->view('footer');
    }

    public function demandeEchange($idcontre = '') {
        $this->load->helper('url');
        $transac = $this->session->echange;
        $transac['ido2'] = $idcontre;
        $this->session->echage = $transac;

        $this->load->model('Echange');
        $this->Echange->changer($this->session->echage);

        redirect(base_url('index.php/HomeCL/index'));
    }

    public function echageObject($ido = '', $membre = '') {
        $this->load->model('Objet');
        $this->load->helper('url');
        
        $transaction = array(
            'ido1' => $ido,
            'idmembre1' => $membre,
            'ido2' => null,
            'idmembre2' => $this->session->userdata('membre')['id']
        );
        $this->session->set_userdata('echange', $transaction);
        redirect(base_url('index.php/HomeCL/loadContreEchange/'));
    }

    public function loadContreEchange() {
        $this->load->model('Objet');
        $data['title'] = 'Effectu echanger';
        $data['data'] = $this->Objet->getMembreObjet($this->session->userdata('membre')['id']);
        $this->load->view('header', $data);
        $this->load->view('contre', $data);
        $this->load->view('footer');
    }

    public function inscri() {
        $this->load->view('inscri');
    }

    public function disconnect() {
        $this->load->helper('url');
        $this->session->unset_userdata('membre');

        redirect('HomeCL/index');
    }

    public function home() {
        $this->load->model('Objet');
        $data['data'] = $this->Objet->getMembreObjet($this->session->userdata('membre')['id']);
        $data['title'] = 'Vos objet';
        $this->load->view('header', $data);
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

    public function newItem() {
        $data['title'] = 'Nouvelle contenue a votre collection';

        $this->load->model('Categorie');
        $data['cat'] = $this->Categorie->getAllCategorie();

        $this->load->view('header', $data);
        $this->load->view('new',$data);
        $this->load->view('footer');    
    } 

    public function allProposition() {
        $this->load->model('Echange');
        $data['title'] = 'Les demande d\'echange';
        $data['data'] = $this->Echange->getAllRequest($this->session->userdata('membre')['id']);

        $this->load->view('header', $data);
        $this->load->view('echangeRequest', $data);
        $this->load->view('footer'); 
    }

    public function cancel($idechange = '') {
        $this->load->helper('url');
        $this->load->model('Echange');
        $this->Echange->etatChange($idechange, -1);

        redirect('HomeCL/index');
    }

    public function approveChange($idechange = '') {
        $this->load->helper('url');
        $this->load->model('Echange');
        $this->load->model('Objet');
        $this->Echange->etatChange($idechange, 1);

        $data = $this->Echange->getChangeById($idechange);

        $this->Objet->switchPropriety($data['ido1'],$data['ido2'],$data['m1'],$data['m2']);
        
        redirect('HomeCL/index');
    }

    public function dropobj($id = '') {
        $this->load->helper('url');
        $this->load->model('Objet');
        $this->Objet->drop($id);
        redirect('HomeCL/index');
    }
}