<?php

$gems_array = array(
    "Gem 1" => 0,
    "Gem 2" => 0,
    "Gem 3" => 0,
    "Gem 4" => 0
    );
    
$true_ending = 0;

function gem_found($gem_type) {
    global $gems_array;
    global $true_ending;
    foreach($gems_array as $gem_number => $gem_value) {
        if($gem_number == $gem_type){
            $gems_array[$gem_number]=1;
            $true_ending += 0.25;
        }
    }
}

gem_found("Gem 1");


print_r ($gems_array);
echo $true_ending;
?>
    

