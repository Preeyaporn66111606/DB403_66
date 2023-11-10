<?php
    $conn = new mysqli('db403-mysql', 'root', 'Passw0rd', 'midterm_exam'
                      'P@ssw0rd', 'northwind');
    if ($conn->connect_error) {
        echo $conn->connect_error;
        die();
    }