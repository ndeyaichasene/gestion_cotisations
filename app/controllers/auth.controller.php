<?php

function login()
{
    require_once dirname(__DIR__) . '/core/sessionManager.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';


        require_once dirname(__DIR__) . '/validators/auth.validator.php';

        $errors = validateLogin($email, $password);


        if (!empty($errors)) {

            require_once dirname(__DIR__) . '/views/auth/login.php';

            return;
        }


        require_once dirname(__DIR__) . '/services/auth.service.php';


        $user = authenticate($email, $password);


        if ($user === null) {

            echo "Identifiants incorrects";

            return;
        }


        startSession();

        setSession('user', $user);


        echo "Connexion réussie";


    } else {

        require_once dirname(__DIR__) . '/views/auth/login.php';

    }
}