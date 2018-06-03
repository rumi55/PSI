<?php
	class Nastavnik_model extends CI_Model{
		//konstruktor
		public function __construct(){
			$this->load->database();
		}

    //ovde moramo izbaciti spisak svih ucenika iz baze

    public function listOfStudents() {
      $query = $this->db->query("SELECT users.id,users.name,users.surname,users.username,users.email,ucenik.id FROM users, ucenik WHERE users.id = ucenik.id" );
			return $query;
    }
		
		
		//dohvati sve vesti od administratora
		public function getVestiAdmin(){
			$this->db->where('skolaId', 0);
			$query = $this->db->get('vesti');
			return $query->result_array();
		}
		//dohvati sve vesti za trenutnu skolu
		public function getVesti($id){
			$this->db->where('skolaId', $id);
			$query = $this->db->get('vesti');
			return $query->result_array();
		}
		//dohvati id skole trenutnog nastavnika
		public function getSkolaId($id){
			$this->db->where('id', $id);
			$result = $this->db->get('nastavnik');
			return $result->row(0)->skolaId;
		}
	}
