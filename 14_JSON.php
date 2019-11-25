<?php 
    header('Content-Type: application/json');
        // 1. Create some Mexico Territories
        $mexico = array(
            'YU'=>'Yucatan',
            'BC'=>'Baja California',
            'OA'=>'Oaxaca'
        );

        //2.  Create some US States 
        $us = array(
            'MD'=>'Maryland',
            'IL'=>'Illinois',
            'IO'=>'Iowa'
        );

        //3.  Create some Canadian Provinces
        $canada = array(
            'NB'=>'New Brunswick',
            'NS'=>'Nova Scotia',
            'PE'=>'Prince Edward Island'
        );

        //4.  Combine the 3 arrays into one final array
        $n_america = array(
            'Mexico'=>$mexico,
            'United States'=>$us,
            'Canada'=>$canada
        );


        //return JSON
        echo json_encode($n_america);
