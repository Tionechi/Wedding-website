
<?php

include "db-config.php";


$partySize = trim($_GET["party-size"]);
$grade = trim($_GET["grade"]);
$date = trim($_GET["date"]);
$convertedDate =  date("Y-m-d",strtotime($date));

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    // Database connection error, send error response
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

// Prepare and execute the SQL query with parameterized statements

$sql = "SELECT v.name, v.capacity,v.weekend_price, v.weekday_price, c.grade,c.cost, a.booking_date, WEEKDAY('$convertedDate') AS 'Day', c.cost * $partySize AS 'total' FROM venue AS v 
        INNER JOIN catering AS c ON v.venue_id = c.venue_id  INNER JOIN venue_booking AS a ON v.venue_id = a.venue_id
        WHERE v.capacity >= $partySize AND c.grade = $grade AND a.booking_date = '$convertedDate';";

$result = mysqli_query($conn, $sql); 

// Fetch results and store in an array
$venueArray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $venueArray[] = $row;
}

// Return JSON response
echo json_encode($venueArray);

// Close connections
mysqli_close($conn);
?>
