<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST['message']);
    $file = 'messages.txt'; // Or use an absolute path like '/var/www/html/messages.txt'

    // Check if the file exists or if it can be created
    if (file_put_contents($file, $message . "\n", FILE_APPEND | LOCK_EX) !== false) {
        echo "Message saved successfully!";
    } else {
        echo "Error: Could not save message. Check file permissions.";
    }
} else {
    echo "No message received.";
}
