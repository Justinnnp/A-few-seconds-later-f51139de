<?php

$var = strpos($argv[1], "s");

if ($var != false) {
    echo (int) $argv[1]. " seconden";
    
} else {
    echo "Geen tijd gevonden.";
}
?>