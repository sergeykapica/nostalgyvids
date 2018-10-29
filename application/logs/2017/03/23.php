<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-23 20:44:05 --- ERROR: ErrorException [ 8 ]: Undefined index: cat ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 9 ]
2017-03-23 20:44:05 --- STRACE: ErrorException [ 8 ]: Undefined index: cat ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updateQuery.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 9, Array)
#1 [internal function]: Controller_Admins_UpdateQuery->action_index()
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdateQuery))
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#6 {main}
2017-03-23 20:48:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\admins\updateQuery.php [ 14 ]
2017-03-23 20:48:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\admins\updateQuery.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-23 20:57:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admins\updateQuery.php [ 7 ]
2017-03-23 20:57:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\admins\updateQuery.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-23 21:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-23 21:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}