<?php

require_once('vendor/autoload.php');
require_once('app/functions/helpers.php');

app\classes\Bind::bind('connection', app\models\Connection::connect());