<?php
// An array with a string index where each value is assigned a specific key.

$People = [
    'William'=>'Taft',
    'Howard'=>'Little',
    'Betsy'=>'Cross',
    'Loriane'=>'Alto',
    'Dan'=>'Futura'
];

//echo $People['Betsy'] .PHP_EOL; //Finds the last name (value) of Betsy within the $People array.

//echo $People['Cross'] . PHP_EOL; // This you can not do because Betsy is the key which is attached to the value.

$People_Pets = [
    'Alex'=>'cat',
    'Louis'=>'iguana',
    'Ted'=> 'dog',
    'Allison'=>'hamster',
    'Doug'=>'rabbit',
    'Tony'=>'ferret'
];

//echo $People_Pets['Doug'] .PHP_EOL; // Finds which value is associated with 'Doug' in the $People_Pets array which is rabbit.

//echo count($People_Pets) . PHP_EOL; // Counts the amount of key/value pairs in the $People_Pets array.

$Cities_States = [
    'Sacramento'=> 'California',
    'Phoenix'=>'Arizona',
    'Salt Lake City'=>'Utah',
    'Reno'=> 'Nevada',
    'Albany'=>'New York',
    'Portland'=>'Oregon',
];

//echo count($Cities_States) . PHP_EOL; // Counts the amount of key/value pairs in $Cities_States which is 6.

//echo $Cities_States['Reno'] . PHP_EOL; // Returns the value paired with the key 'Reno' which is 'Nevada.'

//echo asort($Cities_States) . PHP_EOL; // Sorts the $Cities_States array  in ascending order according to the value.

// echo ksort($Cities_States) . PHP_EOL; // Sorts the $Cities_States array  in ascending order according to the key.

$Colors_Fruit = [
    'Orange'=>'Peach',
    'Yellow'=>'Banana',
    'Green'=>'Kiwi',
    'Red'=>'Apple',
    'Pink'=>'Watermelon',
    'White'=>'Coconut',
];

//echo $Colors_Fruit['Red'] . PHP_EOL; //Finds the value of Red in the $Colors_Fruit array which is Apple.

//echo $Colors_Fruit['White'] . PHP_EOL; //Finds the value of white in the $Colors_Fruit array which is coconut.

//echo count($Colors_Fruit) . PHP_EOL; // Finds the amount of key/value pairs in the $Colors_Fruit array which is 6.

$items = [
    'Boots'=>'Shoes',
    'Blouse'=> 'Shirt',
    'Jeans'=> 'Bottoms',
    'Sunglasses'=>'Backpack',
    'Cup'=>'Mug',
    'Phone'=>'Mobile',
    'Wallet'=>'Purse',
];
//echo $items['Cup'] . PHP_EOL; // Returns mug in the $items array by using its key which is Cup.
//echo count($items) . PHP_EOL; // Counts the amount of key/values pairs in the $items array which is 7.