<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-11-03 00:01:21 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Handler.php [ 27 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:01:21 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php(27): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(69): Controller_OtherFuncs->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_OtherFuncs))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:02:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: token ~ APPPATH\views\index.php [ 67 ] in C:\xampp\htdocs\nostalgyvids.com\application\views\index.php:67
2018-11-03 00:02:04 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\views\index.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 67, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\nostalgyvids.com\application\views\index.php:67
2018-11-03 00:06:40 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_OtherFuncs::$token ~ APPPATH\classes\Controller\Handler.php [ 27 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:06:40 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(69): Controller_OtherFuncs->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_OtherFuncs))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:06:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_OtherFuncs::$token ~ APPPATH\classes\Controller\Handler.php [ 27 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:06:42 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(69): Controller_OtherFuncs->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_OtherFuncs))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:06:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_OtherFuncs::$token ~ APPPATH\classes\Controller\Handler.php [ 27 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:06:48 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 27, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(69): Controller_OtherFuncs->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_OtherFuncs))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Handler.php:27
2018-11-03 00:12:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on null ~ APPPATH\classes\Controller\OtherFuncs.php [ 12 ] in file:line
2018-11-03 00:12:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-03 00:12:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on null ~ APPPATH\classes\Controller\OtherFuncs.php [ 12 ] in file:line
2018-11-03 00:12:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-03 00:12:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: token ~ APPPATH\views\index.php [ 67 ] in C:\xampp\htdocs\nostalgyvids.com\application\views\index.php:67
2018-11-03 00:12:29 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\views\index.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 67, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\nostalgyvids.com\application\views\index.php:67
2018-11-03 00:12:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on null ~ APPPATH\classes\Controller\OtherFuncs.php [ 12 ] in file:line
2018-11-03 00:12:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-03 00:14:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: captcha ~ APPPATH\classes\Controller\Clients.php [ 15 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:15
2018-11-03 00:14:24 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_loginIn()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:15