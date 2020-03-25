<?php
session_start();

if (!isset($_SESSION['error'])) {
    $_SESSION = ['error' =>
        [
            'missing' => 'Required information missing, please make sure all fields are filled out.',
            'inputLength' => 'Please fit the inputs to the required character lengths.',
            'integer' => 'Please input an integer between 0 and 1000 for the weight.',
            'invalidName' => 'Please only input letters, numbers or a hyphen:"-" for the mouse or brand name. <br> Example: Finalmouse Ultralight 2 - Cape Town, Finalmouse',
            'exists' => 'Mouse already exists in the collection!',
            'server' => 'Mouse could not be added due to technical difficulties, please try again later.'
        ],
        'success' => [
            'mouseAdded' =>  'has been added to the collection!',
            'mouseName' => 0
        ]
    ];
}