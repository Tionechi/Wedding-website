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
    <div class="contain"> 
        <div class="left-p">
        <form class="form card-f" id="form" >
  <div class="card-f_header">
    <h1 class="form_heading">Filter Venues</h1>
  </div>
  <div class="field">
    <label for="party-size">Party size</label>
    <input class="input" name="party-size" type="number" placeholder="party size"  min = "50" id="party-size">
  </div>
  <div class="field">
    <label for="date">Date</label>
    <input class="input" name="date" type="date"  id="date">
  </div>
  <div class="field">
  <label for="grade">Choose a Catering Grade:</label>
        <select class ="input" id="grade" name="grade">
            <option value= "">Grade</option>
            <option value= "1">1</option>
            <option value= "2">2</option>
            <option value= "3">3</option>
            <option value= "4">4</option>
            <option value= "5" >5</option>
        </select>
        
  </div>

</form>
            
</div>

<div class="right-p" id="venues">
</div>

</div>

        <footer> 
            <p id="foot-text"> Author: cotk2 <br> ©2024 </p>
            <a href="https://www.instagram.com/"> <img src="insta.png" class="foot-img" alt="instagram logo"> </a>
            <a href="https://twitter.com/home"><img src="twitter.png" class="foot-img" alt="twitter logo"> </a>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
    // Function to fetch venue data
    async function fetchVenueData(formData) {
    try {
        // Construct query string from form data
        const queryString = new URLSearchParams(formData).toString();
        // Asynchronously fetching venue data based on form data
        const response = await fetch(`venues-request.php?${queryString}`);
        const venueArray = await response.json();
        let insertedHtml = "";
        
        if (venueArray && venueArray.length > 0) {
            // Mapping of venue names to images
            const venueImageMap = {
                "Ashby Castle": "ashby-castle.jpg",
                "Central Plaza": "central-plaza.jpg",
                "Pacific Towers Hotel": "pacific-towers.jpg",
                "Sea View Tavern": "sea-view.jpg",
                "Fawlty Towers": "fawlty-towers.jpg",
                "Hilltop Mansion": "hilltop-mansion.jpg",
                "Haslegrave Hotel": "haslegrave.jpg",
                "Forest Inn": "forest-inn.jpg",
                "Southwestern Estate": "estate.jpg",
                "Sky Center Complex": "sky-centre.jpg",
            };
            

            // Constructing HTML for venue data
            venueArray.forEach(venue => {
                // Check if venue name has a corresponding image
                const imageUrl = venueImageMap[venue.name] || "p3.jpg";
                const endTotal = parseFloat(venue.total) + parseFloat(venue.weekend_price);
                const dayTotal = parseFloat(venue.total) + parseFloat(venue.weekday_price);

                insertedHtml += `<div class="card1">
                    <img class="venue-pic" src="${imageUrl}" alt="${venue.name}" style="width: 250px; height: 200px;">
                    <p class="card-title">${venue.name}</p> <br>
                    <p class="small-desc">Capacity: ${venue.capacity}</p>
                    <div class="extra">
                        <p>Grade:${venue.grade}  Cost per person:£${venue.cost} 
                        <br> Cost for Party-size:£${venue.total}</p>
                        <p id="total-cost">${venue.Day == 5 || venue.Day == 6 ? 'Venue Total:£' + endTotal : 'Venue Total:£' + dayTotal} </p>

                    </div>
                    <p class="small-desc">
                        ${venue.Day == 5 || venue.Day == 6 ? 'Venue price:£' + venue.weekend_price : 'Venue price:£' + venue.weekday_price}
                    </p>
                </div>`;

            });
        } else {
            // Display message if no venues found
            insertedHtml = "<img src='no-data.jpg' alt='no data image' style='width: 1000px; height: 600px;'>";
        }

        // Displaying venue data
        document.getElementById("venues").innerHTML = insertedHtml;
    } catch (error) {
        console.log('Error:', error);
    }
}


    // Get the form element
    const form = document.getElementById('form'); 

    // Add event listener to the form
    form.addEventListener('change', function (event) {
        // Prevent default form submission
        event.preventDefault();
        // Get form data
        const formData = new FormData(form);
        // Call fetchVenueData function with form data
        fetchVenueData(formData);
    });

  // Get all cards
const cards = document.querySelectorAll('.card1');

</script>

        </body>

</html>