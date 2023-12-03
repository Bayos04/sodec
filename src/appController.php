<?php

/**
 *
 * littleBox
 *
 * @version 0.0.2
 *
 * @Author Bayos
 * Created on 01/04/2022
 *
 * Update on 01/07/2022
 * @version 0.0.2.0.1
 *
 * @update on 02/07/2022
 * @since  0.0.2.0.2 - sort_by_index()
 *
 * @update on 20/08/2022
 * @since 0.0.2.0.3 - hourF()
 *
 * @update on 26/11/2022
 * @since 0.0.2.0.4 - getIpAddress()
 *
 */


/**
 *
 * @param string $string
 * @return string
 *
 */
function getTextInput(string $string):string
{
    return htmlspecialchars($string);
}

//Only when using the littleBox URL Rewriting
function current_page()
{
    $url = $_SERVER['REQUEST_URI'];
    $new = explode('/', $url);

    return end($new);
}

//Only when using the littleBox URL Rewriting and when user connection is needed to access the application
function on_off(string $home, string $login, string $auth)
{
    $page = current_page();

    if ($page == $login && isset($_SESSION['id'])) {
        redirect_to($home);
    } elseif ($page != $login && $page != $auth && !isset($_SESSION['id'])) {
        redirect_to($login);
    }
}

function logout()
{
    session_destroy();
    redirect_to("login");
}


function file_ext(array $file)
{
    return strtolower(substr(strrchr($file['name'], '.'), 1));
}

function is_pdf(array $file): bool
{
    $ext = file_ext($file);
    $extVal = ['pdf'];
    return in_array($ext, $extVal);
}

function is_img(array $file, array $ext = ["jpg", "png", "jpeg", "gif", "webp"]): bool
{
    $extension = file_ext($file);
    if (in_array($extension, $ext)) {
        return true;
    } else {
        return false;
    }
}

//Only in PHP version beneath PHP 8
function dateFr()
{
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    $mois = utf8_encode(ucfirst(strftime('%B')));
    //Date du jour
    return ucfirst(strftime("%A %d " . $mois . " %G"));
}

function redirect_to(string $page)
{
    echo "<script>window.location='" . $page . "'</script>";
}

function random_matri(int $val)
{
    $letter = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y', 'Z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
    ];
    $matri = [];
    for ($i = 0; $i < $val; $i++) {
        $il = array_rand($letter);
        array_unshift($matri, $letter[$il]);
    }

    $out = implode("", $matri);
    return $out;
}

function generate_identifier(int $val)
{
    $letter = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
        'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'
    ];
    $identifier = [];
    for ($i = 0; $i < $val; $i++) {
        $il = array_rand($letter);
        array_unshift($identifier, $letter[$il]);
    }

    return implode("", $identifier);
}

    function random_password()
    {
        $chars = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
            'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o',
            'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
            '&', '#', '{', '(', '[', '-', '_', 'ç', '@', ')', ']', '=', '}', '$', '£', 'µ', '%', '!', '§', ':', '/',
            '?'
        ];
        $rand = rand(4, 14);

        $pass = [];

        for ($i = 0; $i < $rand; $i++) {
            $char = array_rand($chars);
            array_unshift($pass, $chars[$char]);
        }

        return implode("", $pass);
    }

function password_encrypt(string $string) : string
{
    //$k1 = sha1($string);
    $k2 = md5(sha1($string));
    $k3 = sha1(md5($k2));

    for ($i = 0; $i < 8; $i++) {
        $k3 = sha1(md5($k3));
    }

    return sha1($k3);
}

function ox_date_notation(string $date)
{
    $d = explode("/", str_replace("-", "/", $date));
    $dt = array_reverse($d);
    return $dt[0] . "/" . $dt[1] . "/" . $dt[2];
}

function sort_by_index(array $array, $on, $order = SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
                break;
            case SORT_DESC:
                arsort($sortable_array);
                break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

function hourF(string $hour, int $gap = -1)
{
    $hr = explode(":", $hour);
    $H = intval($hr[0]) + (- ($gap));
    return $H . " h " . $hr[1] . " min";
}

function toastify(string $severity, string $title, string $message)
{
    return json_encode(array("severity" => $severity, "title" => $title, "message" => $message));
}

function getIpAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function post(string $index, $html = false)
{
    if ($html == true) {
        return htmlspecialchars($_POST[$index]);
    } else {
        return $_POST[$index];
    }
}

function get(string $index)
{
    return $_GET[$index];
}

function postFiles(string $index)
{
    return $_FILES[$index];
}

/*
 *
 * Taken from StackOverflow
 *
 */
function camel_to_snake($input)
{
    preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
    $ret = $matches[0];
    foreach ($ret as &$match) {
        $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
    }
    return implode('_', $ret);
}

function toDateTime(string $date): ?DateTime
{
    try {
        return new DateTime($date);
    } catch (Exception $e) {
        throwError();
    }
}
