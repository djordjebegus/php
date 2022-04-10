<?php
$config = require 'config.php';
require 'Connection.php';
$db = Connection::connect($config['database']);
