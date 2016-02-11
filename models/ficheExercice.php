<?php

	/**
	* 
	*/
	class FicheExercice
	{
		private $idFicheExercice;
		private $titre;
		private $resume;
		private $description;
		private $dateAjout;
		private $idPartieCorps;
		private $video;
		private $image;
		
		public function __construct($valeurs = array()) {
			if (!empty($valeurs)) {
				$this->affecte($valeurs);
			}
		}
		public function affecte($donnees) {
			foreach ($donnees as $attribut => $valeur) {
				switch($attribut){
					case 'idFicheExercice':
						$this->_setIdFicheExercice($valeur);
						break;
					case 'titre':
						$this->_setTitre($valeur);
						break;
					case 'resume':
						$this->_setResume($valeur);
						break;
					case 'description':
						$this->_setDescription($valeur);
						break;
					case 'dateAjout':
						$this->_setDateAjout($valeur);
						break;
					case 'idPartieCorps':
						$this->_setIdPartieCorps($valeur);
						break;
					case 'video':
						$this->_setVideo($valeur);
						break;
					case 'image':
						$this->_setImage($valeur);
						break;

				}
			}
		}



		
	    /**
	     * Gets the value of idFicheExercice.
	     *
	     * @return mixed
	     */
	    public function getIdFicheExercice()
	    {
	        return $this->idFicheExercice;
	    }

	    /**
	     * Sets the value of idFicheExercice.
	     *
	     * @param mixed $idFicheExercice the id fiche exercice
	     *
	     * @return self
	     */
	    private function _setIdFicheExercice($idFicheExercice)
	    {
	        $this->idFicheExercice = $idFicheExercice;

	        return $this;
	    }

	    /**
	     * Gets the value of titre.
	     *
	     * @return mixed
	     */
	    public function getTitre()
	    {
	        return $this->titre;
	    }

	    /**
	     * Sets the value of titre.
	     *
	     * @param mixed $titre the titre
	     *
	     * @return self
	     */
	    private function _setTitre($titre)
	    {
	        $this->titre = $titre;

	        return $this;
	    }

	    /**
	     * Gets the value of resume.
	     *
	     * @return mixed
	     */
	    public function getResume()
	    {
	        return $this->resume;
	    }

	    /**
	     * Sets the value of resume.
	     *
	     * @param mixed $resume the resume
	     *
	     * @return self
	     */
	    private function _setResume($resume)
	    {
	        $this->resume = $resume;

	        return $this;
	    }

	    /**
	     * Gets the value of description.
	     *
	     * @return mixed
	     */
	    public function getDescription()
	    {
	        return $this->description;
	    }

	    /**
	     * Sets the value of description.
	     *
	     * @param mixed $description the description
	     *
	     * @return self
	     */
	    private function _setDescription($description)
	    {
	        $this->description = $description;

	        return $this;
	    }

	    /**
	     * Gets the value of dateAjout.
	     *
	     * @return mixed
	     */
	    public function getDateAjout()
	    {
	        return $this->dateAjout;
	    }

	    /**
	     * Sets the value of dateAjout.
	     *
	     * @param mixed $dateAjout the date ajout
	     *
	     * @return self
	     */
	    private function _setDateAjout($dateAjout)
	    {
	        $this->dateAjout = $dateAjout;

	        return $this;
	    }

	    /**
	     * Gets the value of idPartieCorps.
	     *
	     * @return mixed
	     */
	    public function getIdPartieCorps()
	    {
	        return $this->idPartieCorps;
	    }

	    /**
	     * Sets the value of idPartieCorps.
	     *
	     * @param mixed $idPartieCorps the id partie corps
	     *
	     * @return self
	     */
	    private function _setIdPartieCorps($idPartieCorps)
	    {
	        $this->idPartieCorps = $idPartieCorps;

	        return $this;
	    }

	    /**
	     * Gets the value of video.
	     *
	     * @return mixed
	     */
	    public function getVideo()
	    {
	        return $this->video;
	    }

	    /**
	     * Sets the value of video.
	     *
	     * @param mixed $video the video
	     *
	     * @return self
	     */
	    private function _setVideo($video)
	    {
	        $this->video = $video;

	        return $this;
	    }

	    /**
	     * Gets the value of image.
	     *
	     * @return mixed
	     */
	    public function getImage()
	    {
	        return $this->image;
	    }

	    /**
	     * Sets the value of image.
	     *
	     * @param mixed $image the image
	     *
	     * @return self
	     */
	    private function _setImage($image)
	    {
	        $this->image = $image;

	        return $this;
	    }
	}