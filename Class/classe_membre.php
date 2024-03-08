<?php
require_once('db_trait.php');
class Membre{
    use PDO;
    private $nomMembre;
    private $prenomMembre;
    private $emailMembre;
    
    public function getNom()
    {
    return $this->nomMembre;
    }
    public function setNom($nom): self
    {
     $this->nomMembre = $nom;

    return $this;
    }
    public function getPrenom()
    {
    return $this->prenomMembre;
    } 
    public function setPrenom($prenom): self
{
$this->prenomMembre = $prenom;

return $this;
}
public function getEmailMembre()
    {
    return $this->emailMembre;
    } 
    public function setemail($email): self
{
$this->emailMembre = $email;

return $this;
}
public function __construct( $nom, $prenom, $email){
    $this->$nom = $nom;
    $this->$prenom = $prenom;
    $this->$email = $email;

} 
}
?>    

