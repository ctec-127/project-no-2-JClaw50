<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CTEC 127 Project 2</title>
</head>
<body>
<!-- It seems I started on this too late into the deadline. I actually did end up putting a lot of time into the project, but I seemed to overload. I'll be more aware of time management in the future. -->

<header>
    <?php require 'inc/header.php'; ?>
</header>

<div class="jumbotron">   
  <?php
    function greeting(){
        if(isset($_GET['name'])){
            echo "<h2>Welcome {$_GET['name']}! Your animals are sure to love these items that I recommend!</h2>";
        } else {
            echo "<h2>Welcome! Your animals are sure to love these items that I recommend!</h2>";
        }
    }
    ?>
    <?php greeting(); ?>
</div>

    <?php
    // Initial $_GET
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        // $_GET Animal Background
        if(isset($_GET['theme'])){
            if($_GET['theme'] == 'dog') {
                echo "img/dogbg.jpg";
            } else if($_GET['theme'] == 'cat') {
                echo "img/catbg.jpg";
            }
        } 

        // $_GET['cattoys']
        if(isset($_GET['cattoys'])){
            include 'inc/cattoys.html';
        } else {
            echo "";
        }
        // $_GET['catfood']
        if(isset($_GET['catfood'])){
            include 'inc/catfood.html';
        } else {
            echo "";
        }
        // $_GET['catbeds']
        if(isset($_GET['catbeds'])){
            include 'inc/catbeds.html';
        } else {
            echo "";
        }
        // $_GET['dogtoys']
        if(isset($_GET['dogtoys'])){
            include 'inc/dogtoys.html';
        } else {
            echo "";
        }
        // $_GET['dogfood']
        if(isset($_GET['dogfood'])){
            include 'inc/dogfood.html';
        } else {
            echo "";
        }
        // $_GET['dogbeds']
        if(isset($_GET['dogbeds'])){
            include 'inc/dogbeds.html';
        } else {
            echo "";
        } 
    }    
    ?>
</div>
<h3>Possible query filters:</h3>
<ul>
    <li class="bullet">Cat Beds: catbeds</li>
    <li class="bullet">Cat Food: catfood</li>
    <li class="bullet">Cat Toys: cattoys</li>
    <li class="bullet">Dog Beds: dogbeds</li>
    <li class="bullet">Dog Food: dogfood</li>
    <li class="bullet">Dog Toys: dogtoys</li>
    <li class="bullet">Name: name=__</li>
    <li class="bullet">Copyright: copyright=__</li>
</ul>

<footer>
    <?php require 'inc/footer.php'; ?>
</footer>

</body>
</html>