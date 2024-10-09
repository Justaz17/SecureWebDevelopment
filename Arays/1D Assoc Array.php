<?php
$monthly_rainfall_array = array("January" => "20.3", "Feb" => "25.2","March" =>"18.4","April" =>"15.9", "May"=>"12.6", "June" =>"10.1");
$key = array_values($monthly_rainfall_array);
$smallest_value = $key[0];
$smallest_key = null;
$array_size = count($monthly_rainfall_array);
$average = array_sum($monthly_rainfall_array)/$array_size;

foreach ($monthly_rainfall_array as $key => $value) {
            if ($smallest_value > $value) {
                $smallest_key = $key;
                $smallest_value = $value;
            }
}

echo "the Month ". $smallest_key. " has the smallest amount of rainfall : " . $smallest_value;
echo "<br>";

echo "The Average is: ". round($average,1);
