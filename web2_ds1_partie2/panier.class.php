<?php

require("connect.php");
$dsn="mysql:dbname=".BASE.";host=".SERVER;
try{
$connexion=new PDO($dsn,USER,PASSWD);
}
catch(PDOException $e){
printf("Échec de la connexion : %s\n", $e->getMessage());
exit();
}


/**
 * Summary of panier
 */
class panier{

  
    protected $titre ;
    protected $descriptionn ;
    protected $photo ;
    protected $prix ;
   
    
	   /**
	    * Summary of __construct
	    * @param mixed $titre
	    * @param mixed $descriptionn
	    * @param mixed $photo
	    * @param mixed $prix
	    */
    public function __construct(  $titre , $descriptionn , $photo , $prix )
	{
	
        $this->titre=(string)$titre;
		$this->descriptionn=(string)$descriptionn;
		$this->photo=(string)$photo;
        $this->prix=(int)$prix;
        

	}

  
    
  
    public function gettitre()
    {
        return $this->titre;
    }
    public function getdescriptionn()
    {
        return $this->descriptionn;
    }
    public function getphoto()
    {
        return $this->photo;
    }
    public function getprix()
    {
        return $this->prix;
    }
   
    
    public function settitre($titre){
        $this->titre = $titre;
    }
    public function setdescriptionn($descriptionn){
        $this->descriptionn = $descriptionn;
    }
    public function setphoto($photo){
        $this->photo = $photo;
    }
    public function setprix($prix){
        $this->prix = $prix;
    }

    public function __toString() {
        return  ', prix=' . $this->getprix()  ;
    }
}

     

    

//   $j = new joueur(457,"Aymen");

//   echo $j->toString();
?>