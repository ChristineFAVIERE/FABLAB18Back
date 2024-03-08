<?php
require_once('db_trait.php');
class Membre{
    use PDO;
    private $nomAdministrateur;
    private $prenomAdministrateur;
    private $MotPassAdministrateur;
    
    public function getNom()
    {
    return $this->nomAdministrateur;
    }
    public function setNom($nom): self
    {
     $this->nomAdministrateur = $nom;

    return $this;
    }
    public function getPrenom()
    {
    return $this->prenomAdministrateur;
    } 
    public function setPrenom($prenom): self
{
$this->prenomAdministrateur = $prenom;

return $this;
}
public function getMotPassAdministrateur()
    {
    return $this->MotPassAdministrateur;
    } 
    public function setmotPass($motPass): self
{
$this-> MotPassAdministrateur = $motPass;

return $this;
}
public function __construct( $nom, $prenom, $motPass){
    $this->$nom = $nom;
    $this->$prenom = $prenom;
    $this->$motPass = $motPass;

} 
}
?>    


    
