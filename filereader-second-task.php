<?php
//open the file to get each every numbers
$file = fopen("input.txt","r") or die("Cannot open file!");
$main_array = preg_split("/[\s,]+/",fread(($file),filesize("input.txt")));
fclose($file);

if (sizeof($main_array) > 1000){
    echo "The size of array is larger than 1000. Reducing...\n";
    $reduce_by = (sizeof($main_array)-1000);
    $main_array = array_slice($main_array, $reduce_by);
    echo "The array has been reduced by " . $reduce_by . ".\n";
}
//make temp array for counting the time each number appears
$count_array = array();
$same_numbers = array();

//Count the main array
$count_array = array_count_values($main_array);

//Give result
echo "Numbers that appeared three times or more: ";
$any_number = false; //key to check if the code found any number that appeared more than 3 times
foreach ($count_array as $key => $val){
    //is_numeric is to counter there is a letter (example: d) appeared more than 3 times instead.
    if ($val >= 3 and is_numeric($key)){
        echo $key . " " ;
        $any_number = true;
    }
}

if ($any_number == false){
    echo "None\n";
}
else echo "\n";