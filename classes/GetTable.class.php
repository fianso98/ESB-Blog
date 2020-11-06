<?php 
require '../../../config/Database.class.php';
class GetTable{

    public static function GetTableContent($user_id){
        $db = new Database();
        $pdo=$db->getConnection();
        $stmt = $pdo->prepare('SELECT id_article,categorie_name,article_name,article_content FROM ((articles
        INNER JOIN categories ON articles.id_categorie = categories.id_categorie)
        INNER JOIN users ON users.id_user = articles.id_user) WHERE articles.id_user=?');
        $stmt->execute([$user_id]);
        $result=[];
        while($res = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[]=$res;
            
        }
        return $result;
    }

}   