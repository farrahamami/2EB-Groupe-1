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


class produit{

    protected $id_produit;
    protected $referance;
    protected $categorie;
    protected $titre ;
    protected $descriptionn ;
    protected $photo ;
    protected $prix ;
    protected $stock ;
    
    
    public function __construct($id_produit , $referance , $categorie , $titre , $descriptionn , $photo , $prix ,  $stock)
	{
		$this->id_produit=(int)$id_produit;
		$this->referance=(string)$referance;
		$this->categorie=(string)$categorie;
        $this->titre=(string)$titre;
		$this->descriptionn=(string)$descriptionn;
		$this->photo=(string)$photo;
        $this->prix=(int)$prix;
		$this->stock=(int)$stock;

	}

  
    
    public function getid_produit()
    {
        return $this->id_produit;
    }

    public function getreferance()
    {
        return $this->referance;
    }

    public function getcategorie()
    {
        return $this->categorie;
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
    public function getstock()
    {
        return $this->stock;
    }
    
    public function setid_produit($id_produit){
        $this->id_produit= $id_produit;
    }
    
    public function setreferance($referance){
        $this->referance = $referance;
    }
    
    public function setcategorie($categorie){
        $this->categorie = $categorie;
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
    public function setstock($stock){
        $this->stock = $stock;
    }
 
    public function __toString() {
        return 'produit: id_produit=' . $this->getid_produit() . ', prix=' . $this->getprix() . ', stock=' . $this->getstock();
    }
}

     

    

//   $j = new joueur(457,"Aymen");

//   echo $j->toString();
?>