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

<div class="intro">
    <h2>How to Dynamically Change the Animal Items Page</h2>
    <p>You can find the items that I suggest for your animals through entering additional query parameters in the address bar on the page: <a href="animal_items.php">Animal Items</a></p>
    <p>Once there, you'll be at the link <a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php">http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php</a> which won't be showing you any of our suggestions yet. To start showing our suggestions you will first need to enter a ? at the end of the link. From there, type one of our queries in the list below to have our suggestions shown to you for the following categories:</p>

<h4>Cats</h4>
<ul>
    <li class="bullet"><a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?catbeds">Cat Beds</a>: catbeds</li>
    <li class="bullet"><a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?catfood">Cat Food</a>: catfood</li>
    <li class="bullet"><a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?cattoys">Cat Toys</a>: cattoys</li>
</ul>
<h4>Dogs</h4>
<ul>
    <li class="bullet"><a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?dogbeds">Dog Beds</a>: dogbeds</li>
    <li class="bullet"><a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?dogfood">Dog Food</a>: dogfood</li>
    <li class="bullet"><a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?dogtoys">Dog Toys</a>: dogtoys</li>
</ul>

    <p>There are also a few other methods of personalization you may or may not choose to display which require user input. These require the given output, followed by an = and then an output.</p>

<ul>
    <li class="bullet">Name (follow the = with your name): name=__</li>
    <li class="bullet">Copyright (follow the = with 'y' or 'n'): copyright=__</li>
</ul>

    <p>To add more than one query, add the '&' sign at the end of your statement. For instance, if my name was Jason and I wanted to search for cat beds and cat food I would use the link <a href="http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?name=Jason&catbeds&catfood">http://localhost/ctec127/projects/project-no-2-JClaw50/animal_items.php?name=Jason&catbeds&catfood</a>. </p>

<footer>
    <?php require 'inc/footer.php'; ?>
</footer>
</div>
</body>
</html>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>