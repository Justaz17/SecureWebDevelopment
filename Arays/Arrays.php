<?php


$subject = array("WP"=>"50","WD"=>"59","ID"=>"76","DV"=>"33","HC"=>"21","PR"=>"89");
$average = array_sum($subject)/6;
$current_value = null;
$key = array_keys($subject);
$lowest_value_name =$key[0];
$lowest_value = $subject[$lowest_value_name];

    foreach ($subject as $key => $value) {

        $current_value = $value;
        if($current_value < $lowest_value){
            $lowest_value = $current_value;
            $lowest_value_name = $key;
        }
        if($current_value > $average){
            echo "Subject ". $key.":". $value. " is ABOVE the average <br>";
        } else {
            echo "Subject ". $key." : ". $value. " is BELOW the average <br>";
        }

    }
    echo "<br>";
    echo "the average is: ".$average."<br>";
    echo "<br>";
    echo "the smallest mark is: ".$lowest_value. " and was achieved in: ". $lowest_value_name."<br>";