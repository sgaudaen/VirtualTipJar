<?php

    function get_random_restaurant(){

        $filename = "Assets/data.csv";
        $data_array = [];
        $count = 0;

        if (($h = fopen("{$filename}", "r")) !== FALSE) {
            while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
            {
                $data_array[] = $data;
                $count += 1;
            }
            fclose($h);
        }

        $num = rand(0, $count);
        $restaurant = $data_array[$num];
        return $restaurant;
    }
?>