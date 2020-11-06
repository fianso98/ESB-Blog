<?php 
class Database{


   private $dsn ;

   private $db_user ;
   private $db_pass ;

   private $options ;
    public function __construct(){
        $this->dsn = 'mysql:host=localhost;dbname=esblog;port=3308;charset=utf8';

        $this->db_user = 'root';
        $this->db_pass = 'root';

        $this->options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
    }
    public function getConnection(){
        try {
        $pdo = new PDO($this->dsn, $this->db_user, $this->db_pass, $this->options);
        
        }catch(PDOException $e){
            throw new PDOException($e->getMessage());
        }
    return $pdo;
    }
    
    


}