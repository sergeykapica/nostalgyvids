<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-25 20:48:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: catNomer ~ APPPATH\views\admins\editor.php [ 541 ]
2017-03-25 20:48:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: catNomer ~ APPPATH\views\admins\editor.php [ 541 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\admins\editor.php(541): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 541, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\application\views\admins\insertToDB.php(7): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\insertToDB.php(23): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admins_InsertToDB->action_index()
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_InsertToDB))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#15 {main}
2017-03-25 20:50:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
2017-03-25 20:50:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-25 20:50:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
2017-03-25 20:50:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-25 20:50:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
2017-03-25 20:50:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-25 20:50:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
2017-03-25 20:50:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-25 20:50:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
2017-03-25 20:50:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-25 20:50:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
2017-03-25 20:50:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-25 20:51:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
2017-03-25 20:51:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$nameTema' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\updateInfo.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}