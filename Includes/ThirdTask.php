<?php

class ThirdTask implements ThirdTaskInterface{

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