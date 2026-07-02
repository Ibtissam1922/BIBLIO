<?php

namespace BIBLIO\Entity;

class livre{
    protected int $isbn;
    protected int $titre;
    protected int $genre;
    protected int $id_auteur;

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

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
 }