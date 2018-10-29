<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-12 18:50:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\pages\audios.php [ 8 ]
2017-03-12 18:50:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\pages\audios.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-03-12 18:50:38 --- ERROR: ErrorException [ 2 ]: Illegal string offset '/linareiter.com/public/songs/Nikolay_Trubach_-_Gitarist_muzofon.com.mp3' ~ APPPATH\views\pages\audios.php [ 14 ]
2017-03-12 18:50:38 --- STRACE: ErrorException [ 2 ]: Illegal string offset '/linareiter.com/public/songs/Nikolay_Trubach_-_Gitarist_muzofon.com.mp3' ~ APPPATH\views\pages\audios.php [ 14 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\audios.php(14): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\audios.php(9): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Audios->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Audios))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-03-12 18:53:19 --- ERROR: ErrorException [ 2 ]: Illegal string offset '/linareiter.com/public/songs/Nikolay_Trubach_-_Gitarist_muzofon.com.mp3' ~ APPPATH\views\pages\audios.php [ 14 ]
2017-03-12 18:53:19 --- STRACE: ErrorException [ 2 ]: Illegal string offset '/linareiter.com/public/songs/Nikolay_Trubach_-_Gitarist_muzofon.com.mp3' ~ APPPATH\views\pages\audios.php [ 14 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\audios.php(14): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\audios.php(9): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Audios->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Audios))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-03-12 20:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-12 20:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-12 20:27:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-12 20:27:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-12 20:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-12 20:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-03-12 20:28:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-03-12 20:28:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL undefined was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}