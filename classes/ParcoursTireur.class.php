<?php

class ParcoursTireur {

	/**
	 * @Column(name="PARCOURS_ID")
	 **/
	private $idParcours;
	
	/**
	 * @Column(name="TIREUR_ID")
	 **/
	private $idTireur;

	/**
	 * @Column(name="ORDRE_AFFICHAGE")
	 **/
	private $ordreAffichage;
	
	/**
	 * @Column(name="SCORE")
	 **/
	private $score;

	private $nomTireur;

	public function __construct($resultSet = null){
		if(isset($resultSet) && $resultSet != null){
			$this->idParcours = $resultSet["PARCOURS_ID"];
			$this->idTireur = $resultSet["TIREUR_ID"];
			$this->ordreAffichage = $resultSet["ORDRE_AFFICHAGE"];
			$this->score = $resultSet["SCORE"];
			$this->nomTireur = $resultSet["NOM_TIREUR"];
		}

	}

	public function getIdParcours(){
		return $this->idParcours;
	}

	public function setIdParcours($idParcours){
		$this->idParcours = $idParcours;
	}

	public function getIdTireur(){
		return $this->idTireur;
	}

	public function setIdTireur($idTireur){
		$this->idTireur = $idTireur;
	}

	public function getOrdreAffichage(){
		return $this->ordreAffichage;
	}

	public function setOrdreAffichage($ordre){
		$this->ordreAffichage = $ordre;
	}

	public function getScore(){
		return $this->score;
	}

	public function setScore($score){
		$this->score = $score;
	}

	public function decrementeScore(){
		if($this->score == null){
			$this->score = 25;
		}
		$this->score--;
	}

	public function getNomTireur(){
		return $this->nomTireur;
	}

	public function setNomTireur($nom){
		$this->nomTireur = $nom;
	}
}