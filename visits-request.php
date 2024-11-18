<?php

include "db-config.php";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    // Database connection error, send error response
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

// Prepare and execute the SQL query with parameterized statements

$sql = "SELECT venue_review_score.venue_id, COUNT(venue_review_score.venue_id) as \"occurences\", venue.name\n"

    . "FROM venue_review_score, venue\n"

    . "WHERE venue_review_score.venue_id = venue.venue_id\n"

    . "GROUP BY venue_review_score.venue_id\n"

    . "ORDER BY occurences ASC;";

$result = mysqli_query($conn, $sql); 

// Fetch results and store in an array
$visitsArray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $visitsArray[] = $row;
}

// Return JSON response
echo json_encode($visitsArray);

// Close connections
mysqli_close($conn);


?>