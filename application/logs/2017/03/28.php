<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-28 17:29:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 13 ]
2017-03-28 17:29:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-28 17:30:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 13 ]
2017-03-28 17:30:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-28 18:03:16 --- ERROR: ErrorException [ 8 ]: Undefined index: curPage ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 16 ]
2017-03-28 18:03:16 --- STRACE: ErrorException [ 8 ]: Undefined index: curPage ~ APPPATH\classes\Controller\Admins\updateQuery.php [ 16 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updateQuery.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 16, Array)
#1 [internal function]: Controller_Admins_UpdateQuery->action_index()
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdateQuery))
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#6 {main}
2017-03-28 21:06:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminpanel/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-28 21:06:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminpanel/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-28 21:09:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-28 21:09:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-28 21:09:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-28 21:09:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-28 21:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-28 21:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-28 21:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-28 21:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-28 21:11:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-28 21:11:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL updateQuery/1 was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-28 22:11:17 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Pagination::factory() must be of the type array, string given, called in C:\xampp\htdocs\linareiter.com\application\views\admins\updateQuery.php on line 20 and defined ~ MODPATH\pagination\classes\kohana\pagination.php [ 71 ]
2017-03-28 22:11:17 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Pagination::factory() must be of the type array, string given, called in C:\xampp\htdocs\linareiter.com\application\views\admins\updateQuery.php on line 20 and defined ~ MODPATH\pagination\classes\kohana\pagination.php [ 71 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\pagination\classes\kohana\pagination.php(71): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\\xampp\\htdocs...', 71, Array)
#1 C:\xampp\htdocs\linareiter.com\application\views\admins\updateQuery.php(20): Kohana_Pagination::factory('total_items')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updateQuery.php(25): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Admins_UpdateQuery->action_index()
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdateQuery))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#12 {main}