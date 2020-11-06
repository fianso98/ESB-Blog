<?php
require('./config/Database.class.php');
$db = new Database();
$pdo=$db->getConnection();
$stmt=$pdo->prepare("select * from articles where id_categorie=1");
$stmt->execute();
$result=[];
while($res = $stmt->fetch(PDO::FETCH_ASSOC)){
    $result[]=$res;
}
?>

<div class="col-md-8">
                    <?php foreach($result as $val){ ?>
                        <article class="blog-post mb-3 p-2">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img-fluid" alt="" src="assets/images/blog2.png">
                                </div>
                                <div class="col-sm-8">
                                    
                                    <h3 class="mt-2 p-3"><?= $val['article_name'] ?></h3>
                                    <p> <?= $val['article_content']?></p>
                                    <div class="badge">
                                        <a href="#">technology</a>  
                                        <a href="#">programing</a>  

                                    </div> 
                                    
                                </div>
                            </div>
                        </article>
                    <?php } ?>    
                        
                        
                    </div>