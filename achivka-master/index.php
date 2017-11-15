<?php
define('SECONDS_IN_DAY', 86400);
$seconds_in_day = 86400;
$yesterday = time() - $seconds_in_day;
echo date('Y-m-d H:i:s', $yesterday);