<?php
namespace Core\DB;
use Pdo;
use PDOException;
class connexion{
    protected $pdo;
    public function __construct()
    {
        try
        {
            $content=file_get_contents(__DIR__."\\..\\..\\Config\\DB.json");
            $config = json_decode($content);
            $pdo =new PDO ("mysql:host=".$config->host.";dbname=".$config->dbname.";username=".$config->username.";password=".$config->password);
            $this->pdo=$pdo;
        }
        catch(PDOException $e){
          echo $e->getMessage();
        }
    }
    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }
}