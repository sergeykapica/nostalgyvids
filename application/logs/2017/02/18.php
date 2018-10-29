<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-02-18 20:25:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\Controller\glavnaya.php [ 10 ]
2017-02-18 20:25:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\classes\Controller\glavnaya.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 20:25:56 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\mysql.php [ 67 ]
2017-02-18 20:25:56 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\linareiter.com\modules\database\classes\Kohana\Database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT i.id, i....', false, Array)
#2 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(13): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#4 [internal function]: Controller_Glavnaya->action_index()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-02-18 20:42:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
2017-02-18 20:42:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 20:44:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
2017-02-18 20:44:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 20:45:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
2017-02-18 20:45:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 20:46:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
2017-02-18 20:46:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 20:46:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
2017-02-18 20:46:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 20:46:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
2017-02-18 20:46:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'new' (T_NEW) ~ APPPATH\classes\Model\linadb.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 20:48:06 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects parameter 4 to be array, string given ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 20:48:06 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects parameter 4 to be array, string given ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('localhost', 'admin', 'root', 'linareiter')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#4 [internal function]: Controller_Glavnaya->action_index()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-02-18 20:48:42 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects parameter 4 to be array, string given ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 20:48:42 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects parameter 4 to be array, string given ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('localhost', 'admin', 'root', 'linareiter')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#4 [internal function]: Controller_Glavnaya->action_index()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-02-18 20:50:01 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 11 ]
2017-02-18 20:50:01 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 11 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(11): PDO->__construct(Array)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#4 [internal function]: Controller_Glavnaya->action_index()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-02-18 20:50:42 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects at least 1 parameter, 0 given ~ APPPATH\classes\Model\linadb.php [ 11 ]
2017-02-18 20:50:42 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects at least 1 parameter, 0 given ~ APPPATH\classes\Model\linadb.php [ 11 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(11): PDO->__construct()
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#4 [internal function]: Controller_Glavnaya->action_index()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-02-18 20:52:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
2017-02-18 20:52:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 20:52:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
2017-02-18 20:52:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 20:53:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
2017-02-18 20:53:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 20:53:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
2017-02-18 20:53:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 19 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 20:56:41 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 11 ]
2017-02-18 20:56:41 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 11 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(11): PDO->__construct(Array)
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#3 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#4 [internal function]: Controller_Glavnaya->action_index()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#9 {main}
2017-02-18 20:57:23 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 16 ]
2017-02-18 20:57:23 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 16 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(16): PDO->__construct(Array)
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 20:57:42 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 12 ]
2017-02-18 20:57:42 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 12 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(12): PDO->__construct(Array)
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 20:57:46 --- ERROR: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 12 ]
2017-02-18 20:57:46 --- STRACE: ErrorException [ 2 ]: PDO::__construct() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\linadb.php [ 12 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDO::__construc...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(12): PDO->__construct(Array)
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:00:52 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'admin'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:00:52 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'admin'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'admin', 'root')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:01:20 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'admin'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:01:20 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'admin'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'admin', 'YES')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:01:38 --- ERROR: PDOException [ 1044 ]: SQLSTATE[HY000] [1044] Access denied for user ''@'localhost' to database 'linareiter' ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:01:38 --- STRACE: PDOException [ 1044 ]: SQLSTATE[HY000] [1044] Access denied for user ''@'localhost' to database 'linareiter' ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:04:14 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:04:14 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'root', 'root')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:06:08 --- ERROR: PDOException [ 1044 ]: SQLSTATE[HY000] [1044] Access denied for user ''@'localhost' to database 'linareiter' ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:06:08 --- STRACE: PDOException [ 1044 ]: SQLSTATE[HY000] [1044] Access denied for user ''@'localhost' to database 'linareiter' ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'root@localhost')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:06:45 --- ERROR: PDOException [ 1044 ]: SQLSTATE[HY000] [1044] Access denied for user ''@'localhost' to database 'linareiter' ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:06:45 --- STRACE: PDOException [ 1044 ]: SQLSTATE[HY000] [1044] Access denied for user ''@'localhost' to database 'linareiter' ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=127....', 'root@localhost')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:09:36 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:09:36 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'root', 'root')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:09:47 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:09:47 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'root', 'root')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:09:50 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:09:50 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'root', 'root')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:13:45 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
2017-02-18 21:13:45 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 10 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(10): PDO->__construct('mysql:host=loca...', 'root', 'root')
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\model.php(26): Model_Linadb->__construct()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Kohana_Model::factory('Linadb')
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:16:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 17 ]
2017-02-18 21:16:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 17 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 21:16:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 17 ]
2017-02-18 21:16:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 17 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 21:17:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 17 ]
2017-02-18 21:17:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: _pdo ~ APPPATH\classes\Model\linadb.php [ 17 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 21:18:13 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute() expects parameter 1 to be array, integer given ~ APPPATH\classes\Model\linadb.php [ 17 ]
2017-02-18 21:18:13 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute() expects parameter 1 to be array, integer given ~ APPPATH\classes\Model\linadb.php [ 17 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', 'C:\\xampp\\htdocs...', 17, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(17): PDOStatement->execute(3)
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:19:12 --- ERROR: ErrorException [ 2 ]: Cannot use a scalar value as an array ~ APPPATH\classes\Model\linadb.php [ 12 ]
2017-02-18 21:19:12 --- STRACE: ErrorException [ 2 ]: Cannot use a scalar value as an array ~ APPPATH\classes\Model\linadb.php [ 12 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(12): Kohana_Core::error_handler(2, 'Cannot use a sc...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 21:27:58 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ APPPATH\classes\Model\linadb.php [ 19 ]
2017-02-18 21:27:58 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ APPPATH\classes\Model\linadb.php [ 19 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(19): PDOStatement->execute()
#2 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#3 [internal function]: Controller_Glavnaya->action_index()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#8 {main}
2017-02-18 21:39:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method PDOStatement::query() ~ APPPATH\classes\Model\linadb.php [ 18 ]
2017-02-18 21:39:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method PDOStatement::query() ~ APPPATH\classes\Model\linadb.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 21:40:11 --- ERROR: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 13 ]
2017-02-18 21:40:11 --- STRACE: PDOException [ 1045 ]: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ APPPATH\classes\Model\linadb.php [ 13 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(13): PDO->__construct('mysql:host=127....', 'root', 'root')
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 21:42:56 --- ERROR: ErrorException [ 1 ]: Call to a member function fetch() on boolean ~ APPPATH\classes\Model\linadb.php [ 19 ]
2017-02-18 21:42:56 --- STRACE: ErrorException [ 1 ]: Call to a member function fetch() on boolean ~ APPPATH\classes\Model\linadb.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 21:43:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\Model\linadb.php [ 21 ]
2017-02-18 21:43:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH\classes\Model\linadb.php [ 21 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-18 21:45:17 --- ERROR: ErrorException [ 1 ]: Call to undefined function fetch() ~ APPPATH\classes\Model\linadb.php [ 17 ]
2017-02-18 21:45:17 --- STRACE: ErrorException [ 1 ]: Call to undefined function fetch() ~ APPPATH\classes\Model\linadb.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-02-18 21:45:25 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 21:45:25 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 21:47:34 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 21:47:34 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 21:48:15 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 21:48:15 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 21:52:02 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 21:52:02 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'id' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 22:01:08 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 22:01:08 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 22:04:43 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 22:04:43 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 22:05:36 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 22:05:36 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 1 ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(8, 'Uninitialized s...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 22:05:45 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 22:05:45 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}
2017-02-18 22:07:16 --- ERROR: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
2017-02-18 22:07:16 --- STRACE: ErrorException [ 2 ]: Illegal string offset 'inform' ~ APPPATH\views\pages\glavnaya.php [ 9 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\pages\glavnaya.php(9): Kohana_Core::error_handler(2, 'Illegal string ...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Glavnaya->action_index()
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#11 {main}