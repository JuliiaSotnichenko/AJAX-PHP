<?php
$existingNames = array("Juliia", "Max", "EV");

if (isset($_POST['suggestion'])) {
    $name = $_POST['suggestion'];
    
    foreach ($existingNames as $existingName) {
        if(strpos($existingName, $name)){
            
        }
    }
}