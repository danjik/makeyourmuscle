<?php

/**
* Classe permettant de gérer les fiches d'exercice
*/
class FicheExerciceController 
{
	private $db;
	function __construct($db)
	{
		$this->db = $db;
	}


	public function addUser($pseudo,$password){
		$req=$this->db->prepare('INSERT INTO `user`(`pseudo`, `password`) VALUES (:pseudo,:password)');
		$req->bindValue(':pseudo',$pseudo);
		$req->bindValue(':password',$password);
		return $req->execute();
	}
	public function getAllFicheExercice()
	{
		$listeFicheExercice= array();
		$req=$this->db->prepare('SELECT * from ficheexercice');
		$req->execute();
	
		while($ficheexercice=$req->fetch(PDO::FETCH_OBJ))
		{
			$listeFicheExercice[] = new FicheExercice($ficheexercice);
		}
		$req->closeCursor();
		return $listeFicheExercice;

	}

}


?>