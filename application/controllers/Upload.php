<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {
    public function index(){
        // load base_url 
        $this->load->model('Objet');
        $this->load->helper('url');
        // Check form submit or not 
        if($this->input->post('upload') != NULL ){ 
            $data = array(); 
            if(!empty($_FILES['file']['name'])){ 
                // Set preference 
                $config['upload_path'] = 'assets/picture/'; 
                $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                $config['max_size'] = '4086'; // max_size in kb 
                $config['file_name'] = $_FILES['file']['name']; 
                // Load upload library 
                $this->load->library('upload',$config); 
                
                // File upload
                if($this->upload->do_upload('file')){ 
                // Get data about the file
                    $uploadData = $this->upload->data(); 
                    $filename = $uploadData['file_name']; 
                    $data['response'] = 'successfully uploaded '.$filename; 
                }else{ 
                    $data['title'] = 'acceuil';
                    $data['response'] = 'failed';
                    $this->load->view('header', $data);
                    $this->load->view('new');
                    $this->load->view('footer');
                } 
            }else{ 
                $data['title'] = 'acceuil';
                $data['response'] = 'failed';
                $this->load->view('header', $data); 
                $this->load->view('new');
                $this->load->view('footer');
            } 

        }

        $this->Objet->insert($this->input->post('name'), $this->input->post('message'), $this->input->post('prix'), $this->session->userdata('membre')['id'], $filename);

        $data['data'] = $this->Objet->getMembreActu($this->session->userdata('membre')['id']);
        $data['title'] = 'acceuil';
        $this->load->view('header', $data);
        $this->load->view('acceuil',$data);
        $this->load->view('footer');
    }
}
