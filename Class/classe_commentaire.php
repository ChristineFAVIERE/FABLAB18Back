<?php
require_once('db_trait.php');
class Commentaire{
 use PDO;
    private $membreCommentaire;
    
    public function getCommentaire()
    {
        return $this->membreCommentaire; 
    }
    public function setCommentaire($nom): self
    {
     $this->membreCommentaire = $nom;

    return $this;
    }
    public function __construct($membre){
        $this->$membre = $membre;
}
    
}
   
    
    
   