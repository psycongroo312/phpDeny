<?php

$users [
    [
        'login' => 'admin1'
        'password' => '123'

    ],

    [
        'login' => 'admin1'
        'password' => '123'

    ],

    [
        'login' => 'admin1'
        'password' => '123'

    ],
];


function isUsernameTaken($username, $users) {
    foreach ($users as $existingUsername => $password) {
        if ($existingUsername === $username) {
            return true;
        }
    }
    return false;
}


?>