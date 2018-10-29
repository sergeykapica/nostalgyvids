<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-30 17:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL zdorovie was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2014-12-30 17:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL zdorovie was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\zdorovie\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\zdorovie\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\zdorovie\index.php(109): Kohana_Request->execute()
#3 {main}
2014-12-30 17:58:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\main.php [ 11 ]
2014-12-30 17:58:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\main.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}