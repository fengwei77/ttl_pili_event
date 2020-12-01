<?php

class Utility
{
    public function session_started()
    {
        $started = false;
        if (php_sapi_name() !== 'cli') {
            if (version_compare(phpversion(), '5.4.0', '>=')) {
                $started = (session_status() === PHP_SESSION_ACTIVE) ? true : false;
            }
            else {
                $started = (session_id() === '') ? false : true;
            }
        }
        if ($started === false) {
            session_start();
        }
    }

    public function get_user_guid($sesskey)
    {
        if (empty($_SESSION[$sesskey])) {
            $key = $this->create_guid();
            $_SESSION[$sesskey] = md5($key);
        }
        return $_SESSION[$sesskey];
    }

    public function create_guid()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        } else {
            $data = openssl_random_pseudo_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }
    }

    public function create_id()
    {
        return md5(rand() . strtotime("now") . microtime());
    }

    public function create_random_keys($length, $keyType = 5)
    {
        $str = '';
        $pattern = '';
        $num = '1234567890';
        $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lower = 'abcdefghijklmnopqrstuvwxyz';

        switch ($keyType) {
            case 1:
                $pattern = $num;
                break;
            case 2:
                $pattern = $upper;
                break;
            case 3:
                $pattern = $lower;
                break;
            case 4:
                $pattern = $num . $upper;
                break;
            case 5:
                $pattern = $num . $lower;
                break;
            case 6:
                $pattern = $upper . $lower;
                break;
            default:
                $pattern = $num . $upper . $lower;
                break;
        }

        for ($i = 0; $i < $length; $i++) {
            $str .= $pattern[rand(0, strlen($pattern) - 1)];
        }
        return $str;
    }

}
