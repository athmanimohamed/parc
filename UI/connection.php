<?php
try {
    $conne = new PDO('mysql:host=localhost;dbname=', 'root', '');
} catch (Exception $e) {
    die("connection avec sucesse" . $e->getMessage());
}
