<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-15 16:56:48 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\welcome.php [ 11 ]
2014-12-15 16:56:48 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\welcome.php [ 11 ]
--
#0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 11, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2014-12-15 16:56:54 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\welcome.php [ 11 ]
2014-12-15 16:56:54 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\welcome.php [ 11 ]
--
#0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 11, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2014-12-15 16:56:56 --- ERROR: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\welcome.php [ 11 ]
2014-12-15 16:56:56 --- STRACE: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\welcome.php [ 11 ]
--
#0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 11, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2014-12-15 17:55:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 111 ]
2014-12-15 17:55:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2014-12-15 22:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/main.css ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2014-12-15 22:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/main.css ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-12-15 22:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/main.css ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2014-12-15 22:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/main.css ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-12-15 22:13:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/main.css ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2014-12-15 22:13:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/css/main.css ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}