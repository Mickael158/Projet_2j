<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorie extends CI_Model {
    public function getAllCategorie() {
        $query = $this->db->query('select * from categorie');

        $data = array();
		foreach ($query->result() as $row) {
			$arrayRow = array(
				'id' => $row->id,
				'nom' => $row->nom,
			);
			array_push($data, $arrayRow);
		}

        return $data;
    }
}