<?php
require_once('db_trait.php');
class Formation{
 use PDO;
    private $libelFormation;
    
    public function getFormation()
    {
        return $this->libelFormation; 
    }
    public function setFormation($libel): self
    {
     $this->libelFormation = $libel;

    return $this;
    }
    public function __construct($libel){
        $this->$libel = $libel;
}
    
}