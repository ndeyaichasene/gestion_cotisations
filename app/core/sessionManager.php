<?php

function startSession()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}


function setSession(string $key, mixed $value)
{
    $_SESSION[$key] = $value;
}


function getSession(string $key)
{
    return $_SESSION[$key] ?? null;
}


function removeSession(string $key)
{
    unset($_SESSION[$key]);
}


function destroySession()
{
    session_destroy();
}

function isConnected()
{
    return isset($_SESSION['user']);
}