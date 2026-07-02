<?php
namespace BIBLIO\repository;
use BIBLIO\Entity\emprunt;
use Core\DB\Connexion;
use PDO;

class empruntRepository{
    protected connexion $connexion;
    public function __construct()
    {        $this->connexion = new Connexion();}
    public function find (){
        $pdo=$this->connexion->getPdo();
        $stm = $pdo->prepare("SELECT *FROM emprunt");
        $stm->execute();
        $emprunts = $stm->fetchALL(PDO::FETCH_CLASS , emprunt::class);
        return $emprunts;
    }
    public function findById($id_emprunt){
        $pdo=$this->connexion->getPdo();
        $stm = $pdo->prepare("SELECT *FROM emprunt");
        $stm->bindvalue("id_emprunt",$id_emprunt,PDO::PARAM_INT);
        $stm->execute();
        $emprunts = $stm->fetchALL(PDO::FETCH_CLASS , emprunt::class);
        return (empty($emprunts))?null:$emprunts[0];
    }
    public function create(emprunt $emprunt)
    {
        $pdo=$this->connexion->getPdo();
        $stm = $pdo->prepare("INSERT INTO emprunt (id_utilisateur,id_livre,date_emprunt,date_retour) VALUES (:id_utilisateur,:id_livre,:date_emprunt,:date_retour)");
        $stm->bindValue(":id_utilisateur", $emprunt->getId_emprunt(), PDO::PARAM_INT);
        $stm->bindValue(":id_livre", $emprunt->getId_livre(), PDO::PARAM_INT);
        $stm->bindvalue(":date_emprunt",$emprunt->getDate_emprunt(),PDO::PARAM_STR);
        $stm->bindvalue(":date_retour",$emprunt->getDate_retour(),PDO::PARAM_STR);
        $stm->execute();
    }
    public function update(emprunt $emprunt)
    {
        $pdo=$this->connexion->getPdo();
        $stm=$pdo->prepare("UPDATE emprunt SET id_utilisateur:id_utilisateur,id_livre:id_livre,date_emprunt:date_emprunt,date_retour:date_retour where id_emprunt=:id_emprunt");
        $stm->bindValue("id_emprunt",$emprunt->getId_emprunt(),PDO::PARAM_INT);
        $stm->bindValue(":id_utilisateur", $emprunt->getId_emprunt(), PDO::PARAM_INT);
        $stm->bindValue(":id_livre", $emprunt->getId_livre(), PDO::PARAM_INT);
        $stm->bindvalue(":date_emprunt",$emprunt->getDate_emprunt(),PDO::PARAM_STR);
        $stm->bindvalue(":date_retour",$emprunt->getDate_retour(),PDO::PARAM_STR);
        $stm->execute();
    }
    public function delete (emprunt $emprunt)
    {
        $pdo=$this->connexion->getPdo();
        $stm=$pdo->prepare("DELETE FROM emprunt where id_emprunt=:id_emprunt");
        $stm->bindValue("id",$emprunt->getId_emprunt(),PDO::PARAM_INT);
        $stm->execute();
       
    }
}