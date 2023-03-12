<?php
class DB {
    private $host='localhost';
    private $username='root';
    private $password='';
    private $database = 'site';
 public $db;

    public function __construct($host = null, $username = null, $password = null, $database = null) {
       
       if($host!=null)
       { $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
       }
        try {
            $this->db= new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password , array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));
          /*  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
        } catch (PDOException $e) {
            die('<h1>Impossible de se connecter à la base de données</h1>');
        }
    }

    public function query($sql) {
        try {
            $req = $this->db->prepare($sql);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('<h1>Une erreur s\'est produite lors de l\'exécution de la requête</h1>');
        }
    }
}
?>
