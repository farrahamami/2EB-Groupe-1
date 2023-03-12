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


class membre{

    protected $id_membre;
    protected $pseudo;
    protected $mdp;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $civilite;
    protected $ville;
    
    
    public function __construct($id_membre , $Pseudo , $mdp , $nom , $prenom , $email , $civilite , $ville)
	{
		$this->id_membre=(int)$id_membre;
		$this->pseudo=(string)$Pseudo;
        $this->mdp=(string)$mdp;
		$this->nom=(string)$nom;
        $this->prenom=(string)$prenom;
        $this->email=(string)$email;
        $this->civilite=(string)$civilite;
        $this->ville=(string)$ville;


	}

    public function getid_membre()
    {
        return $this->id_membre;
    }

    public function getpseudo()
    {
        return $this->pseudo;
    }

    public function getnom()
    {
        return $this->nom;
    }
    public function getprenom()
    {
        return $this->prenom;
    }
    public function getmdp()
    {
        return $this->mdp;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function getcivilite()
    {
        return $this->civilite;
    }
    public function getville()
    {
        return $this->ville;
    }
    
    public function setid_membre($id_membre){
        $this->id_membre = $id_membre;
    }
    
    public function setPseudo($pseudo){
        $this->pseudo = $pseudo;
    }
    
    public function setnom($nom){
        $this->nom = $nom;
    }
    public function setprenom($prenom){
        $this->prenom = $prenom;
    }
    public function setmdp($mdp){
        $this->mdp=$mdp;
    }
    public function setemail($email){
        $this->email =$email;
    }
    public function setcivilite($civilite){
        $this->civilite=$civilite;
    }
    public function setville($ville){
        $this->ville =$ville;
    }
    
    
     public function __toString()
    {
        
        return 'membre: id_membre=' . $this->getId_membre().', Pseudo='.$this->getPseudo(). 'nom='.$this->getnom() ;
    }
}
?>