<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    file_put_contents("subscribers.txt", $email . "\n", FILE_APPEND);
    echo "Subscribed! We'll reach out to you soon.";
}
?>
