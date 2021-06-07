<?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=school','angelus','angeboni@75');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }