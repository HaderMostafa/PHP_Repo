<?php

session_start();

require_once "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Database;

Connect::connectDatabase();

require_once "Views/login.php";

//require_once "Views/login.php";

//require_once "Views/download_area.php";

//require_once "Views/download_info.php";

//require_once "Views/edit_profile.php";