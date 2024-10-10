<?php
echo "Connected!";

// Capture query parameters from the URL
$access_token = isset($_GET['access_token']) ? $_GET['access_token'] : null;

// Check if the 'Access Token' parameter is present
if ($code) {
    echo "<h1>Authorization Code Received:</h1>";
    echo "<p>Access Token: " . htmlspecialchars($access_token) . "</p>";
} else {
    echo "<h1>Error: Access Token Received</h1>";
}

?>
