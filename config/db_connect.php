<?php


$conn = mysqli_connect('localhost', 'Ayush', 'admin@789', 'huttpizza'); // connect to database

//to check connection

if (!$conn) {
    echo 'Connection Error: ' . mysqli_connect_error();
}
