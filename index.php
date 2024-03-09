<?php
include('./dbConnection.php');
// Header Include from mainInclude
include('./mainInclude/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happiness Index Analyzer</title>
    <link rel="stylesheet" href="your-styles.css"> <!-- Include your stylesheets here -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <!-- Hamburger Menu -->
    <input type="checkbox" id="menuToggle">
    <label for="menuToggle" class="menu-icon">&#9776;</label>
    <div id="menu" class="menu">
        <ul>
            <li><a href="#">Quick Survey</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Signup</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul>
    </div>

    <!-- Rest of your content -->
    <div class="container-fluid remove-vid-marg">
        <!-- ... Video background and content ... -->
    </div>

    <div class="container-fluid bg-danger txt-banner">
        <!-- ... Text Banner ... -->
    </div>

    <div class="container mt-5">
        <!-- ... Most Popular Course ... -->
    </div>

    <?php 
    // Contact Us
    include('./contact.php'); 
    ?>  

    <!-- Students Testimonial -->
    <div class="container-fluid mt-5" style="background-color: #4B7289" id="feedback">
        <!-- ... Testimonial content ... -->
    </div>

    <div class="container-fluid bg-danger">
        <!-- ... Social Follow ... -->
    </div>

    <!-- About Section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
        <!-- ... About content ... -->
    </div>

    <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    ?>
</body>
</html>
<?php
include('./dbConnection.php');
// Header Include from mainInclude
include('./mainInclude/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happiness Index Analyzer</title>
    <link rel="stylesheet" href="your-styles.css"> <!-- Include your stylesheets here -->
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>
    <!-- Hamburger Menu -->
    <input type="checkbox" id="menuToggle">
    <label for="menuToggle" class="menu-icon">&#9776;</label>
    <div id="menu" class="menu">
        <ul>
            <li><a href="#">Quick Survey</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Signup</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#feedback">Feedback</a></li>
        </ul>
    </div>

    <!-- Rest of your content -->
    <div class="container-fluid remove-vid-marg">
        <!-- ... Video background and content ... -->
    </div>

    <div class="container-fluid bg-danger txt-banner">
        <!-- ... Text Banner ... -->
    </div>

    <div class="container mt-5">
        <!-- ... Most Popular Course ... -->
    </div>

    <?php 
    // Contact Us
    include('./contact.php'); 
    ?>  

    <!-- Students Testimonial -->
    <div class="container-fluid mt-5" style="background-color: #4B7289" id="feedback">
        <!-- ... Testimonial content ... -->
    </div>

    <div class="container-fluid bg-danger">
        <!-- ... Social Follow ... -->
    </div>

    <!-- About Section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
        <!-- ... About content ... -->
    </div>

    <?php 
    // Footer Include from mainInclude 
    include('./mainInclude/footer.php'); 
    ?>
</body>
</html>

