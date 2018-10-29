<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-04 14:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/naviFong.jpg ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2017-04-04 14:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/images/naviFong.jpg ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#1 {main}
2017-04-04 17:23:42 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 17:23:42 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Authorization->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Authorization))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 17:25:06 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 17:25:06 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Authorization->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Authorization))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 17:25:08 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 17:25:08 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Authorization->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Authorization))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 17:50:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 17:50:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:03:35 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:03:35 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:03:36 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:03:36 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:03:37 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:03:37 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:03:39 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:03:39 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:03:41 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:03:41 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:06:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:06:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:06:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:06:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:06:03 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:06:03 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:08:11 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:08:11 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:09:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:09:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:09:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:09:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:09:56 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:09:56 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:09:57 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:09:57 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:09:59 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:09:59 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:10:01 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:10:01 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:17:00 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:17:00 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:17:02 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:17:02 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:21:22 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:21:22 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance('database')
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:21:24 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:21:24 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance('database')
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:26:48 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\database.php [ 78 ]
2017-04-04 18:26:48 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\Kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-04 18:26:59 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:26:59 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:27:18 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:27:18 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:29:15 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:29:15 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:29:34 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:29:34 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:30:25 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:30:25 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:30:26 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:30:26 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:30:27 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:30:27 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\main.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Main->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Main))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:35:30 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
2017-04-04 18:35:30 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\session.php [ 325 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(125): Kohana_Session->read(NULL)
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Session\database.php(74): Kohana_Session->__construct(Array, NULL)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php(10): Kohana_Session::instance()
#4 [internal function]: Controller_Admins_Authorization->before()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admins_Authorization))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-04-04 18:42:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Admins\authorization.php [ 27 ]
2017-04-04 18:42:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Admins\authorization.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-04 18:42:43 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Admins_Authorization::getHash(), called in C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php on line 27 and defined ~ APPPATH\classes\Controller\Admins\authorization.php [ 38 ]
2017-04-04 18:42:43 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Admins_Authorization::getHash(), called in C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php on line 27 and defined ~ APPPATH\classes\Controller\Admins\authorization.php [ 38 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php(38): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\authorization.php(27): Controller_Admins_Authorization->getHash('reiter')
#2 [internal function]: Controller_Admins_Authorization->action_login()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_Authorization))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-04-04 19:20:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\main.php [ 20 ]
2017-04-04 19:20:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Admins\main.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-04 20:08:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/songs/Nikolay_Trubach_-_Gitarist_muzofon.com.mp3 ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2017-04-04 20:08:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/songs/Nikolay_Trubach_-_Gitarist_muzofon.com.mp3 ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#1 {main}