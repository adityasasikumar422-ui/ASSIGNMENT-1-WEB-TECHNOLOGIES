<?php

$name = $_POST['name'];
$email = $_POST['email'];

echo "<h1>Registration Details</h1>";
echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";

?>