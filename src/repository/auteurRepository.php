<?php
namespace BIBLIO\repository;

use BIBLIO\Entity\auteur;
use Core\DB\Connexion;
use PDO;
use PDOException;
class auteurRepository {
    protected connexion $connexion;
    public function __construct()
    {
        $this->connexion=new connexion();
    }
    public function find (){
        $pdo=$this->connexion->getPdo();
        $stm = $pdo->prepare("SELECT *FROM auteur");
        $stm->execute();
        $auteurs = $stm->fetchALL(PDO::FETCH_CLASS , auteur::class);
        return $auteurs;
    }
    public function findById($id_auteur){
        $pdo=$this->connexion->getPdo();
        $stm = $pdo->prepare("SELECT *FROM auteur");
        $stm->bindvalue("id_auteur",$id_auteur,PDO::PARAM_INT);
        $stm->execute();
        $auteurs = $stm->fetchALL(PDO::FETCH_CLASS , auteur::class);
        return (empty($auteurs))?null:$auteurs[0];
    }
    public function create(auteur$auteur)
    {
        $pdo=$this->connexion->getPdo();
        $stm = $pdo->prepare("INSERT INTO auteur (nom, prenom) VALUES (:nom, :prenom)");
        $stm->bindValue(":nom", $auteur->getNom_auteur(), PDO::PARAM_STR);
        $stm->bindValue(":prenom", $auteur->getPrenom_auteur(), PDO::PARAM_STR);
        $stm->bindvalue("adresse",$auteur->getAdresse_auteur(),PDO::PARAM_STR);
        $stm->execute();
    }
    public function update(auteur $auteur)
    {
        $pdo=$this->connexion->getPdo();
        $stm=$pdo->prepare("UPDATE auteur SET nom:nom,prenom:prenom,adresse:adresse where id_auteur=:id_auteur");
        $stm->bindValue("id ",$auteur->getId_auteur(),PDO::PARAM_INT);
        $stm->bindValue(":nom", $auteur->getNom_auteur(), PDO::PARAM_STR);
        $stm->bindValue(":prenom", $auteur->getPrenom_auteur(), PDO::PARAM_STR);
        $stm->bindValue("adresse",$auteur->getAdresse_auteur(),PDO::PARAM_STR);
        $stm->execute();
    }
    public function delete (auteur $auteur)
    {
        $pdo=$this->connexion->getPdo();
        $stm=$pdo->prepare("DELETE FROM auteur where id_emprunt=:id_emprunt");
        $stm->bindValue("id",$auteur->getId_auteur(),PDO::PARAM_INT);
        $stm->execute();
       
    }
    public function countBooksByAuteur(auteur $auteur)
    {
        $pdo=$this->connexion->getPdo();
        $stm = $pdo->prepare("SELECT COUNT(*) AS nbbookaut FROM livre WHERE id_auteur = :id");
        $stm->bindValue("id",$auteur->getId_auteur(),PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchColumn();
    }
}