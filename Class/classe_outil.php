<?php
require_once('db_trait.php');
class Outil{
    use PDO;
    private $libelOutil;
    private $photoOutil;
    private $descriptionOutil;
    
    public function get()
    {
    return $this->libelOutil;
    }
    public function setOutil($libel): self
    {
     $this->libelOutil = $libel;

    return $this;
    }
    public function getOutil()
    {
    return $this->descriptionOutil;
    } 
    public function setRealisation($description): self
{
    $this->descriptionOutil = $description;

return $this;
}
    public function getPhoto()
    {
    return $this->photoOutil;
    } 
    public function setphoto($photo): self
{
    $this->photoOutil = $photo;

return $this;
}
    public function __construct( $libel, $photo, $description){
    $this->$libel = $libel;
    $this->$photo = $photo;
    $this->$description = $description;

} 
}
?>    

