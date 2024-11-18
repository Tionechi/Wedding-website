<?php

include "db-config.php";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    // Database connection error, send error response
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

// Prepare and execute the SQL query with parameterized statements

$sql = "SELECT venue_review_score.venue_id, AVG(venue_review_score.score) as \"Average_rating\", venue.name\n"

    . "FROM venue_review_score, venue\n"

    . "WHERE venue_review_score.venue_id = venue.venue_id\n"

    . "GROUP BY venue_review_score.venue_id\n"

    . "ORDER BY Average_rating DESC;";

$result = mysqli_query($conn, $sql); 

// Fetch results and store in an array
$avgArray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $avgArray[] = $row;
}

// Return JSON response
echo json_encode($avgArray);

// Close connections
mysqli_close($conn);


?>