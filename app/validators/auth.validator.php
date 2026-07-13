<?php 

function validateLogin(string $email, string $password)
{
    $errors = [];

    if (empty($email)) {
        $errors[] = "L'identifiant est obligatoire";
    }

    if (empty($password)) {
        $errors[] = "Le mot de passe est obligatoire";
    }

    return $errors;
}