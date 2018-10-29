<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-02-19 19:11:05 --- ERROR: ErrorException [ 4096 ]: Object of class PDO could not be converted to string ~ APPPATH\classes\Model\linadb.php [ 16 ]
2017-02-19 19:11:05 --- STRACE: ErrorException [ 4096 ]: Object of class PDO could not be converted to string ~ APPPATH\classes\Model\linadb.php [ 16 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Model\linadb.php(16): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\\xampp\\htdocs...', 16, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\glavnaya.php(10): Model_Linadb->selInform(3)
#2 [internal function]: Controller_Glavnaya->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Glavnaya))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-02-19 19:12:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method PDOStatement::query() ~ APPPATH\classes\Model\linadb.php [ 16 ]
2017-02-19 19:12:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method PDOStatement::query() ~ APPPATH\classes\Model\linadb.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}