<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membre extends CI_Model {

    public function checkLog(string $email, string $password) {
        if ($email == '')
            throw new Exception('Email required');
        if ($password == '')
            throw new Exception("Password required");
        
        $query = $this->db->get_where('membre', array('email' => $email, 'password' => $password));

        if($query->num_rows() != 1 ) {
            throw new Exception('Failed to connect');
        }

        foreach($query->result() as $row) {
            $data = array(
                'id' => $row->id,
                'nom'=>$row->nom,
                'prenom'=>$row->prenom,
                'email'=>$row->email,
                'dtn'=>$row->dtn,
                'admin' =>$row->admin,
                'password'=>$row->password 
            );

            $this->session->set_userdata('membre', $data);
        }

        return true;
    }

    public function newMembre(string $nom, string $prenom, string $email, string $dtn, string $password) {
        $data = array(
            'id' => null,
            'nom'=>$nom,
            'prenom'=>$prenom,
            'email'=>$email,
            'dtn'=>$dtn,
            'admin' =>0,
            'password'=>$password 
        );

        $this->db->insert('membre', $data);

        $data['id'] = $this->getNewsId();
        $this->session->set_userdata('membre', $data);

        return true;
    }

    public function getNewsId() {
        $query = $this->db->query('select max(id) as id from membre');
        $row = $query->result_array();
        return $row[0]['id'];
    }

    public function count() {
        $query = $this->db->query('select count(*) as id from membre');
        $row = $query->result_array();
        return $row[0]['id'];
    }
}