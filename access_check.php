<?php
    session_start();

    if (!defined('__NOT_DIRECT')) {
        // Ini tidak ada masalah
        die('you cannot access!');
    }

    // Jangan include lagi db_config.php
    // include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'db_config.php';
    if (!isset($_SESSION['my_user_agent']) || ($_SESSION['my_user_agent']!=md5($_SERVER['HTTP_USER_AGENT']))) {
        //user belum login
        $__user_level = 'therapist';
    } else {
        $__user_level = $_SESSION['user_level'];
    }

    $filenameAccess = dirname(__FILE__).DIRECTORY_SEPARATOR.'access'.DIRECTORY_SEPARATOR.$__user_level.'.php';
    if (!file_exists($filenameAccess)) {
        die('system has error');
    }
    include $filenameAccess;

    $arrayCurrentPath = explode('?', $_SERVER['REQUEST_URL']);
    $currentPath = substr($arrayCurrentPath[0], strlen(BASE_URL));

    $allow = in_array($currentPath, $__access_config);

    if (!$allow) {
        if ($__user_level == 'therapist' && $currentPath != 'login.php') {
            header("Location: " . BASE_URL . 'login.php');
        } else {
            echo "You cannot access this page!";
        }
        exit;
    }
