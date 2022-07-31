<?php

class SecondTask implements SecondTaskInterface{

    // Task 2: Make this work (no vowels, lowercase except the first letter)
    public function reformat($string): string
    {
         // Convert all letter to lowercase then set first letter to upcase
         $new_string = ucfirst(strtolower($string));
         $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
 
         $new_string = str_replace($vowels, "", $new_string);
 
         return $new_string;
    }
}