<?php

class ReverseString{
    private $strings  = [];

    public function __construct($strings=[])
    {
        $this->strings = $strings;
        //print_r($this->strings);
        $this->reverseStringWithVowelCount();
    }

    private function reverseStringWithVowelCount ()
    {
        foreach ($this->strings as $string) {
            $reverse = strrev($string);
            $newString = strtolower($string);
            $vowelCount = 0;
            for ($i = 0; $i < strlen($newString); $i++) {
                if (in_array($newString[$i], ["a", "e", "i", "o", "u"])){
                    $vowelCount++;
                }
            }
            echo "Original String: ".$string.", Vowel Count: ".$vowelCount." Reversed String: ".$reverse."\n";
        }
    }


}

$myString = new ReverseString(["Hello", "World", "PHP", "Programming"]);