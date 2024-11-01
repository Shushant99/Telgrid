<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST['message']);
    $file = 'messages.txt';
    $current = file_get_contents($file);
    $current .= $message . "\n";
    file_put_contents($file, $current);
    echo "Message saved successfully!";
}
?>
