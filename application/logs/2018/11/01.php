<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-11-01 23:46:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_OtherFuncs::$session ~ APPPATH\classes\Controller\OtherFuncs.php [ 8 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\OtherFuncs.php:8
2018-11-01 23:46:41 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\OtherFuncs.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_OtherFuncs->action_getCaptcha()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_OtherFuncs))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\OtherFuncs.php:8