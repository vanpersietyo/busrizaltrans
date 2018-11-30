<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('set_session'))
{
    function set_session($var = '')
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (is_array($var)){
            foreach ($var as $item => $value) {
                if( isset( $_SESSION[$item] ) ) {
                    $_SESSION[$item] = $value;
                }
                else {
                    $_SESSION[$item] = $value;
                }

            }
            return TRUE;
        } else {
            return FALSE;
        }

    }
}

if ( ! function_exists('show_session'))
{
    function show_session($var = '')
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if( isset( $_SESSION[$var])) {
            $result = $_SESSION[$var];
        } else {
            $result='';
        }
        return $result;
    }
}
if ( ! function_exists('end_session'))
{
    function end_session()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
    }
}