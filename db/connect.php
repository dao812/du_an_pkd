<?php

// Sử dụng cho database chi cần require file này là sử dụng được
require_once(realpath(dirname(__FILE__) . "/../db/config.php"));
require_once(realpath(dirname(__FILE__) . "/../db/database.php"));

db_connect($config);
