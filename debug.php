<?php
$name = $_POST['name'] ?? 'Guest';
echo "Welcome " . $name;

if (isset($_POST['age']) && $_POST['age'] > 18) {
    echo "You are eligible";
} else {
    echo "You are not eligible";
}
?>