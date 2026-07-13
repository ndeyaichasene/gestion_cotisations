<?php

function authenticate(string $email,string $password)
{
    $users = [
        [
            'email' => 'gerant@test.com',
            'password' => '123',
            'role' => 'gerant'
        ],

        [
            'email' => 'coach@test.com',
            'password' => '123',
            'role' => 'coach'
        ],

        [
            'email' => 'apprenant@test.com',
            'password' => '123',
            'role' => 'apprenant'
        ]
    ];


    foreach ($users as $user) {

        if ($user['email'] === $email 
            && $user['password'] === $password) {

            return $user;

        }

    }


    return null;
}