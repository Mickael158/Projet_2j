<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Echange extends CI_Model {
    public function changer($data) {

        $data_insert = array(
            'idechange' => null,
            'idobjet1' => $data['ido1'],
            'idobjet2' => $data['ido2'],
            'idmembre1' => $data['idmembre1'],
            'idmembre2' => $data['idmembre2'],
            'etat' => 0,
            'dateheure' => 'now()'
        );
        $this->db->insert('echange', $data_insert);
    }

    public function getAllRequest($id) {
        $this->load->model('Objet');
        $query = $this->db->query('select idechange, idobjet1, idobjet2  from echange where etat=0 and idmembre1=' . $id);
        
        $data = array();
		foreach ($query->result() as $row) {
			$arrayRow = array(
                'id' =>$row->idechange,
				'me' => $this->Objet->getObjectById($row->idobjet1),
				'other' => $this->Objet->getObjectById($row->idobjet2)
			);
			array_push($data, $arrayRow);
		}

        return $data;
    }

    public function etatChange($idechange, int $etat) {
        $query = $this->db->query('update echange set etat='.$etat.' where idechange='.$idechange);
    }

    public function getChangeById($id) {
        $query = $this->db->query('select idobjet1, idobjet2, idmembre1, idmembre2 from echange where idechange='.$id);

        $rep = array();
        foreach ($query->result() as $row) {
			$rep = array(
                'ido1' => $row->idobjet1,
                'ido2' => $row->idobjet2,
                'm1' => $row->idmembre1,  
                'm2' => $row->idmembre2
            );
		}

        return $rep;
    }

    public function count() {
        $query = $this->db->query('select count(*) as id from echange where etat=1');
        $row = $query->result_array();
        return $row[0]['id'];
    }
}