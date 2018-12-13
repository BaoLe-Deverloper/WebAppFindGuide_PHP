<?php
 // Thông số controller và action mặc định
define('CONTROLLER_DEFAULT', 'Home');
define('ACTION_DEFAULT', 'index');
// Đường dẫn tới hệ  thống
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/site');

// Lấy thông số cấu hình
require (PATH_SYSTEM . '/config/config.php');
// Require controller
require_once PATH_SYSTEM . '/core/Controller.php'; 
// Load Base_Controller
if (file_exists(PATH_APPLICATION . '/core/Base_Controller.php')){
    include_once PATH_APPLICATION . '/core/Base_Controller.php';
}
require_once PATH_SYSTEM . '/core/Common.php';

load();
