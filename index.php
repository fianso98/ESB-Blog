<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/headLinks.php"); ?>
    <title>ES-BLOG</title>
 

</head>
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->

<body>
<!---------------------------------------------------------------------------------->
    <!--nav bar-->
        <?php include("includes/navbar.php"); ?>
    <!--fin nav bar-->
<!---------------------------------------------------------------------------------->

<!--my hero section -->
    <section class="hero py-4">
        <div class="container">
            <!--image Article 1-->
            <div class="row">
                <div class="col-lg-8 col-sm-4">
                    <div class="hero-post shadow">
                        <img class="img-fluid" alt="" src="assets/images/blog5.png">
                         <div class="hero-post-content">
                            <div class="hero-post-badges">
                                <a class="p-2 px-2 mb-2" href="#">
                                  <i class="mr-2 fas fa-calendar-week"></i>
                                    15. october 2020
                                </a>
                                <a class="p-2 px-3" href="#">technology</a>
                            </div>
                            <div class="row">
                                <div class="col-md-2 mt-2 col-sm-1">
                                    <img alt="auther" class="img-fluid rounded-circle" src="assets/images/malek.jpg">
                                </div>
                                <div class="col-md-10 col-sm-11  mt-4 px-4 py-2">
                                    <h2>My Third Article</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
            <!--image Article 2-->
                <div class="heros-post shadow mb-3">
                    <img class="img-fluid" alt="" src="assets/images/blog3.png">
                        <div class="hero-post-content">
                        <div class="hero-post-badges">
                            <a class="p-2 px-2 mb-2" href="#"><i class="fas fa-calendar-week"></i> 15. october 2020 </a>
                            <a class="p-2 px-3 " href="#"> technology </a>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 mt-2 mb-2">
                                <img alt="auther" class="img-fluid rounded-circle" src="assets/images/sofiane.jpg">
                            </div>
                            <div class="col-md-10 col-sm-6  mt-2 px-1">
                                <h3>My scond Article</h3>
                            </div>
                        </div>
                    </div>
                </div>
            <!--image Article 3-->
                <div class="hero-post shadow mb-3">
                    <img class="img-fluid" alt="" src="assets/images/blog1.png">
                        <div class="hero-post-content">
                        <div class="hero-post2-badges">
                            <a class="p-2 px-2 mb-2" href="#"><i class="fas fa-calendar-week mr-1"></i>15. october 2020</a>
                            <a class="p-2 px-3 " href="#">technology</a>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 mt-2 mb-2">
                                <img alt="auther" class="img-fluid rounded-circle" src="assets/images/abdelah.jpg">
                            </div>
                            <div class="col-md-10 col-sm-6  mt-2 px-1">
                                <h3>My First Article</h3>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<!--fin my hero section -->
<!---------------------------------------------------------------------------------->

<!--Main blog section -->
    <section>
        <div class="blog-posts py-4">
            <div class="container shadow">
                <div class="row">
                   <?php include("includes/articles.php") ?>
            <aside class="col-md-4 ">
                    <!--side social icon-->
                    <?php include("includes/socialIcons.php") ?>
                        
                    <!--------******Populair category****----->

                    <h4 class="asid-heading mt-3 mb-3 pl-2">Populair Categorys</h4>
                    <div class="badges w-100">
                        <a href="#">technology</a>  
                        <a href="#">programing</a> 
                        <a href="#">bootstrap</a>  
                        <a href="#">java script</a>     
                        <a href="#">html / css</a> 
                        <a href="#">php </a>  
                        <a href="#">ESbootcamp</a> 
                        <a href="#">technology</a>  
                        <a href="#">programing</a> 
                        <a href="#">bootstrap</a>  
                        <a href="#">java script</a>     
                        <a href="#">html / css</a> 
                        <a href="#">php </a>  
                        <a href="#">programing</a> 
                        <a href="#">bootstrap</a>  
                        <a href="#">java script</a> 
                        <a href="#">bootstrap</a>  
                        <a href="#">java script</a>     
                        <a href="#">html / css</a> 
                        <a href="#">php </a>  
                        <a href="#">react</a> 
                        <a href="#">technology</a>  
                        <a href="#">programing</a> 
                        <a href="#">Data base</a>  
                        <a href="#">java script</a>   
                    </div> 
                    <!--======******Populair category****======-->
                    <!--auther list sid bar -->
            <div class="container">
                    <h4 class="asid-heading mt-3"> Popular Auther</h4>
                        <article class="row auther mb-4">
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle shadow" alt="" src="assets/images/sofiane.jpg" >
                            </div>
                            <div class="col-sm-8 ">
                                <h5 class="m-0">Sofiane afir</h5>
                                <p class="m-0">Lorem Ipsum a commencé comme un latin brouillé, absur.</p>
                                <div class="socials-links shadow">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>               
                            </div>        
                        </article>
                        <article class="row auther mb-4">
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle shadow" alt="" src="assets/images/malek.jpg" >
                            </div>
                            <div class="col-sm-8 ">
                                <h5 class="m-0">Abdelmalek allache</h5>
                                <p class="m-0">Lorem Ipsum a commencé comme un latin brouillé, absur.</p>
                                <div class="socials-links shadow">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>               
                            </div>        
                        </article>
                        <article class="row auther mb-4">
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle shadow" alt="" src="assets/images/abdelah.jpg" >
                            </div>
                            <div class="col-sm-8 ">
                                <h5 class="m-0">Abdelah ouledj</h5>
                                <p class="m-0">Lorem Ipsum a commencé comme un latin brouillé, absur.</p>
                                <div class="socials-links shadow">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>               
                            </div>        
                        </article>
                        <article class="row auther mb-4">
                            <div class="col-sm-4">
                                <img class="img-fluid rounded-circle shadow" alt="" src="assets/images/ghiles.jpg" >
                            </div>
                            <div class="col-sm-8 ">
                                <h5 class="m-0">Ghiles dev</h5>
                                <p class="m-0">Lorem Ipsum a commencé comme un latin brouillé, absur.</p>
                                <div class="socials-links shadow">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>               
                            </div>        
                        </article>
                    <!---====== auther list sid bar ======---->


                </div>
            </aside>
            </div>
        </div>
    </div>
           <!--pagination -->
           <?php include("includes/pagination.php"); ?>
    </section>
<!--fin Main blog section -->
<!---------------------------------------------------------------------------------->

<!--footer section -->

    <?php include("includes/footer.php") ?>
<!--fin footer section ----->
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->

<!--Font Awesome -------> 
    <?php include("includes/ScriptIncludes.php") ?>
</body>
</html>