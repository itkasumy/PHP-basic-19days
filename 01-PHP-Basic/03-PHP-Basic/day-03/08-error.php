<?php
    header('Content-type:text/html;charset=utf-8');

    set_error_handler('myError');

    function myError($type, $mess) {
        switch($type) {
            case E_USER_NOTICE:
                echo 'NOTICE:';
                break;
            case E_USER_WARNING:
                echo 'WARNING:';
                break;
            case E_USER_ERROR:
                echo 'ERROR:';
                break;
        }

        echo $mess;
    }

    // trigger_error('轻微提示', E_USER_NOTICE);
    // trigger_error('严重警告', E_USER_WARNING);
    trigger_error('致命错误', E_USER_ERROR);