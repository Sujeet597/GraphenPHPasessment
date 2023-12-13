<!DOCTYPE html>
<html lang="en">

<?php include("views/partials/head.php") ?>


    <body id="page-top">
        <!-- Navigation-->
        <?php require('views/partials/nav.php'); ?>

        <div id="app" class="container text-center">
        <img src="<?php assets('img/GraphenePHP-min.png');?>" alt="GraphenePHP Logo" class="img-fluid mb-4">
       
        <h4>you are successfully Logged in</h4>
        <h6>[<?php echo getRoute() ?>]</h6>
        <a href="<?php echo home();?>" class="btn btn-graphene" rel="noopener">Go Back to Home</a>
        <?php include('views/partials/footer.php'); ?>
    </div>    
       
    </body>
</html>


