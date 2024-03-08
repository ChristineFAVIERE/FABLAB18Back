<?php
require_once('db_trait.php');
class Realisation{
    use PDO;
    private $libelRealisation;
    private $descriptionRealisation;
    private $photoRealisation;
    
    public function getRealisation()
    {
    return $this->libelRealisation;
    }
    public function setRealisation($description): self
{
    $this->descriptionRealisation = $description;

return $this;
}
    public function getPhoto()
    {
    return $this->photoRealisation;
    } 
    public function setphoto($photo): self
{
$this->photoRealisation = $photo;

return $this;
}
public function __construct( $nom, $prenom, $email){
    $this->$nom = $nom;
    $this->$prenom = $prenom;
    $this->$email = $email;

} 
}
?>    

