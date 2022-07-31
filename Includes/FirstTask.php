<?php

class FirstTask implements FirstTaskInterface{

    // Task 1: Make this work (repeat 3 times the contents of an array)
    public function repeat(array $array): string
    {
        $newArray = [];
        $counts = 3;

        for ($i = 1; $i <= $counts; $i++) {
            $newArray = array_merge($newArray, $array);
        }

        return json_encode($newArray);
    }
}