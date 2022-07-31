<?php

class Tasks{

    // Task 1: Make this work (repeat 3 times the contents of an array)
    public function repeat(array $array)
    {
        $newArray = [];
        $counts = 3;

        for ($i = 1; $i <= $counts; $i++) {
            $newArray = array_merge($newArray, $array);
        }

        return json_encode($newArray);
    }

    // Task 2: Make this work (no vowels, lowercase except the first letter)
    public function reformat($string): string
    {
        // Convert all letter to lowercase then set first letter to upcase
        $new_string = ucfirst(strtolower($string));
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

        $new_string = str_replace($vowels, "", $new_string);

        return $new_string;
    }


    // Task 3: Make this work (without using any built-in functions, only a for loop, return the next binary number in a string or as an array).
    public function next_binary_number(array $array): string
    {
        // convert from array to string
        $numbers = implode($array);
        $count = strlen($numbers);
    
        // find first 0 from right side
        for ($i = $count - 1; $i >= 0; $i--)
        {
            // if $i = 0 set to 1
            if ($numbers[$i] == '0')
            {
                $numbers[$i] = '1';
                break;
            }
    
            // else if $i = 1 set to 0
            else
                $numbers[$i] = '0';
        }
    
        // if the binary has no 0
        if ($i < 0)
            $numbers = "1" . $numbers;
    
        return $numbers;
    }

}
 


?>