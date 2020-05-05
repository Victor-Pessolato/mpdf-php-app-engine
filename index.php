<?php

require_once __DIR__ . '/vendor/autoload.php';

$action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

if(empty($action)) {
    $action = filter_input(INPUT_POST, "action", FILTER_SANITIZE_STRING);
}

switch ($action) {
    case "pdf":
        require_once("modules/pdf.php");
        break;
    case "html":
        require_once("modules/html.php");
        break;
    default:
        require_once("modules/home.php");
}