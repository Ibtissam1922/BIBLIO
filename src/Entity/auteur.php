<?php

namespace BIBLIO\Entity;

class auteur {
    protected int $id_auteur;
    protected int $nom_auteur;
    protected int $prenom_auteur;
    protected int $adresse_auteur;

    /**
     * Get the value of id_auteur
     */ 
    public function getId_auteur()
    {
        return $this->id_auteur;
    }

    /**
     * Set the value of id_auteur
     *
     * @return  self
     */ 
    public function setId_auteur($id_auteur)
    {
        $this->id_auteur = $id_auteur;

        return $this;
    }

    /**
     * Get the value of nom_auteur
     */ 
    public function getNom_auteur()
    {
        return $this->nom_auteur;
    }

    /**
     * Set the value of nom_auteur
     *
     * @return  self
     */ 
    public function setNom_auteur($nom_auteur)
    {
        $this->nom_auteur = $nom_auteur;

        return $this;
    }

    /**
     * Get the value of prenom_auteur
     */ 
    public function getPrenom_auteur()
    {
        return $this->prenom_auteur;
    }

    /**
     * Set the value of prenom_auteur
     *
     * @return  self
     */ 
    public function setPrenom_auteur($prenom_auteur)
    {
        $this->prenom_auteur = $prenom_auteur;

        return $this;
    }

    /**
     * Get the value of adresse_auteur
     */ 
    public function getAdresse_auteur()
    {
        return $this->adresse_auteur;
    }

    /**
     * Set the value of adresse_auteur
     *
     * @return  self
     */ 
    public function setAdresse_auteur($adresse_auteur)
    {
        $this->adresse_auteur = $adresse_auteur;

        return $this;
    }
}