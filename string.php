<?php
//Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];
//Array of Vowels
$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
//Empty Array to store vowel count
$countVowels = [];
//Loop through each string
foreach ($strings as $string) {
    //Initialize count to 0
    $count = 0;
    //Loop through each character
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    $countVowels[$string] = $count;
}
//Display result
foreach ($countVowels as $string => $count) {
    //Reverse string
    $revString = strrev($string);
    echo "Original String: $string, Vowel Count: $count, Reversed String: $revString <br>";
}

?>

