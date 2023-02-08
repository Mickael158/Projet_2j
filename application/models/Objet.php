<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model {
    public function update(int $id, string $nom, string $desc) {    
        $this->db->set('nom', $nom);
        $this->db->set('description', $desc);
        $this->db->where('id', $id);
        $this->db->update('Objet');
    }

    public function insert($nom, $desc, $prix, $idmembre, $file) {
        $data = array(
            'id' => null,
            'nom' => $nom,
            'description' =>$desc,
            'prix' => $prix,
            'idmembre'=>$idmembre
        );

        $this->db->insert('objet', $data);

        $id = $this->getNewsId();
        
        $dataFile = array(
            'id' => null,
            'photo' => $file,
            'idobjet' => $id
        );
        $this->db->insert('objetphoto', $dataFile);
    }

    public function getAllPicture(int $id) {
        $query = $this->db->get_where('objetphoto', array('idobjet' => $id));   
        
        $rep = array();
        
        foreach($query->result() as $row) {
            array_push($rep, $row->photo);
        }

        return $rep;
    }

    public function getMembreActu( int $idmembre) {
        $query = $this->db->query("select objet.id as ido, objet.nom as nomobj, objet.description,membre.prenom, membre.id as idmembre from objet, membre where objet.idmembre = membre.id and objet.idmembre !=".$idmembre);

        $data = array();
		foreach ($query->result() as $row) {
			$arrayRow = array(
				'ido' => $row->ido,
				'nomobj' => $row->nomobj,
				'description' => $row->description,
				'prenom' => $row->prenom,
                'idmembre' =>$row->idmembre
			);

            $arrayRow['picture'] = $this->getAllPicture($arrayRow['ido']);
			array_push($data, $arrayRow);
		}

        return $data;
    }

    public function getMembreObjet( int $idmembre) {
        $query = $this->db->query("select objet.id as ido, objet.nom as nomobj, objet.description,membre.prenom, membre.id as idmembre from objet, membre where objet.idmembre = membre.id and objet.idmembre =".$idmembre);

        $data = array();
		foreach ($query->result() as $row) {
			$arrayRow = array(
				'ido' => $row->ido,
				'nomobj' => $row->nomobj,
				'description' => $row->description,
				'prenom' => $row->prenom,
                'idmembre' =>$row->idmembre
			);

            $arrayRow['picture'] = $this->getAllPicture($arrayRow['ido']);
			array_push($data, $arrayRow);
		}

        return $data;
    }

    public function getObjectById(int $id) {
        $query = $this->db->query("select objet.id as ido, objet.nom as nomobj, objet.description,membre.prenom, membre.id as idmembre from objet, membre where objet.idmembre = membre.id and objet.id =".$id);

        $data = array();
		foreach ($query->result() as $row) {
			$arrayRow = array(
				'ido' => $row->ido,
				'nomobj' => $row->nomobj,
				'description' => $row->description,
				'prenom' => $row->prenom,
                'idmembre' =>$row->idmembre
			);

            $arrayRow['picture'] = $this->getAllPicture($arrayRow['ido']);
			array_push($data, $arrayRow);
		}

        return $data;
    }

    public function switchPropriety($ido1, $ido2, $idmembre1, $idmembre2) {
        $this->db->query('update objet set idmembre = '.$idmembre1 .' where id='.$ido2);
        $this->db->query('update objet set idmembre = '.$idmembre2 .' where id='.$ido1);
    }

    

    public function getNewsId() {
        $query = $this->db->query('select max(id) as id from objet');
        $row = $query->result_array();
        return $row[0]['id'];
    }

}