<!DOCTYPE html>
<html lang ="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        </head>
        <body>


    <nav class = "navbar"> 
    <div id="homeNav">
    <div>  <a href= "wedding.php"> <img id="logo"  src="dove.png" alt="wedding logo" > </a> <!-- Div contains logo in nav bar -->
    </div>
    <div class = "navCon"> <!-- Div containing actual nav bar links -->
    <a class = "navbar-text" href= "wedding.php">Home </a>
    <a class = "navbar-text" href= "venues.php">Venues </a>
    <a class = "navbar-text" href= "insights.php">Insights</a>
    <a class = "navbar-text" href= "about.php">About us</a>
    </div> 
    </div>
    </nav>
    <div id="top">
    <h2 id="top-text">Make the right decision <br>With the right data</h2>
</div>

<div class="chart-container" id="chart1">
   <div class="chartInfo"> <p> All our venues are great but obviously some are greater <br> than others. Take a look at how popular each venue is!</p> </div>
    <canvas class="charts" id="myChart"></canvas>
</div>

<div class="chart-container" id="chart2">
    <canvas class ="charts" id="avg"></canvas>
    <div class="chartInfo"> <p> With the help of our analytics experts we have curated <br>all ratings data
for each venue for your convenience. <br> Take a look at what people think of each venue out of 10! </p> </div>
</div>



        <footer> 
            <p id="foot-text"> Author: cotk2 <br> ©2024 </p>
            <a href="https://www.instagram.com/"> <img src="insta.png" class="foot-img" alt="instagram logo"> </a>
            <a href="https://twitter.com/home"><img src="twitter.png" class="foot-img" alt="twitter logo"> </a>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="charts.js"></script>

        </body>

</html>