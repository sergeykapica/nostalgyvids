<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-26 18:15:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\articles.php [ 14 ]
2014-12-26 18:15:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\articles.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-12-26 21:43:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ]
2014-12-26 21:43:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-12-26 21:44:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ]
2014-12-26 21:44:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-12-26 21:44:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ]
2014-12-26 21:44:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.', expecting function (T_FUNCTION) ~ APPPATH\classes\Model\article.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-12-26 21:45:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Article::get_all() ~ APPPATH\classes\Controller\page.php [ 13 ]
2014-12-26 21:45:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Article::get_all() ~ APPPATH\classes\Controller\page.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2014-12-26 21:46:18 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-26 21:46:18 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
--
#0 C:\xampp\htdocs\kohana\application\views\pages\show.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\main.php(27): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2014-12-26 21:46:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-26 21:46:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
--
#0 C:\xampp\htdocs\kohana\application\views\pages\show.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\main.php(27): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2014-12-26 21:49:11 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-26 21:49:11 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
--
#0 C:\xampp\htdocs\kohana\application\views\pages\show.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\main.php(27): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2014-12-26 21:49:13 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-26 21:49:13 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
--
#0 C:\xampp\htdocs\kohana\application\views\pages\show.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\main.php(27): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2014-12-26 22:27:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-26 22:27:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
--
#0 C:\xampp\htdocs\kohana\application\views\pages\show.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\main.php(27): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2014-12-26 22:27:43 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-26 22:27:43 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
--
#0 C:\xampp\htdocs\kohana\application\views\pages\show.php(4): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\application\views\main.php(27): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Page))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2014-12-26 22:27:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\comments.php [ 61 ]
2014-12-26 22:27:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\comments.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}