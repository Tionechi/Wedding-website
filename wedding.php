<!DOCTYPE html>
<html lang ="en">
    <head>
        <title>Wedding.php</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        </head>
        <body>
<nav class = "navbar"> 
    <div id="homeNav">
    <div> <a href= "wedding.php"> <img id="logo"  src="dove.png" alt="wedding logo" > </a> <!-- Div contains logo in nav bar -->
    </div>
    <div class = "navCon"> <!-- Div containing actual nav bar links -->
    <a class = "navbar-text" href= "wedding.php">Home </a>
    <a class = "navbar-text" href= "venues.php">Venues </a>
    <a class = "navbar-text" href= "insights.php">Insights</a>
    <a class = "navbar-text" href= "about.php">About us</a>
    </div> 
    </div>
    </nav>


<div class="contain" >
    <div class="left-p" >
        <h1 id="intro">Take The First Steps <br> Towards Your <br> Happy Ever After </h1>
        <p> Embark on a seamless journey to find your dream wedding venue with our advanced statistical analysis. 
          Explore diverse options, tailored to your preferences and budget, from opulent ballrooms to serene garden 
          settings. Our algorithms match you with the ideal venue, ensuring a stress-free planning experience. 
          Say 'I do' to effortless wedding planning with our data-driven expertise, allowing you to 
          cherish every moment of your special day.
           <br>Discover confidence in your venue choice, thanks to our statistical expertise. With ease and excellence, embark
            on your dream wedding journey knowing it's just a few clicks away.</p>

        <a href="venues.php" class="btn"> Explore Venues </a> 
        <a href="insights.php" class="btn"> Explore Insights </a>
</div>
<div class="right-p">
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Carousel items will be dynamically populated here -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


</div>
</div>
<footer> 
<p id="foot-text"> Author: cotk2 <br> ©2024 </p>
  <a href="https://www.instagram.com/"> <img src="insta.png" class="foot-img" alt="instagram logo"> </a>
  <a href="https://twitter.com/home"><img src="twitter.png" class="foot-img" alt="twitter logo"> </a>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="homePage.js"></script>
  </body>

</html>