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
    unset($user['password']);
        setSession('user', $user);


        if ($user['role'] === 'gerant') {

            header('Location: /gerant/dashboard');
            exit;
        }


        if ($user['role'] === 'coach') {

            header('Location: /coach/dashboard');
            exit;
        }


        if ($user['role'] === 'apprenant') {

            header('Location: /apprenant/dashboard');
            exit;
        }
    } else {

        require_once dirname(__DIR__) . '/views/auth/login.php';
    }
}


function logout()
{
    require_once dirname(__DIR__) . '/core/sessionManager.php';

    startSession();

    destroySession();

    header('Location: /login');
    exit;
}