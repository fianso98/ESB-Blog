<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    include("../includes/headLinks.php"); ?>
    <title>Login page</title>
 

</head>
<!---------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------->

<body>
<!---------------------------------------------------------------------------------->
    <!--nav bar-->
        <?php include("../includes/navbar.php"); ?>
    <!--fin nav bar-->
    <section class="login-page">
    <div class="container  pt-5 pb-5 ">
    <form action="../actions/login.action.php" method="POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

  <div class="row mt3">
                    <div class="col">
                    <?php 
                        if(isset($_SESSION['errors'])):
                            foreach($_SESSION['errors'] as $error):
                        ?>
                        <div class="alert alert-danger mt-3" role="alert">
                        <?= $error; ?>
                        </div>
                        <?php 
                            endforeach;    
                        endif;
                        
                        ?>
                    </div>
                </div>
</form>
</div>
<section>
<!---------------------------------------------------------------------------------->
<?php include("../includes/ScriptIncludes.php");
unset($_SESSION['errors']);
session_destroy(); ?>
</body>
</html>