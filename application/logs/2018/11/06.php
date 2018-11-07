<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2018-11-06 00:43:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_nostalgyvidsDB' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2018-11-06 00:43:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 00:44:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_nostalgyvidsDB' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2018-11-06 00:44:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 00:44:34 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_nostalgyvidsDB' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2018-11-06 00:44:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 00:45:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\classes\Model\NostalgyvidsDB.php [ 20 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Model\NostalgyvidsDB.php:20
2018-11-06 00:45:58 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Model\NostalgyvidsDB.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 20, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(107): Model_NostalgyvidsDB->selectUsersList()
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_checkLogin()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Model\NostalgyvidsDB.php:20
2018-11-06 01:32:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\Controller\Clients.php [ 26 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 01:32:15 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 26, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 16:06:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\Controller\Clients.php [ 26 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 16:06:19 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 26, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 16:08:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\Controller\Clients.php [ 26 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 16:08:11 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 26, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 16:08:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\Controller\Clients.php [ 26 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 16:08:44 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 26, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:26
2018-11-06 16:53:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_email ~ APPPATH\classes\Controller\Clients.php [ 34 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:34
2018-11-06 16:53:55 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:34
2018-11-06 16:55:12 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH\views\letter.php [ 9 ] in file:line
2018-11-06 16:55:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 16:55:52 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.mailopost.ru/v1/email/messages): failed to open stream: HTTP request failed! HTTP/1.1 422 Unprocessable Entity
 ~ APPPATH\classes\Controller\Clients.php [ 89 ] in file:line
2018-11-06 16:55:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(89): file_get_contents('https://api.mai...', false, Resource id #81)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-11-06 16:56:07 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.mailopost.ru/v1/email/messages): failed to open stream: HTTP request failed! HTTP/1.1 422 Unprocessable Entity
 ~ APPPATH\classes\Controller\Clients.php [ 89 ] in file:line
2018-11-06 16:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(89): file_get_contents('https://api.mai...', false, Resource id #81)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-11-06 16:56:09 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.mailopost.ru/v1/email/messages): failed to open stream: HTTP request failed! HTTP/1.1 422 Unprocessable Entity
 ~ APPPATH\classes\Controller\Clients.php [ 89 ] in file:line
2018-11-06 16:56:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(89): file_get_contents('https://api.mai...', false, Resource id #81)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-11-06 16:56:17 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.mailopost.ru/v1/email/messages): failed to open stream: HTTP request failed! HTTP/1.1 422 Unprocessable Entity
 ~ APPPATH\classes\Controller\Clients.php [ 89 ] in file:line
2018-11-06 16:56:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(89): file_get_contents('https://api.mai...', false, Resource id #81)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-11-06 17:01:47 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.mailopost.ru/v1/email/messages): failed to open stream: HTTP request failed! HTTP/1.1 500 Internal Server Error
 ~ APPPATH\classes\Controller\Clients.php [ 89 ] in file:line
2018-11-06 17:01:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(89): file_get_contents('https://api.mai...', false, Resource id #81)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-11-06 17:01:57 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.mailopost.ru/v1/email/messages): failed to open stream: HTTP request failed! HTTP/1.1 500 Internal Server Error
 ~ APPPATH\classes\Controller\Clients.php [ 89 ] in file:line
2018-11-06 17:01:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(89): file_get_contents('https://api.mai...', false, Resource id #81)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-11-06 17:02:04 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.mailopost.ru/v1/email/messages): failed to open stream: HTTP request failed! HTTP/1.1 422 Unprocessable Entity
 ~ APPPATH\classes\Controller\Clients.php [ 89 ] in file:line
2018-11-06 17:02:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(89): file_get_contents('https://api.mai...', false, Resource id #81)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2018-11-06 17:08:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\Email.php [ 34 ] in file:line
2018-11-06 17:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 17:08:53 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [/nostalgyvids.com/] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2018-11-06 17:08:53 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('/nostalgyvids.c...')
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(134): Swift_Mime_SimpleMessage->setFrom('/nostalgyvids.c...')
#6 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('kermesovich1@gm...', '/nostalgyvids.c...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...')
#7 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#10 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2018-11-06 17:09:59 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [nostalgyvids.zzz.com.ua] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2018-11-06 17:09:59 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('nostalgyvids.zz...')
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(134): Swift_Mime_SimpleMessage->setFrom('nostalgyvids.zz...')
#6 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('kermesovich1@gm...', 'nostalgyvids.zz...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...')
#7 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#10 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2018-11-06 17:11:35 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError t144sm4500721lff.53 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:11:35 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <adm...', Array, Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <adm...', Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('admin@nostalgyv...')
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#6 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('kermesovich1@gm...', 'admin@nostalgyv...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...')
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#12 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:14:44 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError r4sm1595237lfe.60 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:14:44 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <adm...', Array, Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <adm...', Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('admin@nostalgyv...')
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#6 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('kermesovich1@gm...', 'admin@nostalgyv...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...')
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#12 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:14:56 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError 11sm1967151lfq.89 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:14:56 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <adm...', Array, Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <adm...', Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('admin@nostalgyv...')
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#6 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('kermesovich1@gm...', 'admin@nostalgyv...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...')
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#12 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:20:49 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError t81sm449860lfe.84 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:20:49 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <adm...', Array, Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <adm...', Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('admin@nostalgyv...')
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#6 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('kermesovich1@gm...', 'admin@nostalgyv...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...', true)
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#12 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:27:04 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError b17-v6sm4386073ljj.93 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:27:04 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <adm...', Array, Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <adm...', Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('admin@nostalgyv...')
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'admin@nostalgyv...', Array, Array)
#6 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('kermesovich1@gm...', 'admin@nostalgyv...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...', true)
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#12 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2018-11-06 17:36:09 --- CRITICAL: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [sfsfsfsffs] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ] in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2018-11-06 17:36:09 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('sfsfsfsffs')
#1 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderFactory.php(74): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleHeaderSet.php(87): Swift_Mime_SimpleHeaderFactory->createMailboxHeader('To', Array)
#5 C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(311): Swift_Mime_SimpleHeaderSet->addMailboxHeader('To', Array)
#6 C:\xampp\htdocs\nostalgyvids.com\modules\email\classes\Email.php(97): Swift_Mime_SimpleMessage->setTo('sfsfsfsffs')
#7 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(100): Email::send('sfsfsfsffs', 'admin@nostalgyv...', '\xD0\x9F\xD0\xB8\xD1\x81\xD1\x8C\xD0\xBC\xD0\xBE \xD0\xBE...', '<!DOCTYPE HTML>...', true)
#8 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_registerIn()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#11 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\nostalgyvids.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php:249
2018-11-06 19:37:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\Controller\Clients.php [ 121 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:121
2018-11-06 19:37:24 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(121): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 121, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_acceptCode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:121
2018-11-06 19:44:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:44:16 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:44:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:44:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:44:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:44:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:44:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:44:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:45:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:45:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:47:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Clients.php [ 31 ] in file:line
2018-11-06 19:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:42 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:54:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on null ~ APPPATH\classes\Controller\Handler.php [ 177 ] in file:line
2018-11-06 19:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:58:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\Controller\Clients.php [ 137 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:137
2018-11-06 19:58:19 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(137): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 137, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_acceptCode()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php:137
2018-11-06 19:58:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on null ~ APPPATH\classes\Controller\OtherFuncs.php [ 12 ] in file:line
2018-11-06 19:58:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 19:59:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function set() on null ~ APPPATH\classes\Controller\OtherFuncs.php [ 12 ] in file:line
2018-11-06 19:59:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2018-11-06 20:05:20 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host localhost. If you trust localhost, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\URL.php:144
2018-11-06 20:05:20 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, false)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('', true, false)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('')
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('', 302)
#4 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(154): Kohana_Controller::redirect()
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_acceptCode()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#8 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\URL.php:144
2018-11-06 20:08:33 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host localhost. If you trust localhost, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\URL.php:144
2018-11-06 20:08:33 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, false)
#1 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('', true, false)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('')
#3 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('', 302)
#4 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(154): Kohana_Controller::redirect()
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_acceptCode()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#8 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\URL.php:144
2018-11-06 20:11:30 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Model\NostalgyvidsDB.php [ 42 ] in C:\xampp\htdocs\nostalgyvids.com\application\classes\Model\NostalgyvidsDB.php:42
2018-11-06 20:11:30 --- DEBUG: #0 C:\xampp\htdocs\nostalgyvids.com\application\classes\Model\NostalgyvidsDB.php(42): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\nostalgyvids.com\application\classes\Controller\Clients.php(145): Model_NostalgyvidsDB->addUserToDB('gdgddgd', 'gdgddgd', 'gdgddgd', 'gdgddgd', 'kermesovich1@gm...', 'UA, Kharkiv', '/nostalgyvids.c...', 2130706433, 1541527872)
#2 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Controller.php(84): Controller_Clients->action_acceptCode()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#5 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\nostalgyvids.com\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\nostalgyvids.com\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\nostalgyvids.com\application\classes\Model\NostalgyvidsDB.php:42