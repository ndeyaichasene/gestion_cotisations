<?php


require_once dirname(__DIR__) . '/app/core/sessionManager.php';
require_once dirname(__DIR__).'/app/core/router.php';

startSession();

dispatch();