<?php

error_reporting(E_ALL ^ E_NOTICE);
define('APP_ENABLED', 'mbm');
define('APPMODE', 'dev');

require_once ('../core/app/' . APP_ENABLED . '/config/main.php');
require_once '../core/bootstrap.php';

load_layout();
//echo '<hr />';
//echo $date_time;
//echo '<br />';
//echo \M\Carbon::now()->addYears(10);
//lang file -d bhgui ugsiig track hiih
//foreach ($ln::$words_not_found as $k => $v) {
//    echo '$lang["' . $k . '"] = "";<br>';
//}
M\Language::log();
