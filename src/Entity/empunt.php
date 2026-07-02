<?php

namespace BIBLIO\Entity;

class emprunt {
    protected int $id_emprunt;
    protected int $id_livre;
    protected int $id_utilisateur;
    protected string $date_emprunt;
    protected string $date_retour;
    
    

    

    /**
     * Get the value of id_emprunt
     */ 
    public function getId_emprunt()
    {
        return $this->id_emprunt;
    }

    /**
     * Set the value of id_emprunt
     *
     * @return  self
     */ 
    public function setId_emprunt($id_emprunt)
    {
        $this->id_emprunt = $id_emprunt;

        return $this;
    }

    /**
     * Get the value of date_retour
     */ 
    public function getDate_retour()
    {
        return $this->date_retour;
    }

    /**
     * Set the value of date_retour
     *
     * @return  self
     */ 
    public function setDate_retour($date_retour)
    {
        $this->date_retour = $date_retour;

        return $this;
    }

    /**
     * Get the value of id_livre
     */ 
    public function getId_livre()
    {
        return $this->id_livre;
    }

    /**
     * Set the value of id_livre
     *
     * @return  self
     */ 
    public function setId_livre($id_livre)
    {
        $this->id_livre = $id_livre;

        return $this;
    }

    /**
     * Get the value of id_utilisateur
     */ 
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */ 
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of date_emprunt
     */ 
    public function getDate_emprunt()
    {
        return $this->date_emprunt;
    }

    /**
     * Set the value of date_emprunt
     *
     * @return  self
     */ 
    public function setDate_emprunt($date_emprunt)
    {
        $this->date_emprunt = $date_emprunt;

        return $this;
    }

    /**
     * Get the value of date_retour
     */ 
    public function getDate_retour()
    {
        return $this->date_retour;
    }

    /**
     * Set the value of date_retour
     *
     * @return  self
     */ 
    public function setDate_retour($date_retour)
    {
        $this->date_retour = $date_retour;

        return $this;
    }
    }