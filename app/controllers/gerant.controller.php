<?php

function dashboard()
{
    require_once dirname(__DIR__) . '/core/sessionManager.php';

    startSession();
    


    if (!isConnected()) {

        header('Location: /login');
        exit;

    }


    echo "Dashboard Gérant";
}