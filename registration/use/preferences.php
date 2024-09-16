<?php

define('BASE_URL', 'http://localhost/rr/');
define('MYSQL', '.use/mysql_connection_link.php');
define('ADMIN_EMAIL', 'djonah04@gmail.com');

function between($val, $x, $y)
{
    $val_len = strlen($val);

    return ($val_len >= $x && $val_len <= $y) ? true : false;
}
