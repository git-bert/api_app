<?php
echo "Connected!";

$code = isset($_GET['code']) ? $_GET['code'] : null;
$access_token = isset($_GET['access_token']) ? $_GET['access_token'] : null;

if ($code) {
    echo "<h1>Authorization Code Received:</h1>";
    echo "<p>Code: " . htmlspecialchars($code) . "</p>";
} else {
    echo "<h1>No Code</h1>";
}

if ($access_token) {
    echo "<h1>Access Token Received:</h1>";
    echo "<p>Access Token: " . htmlspecialchars($access_token) . "</p>";
} else {
    echo "<h1>No Access Token received</h1>";
}

?>
