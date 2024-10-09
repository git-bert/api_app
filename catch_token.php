<?php
// Capture query parameters from the URL
$access_token = isset($_GET['access_token']) ? $_GET['access_token'] : null;

// Check if the 'code' parameter is present
if ($code) {
    echo "<h1>Authorization Code Received:</h1>";
    echo "<p>Code: " . htmlspecialchars($access_token) . "</p>";
} else {
    echo "<h1>Error: No Authorization Code Received</h1>";
}

// Optionally, you could store the 'code' in a database or continue with the OAuth flow
?>
