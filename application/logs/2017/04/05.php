<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-05 20:41:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: nom ~ APPPATH\views\admins\editor.php [ 339 ]
2017-04-05 20:41:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: nom ~ APPPATH\views\admins\editor.php [ 339 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\admins\editor.php(339): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 339, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\application\views\admins\insertToDB.php(7): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\insertToDB.php(37): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admins_InsertToDB->action_index()
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_InsertToDB))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#15 {main}
2017-04-05 20:42:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: nom ~ APPPATH\views\admins\editor.php [ 339 ]
2017-04-05 20:42:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: nom ~ APPPATH\views\admins\editor.php [ 339 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\views\admins\editor.php(339): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 339, Array)
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\linareiter.com\application\views\admins\insertToDB.php(7): Kohana_View->__toString()
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(343): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\view.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\insertToDB.php(37): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admins_InsertToDB->action_index()
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_InsertToDB))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#15 {main}
2017-04-05 20:43:42 --- ERROR: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Admins\insertToDB.php [ 36 ]
2017-04-05 20:43:42 --- STRACE: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Admins\insertToDB.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 21:43:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admins\updatePass.php [ 18 ]
2017-04-05 21:43:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Admins\updatePass.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 21:44:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
2017-04-05 21:44:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 21:46:14 --- ERROR: ErrorException [ 8 ]: Undefined index: acceptemail ~ APPPATH\classes\Controller\Admins\updatePass.php [ 13 ]
2017-04-05 21:46:14 --- STRACE: ErrorException [ 8 ]: Undefined index: acceptemail ~ APPPATH\classes\Controller\Admins\updatePass.php [ 13 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 [internal function]: Controller_Admins_UpdatePass->action_index()
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#6 {main}
2017-04-05 21:47:05 --- ERROR: ErrorException [ 8 ]: Undefined index: acceptemail ~ APPPATH\classes\Controller\Admins\updatePass.php [ 13 ]
2017-04-05 21:47:05 --- STRACE: ErrorException [ 8 ]: Undefined index: acceptemail ~ APPPATH\classes\Controller\Admins\updatePass.php [ 13 ]
--
#0 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 13, Array)
#1 [internal function]: Controller_Admins_UpdatePass->action_index()
#2 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#6 {main}
2017-04-05 21:48:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
2017-04-05 21:48:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 21:51:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
2017-04-05 21:51:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 21:52:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 25 ]
2017-04-05 21:52:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Admins\updatePass.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:02:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
2017-04-05 22:02:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:03:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
2017-04-05 22:03:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:04:31 --- ERROR: ErrorException [ 2 ]: mail(): &quot;sendmail_from&quot; not set in php.ini or custom &quot;From:&quot; header missing ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
2017-04-05 22:04:31 --- STRACE: ErrorException [ 2 ]: mail(): &quot;sendmail_from&quot; not set in php.ini or custom &quot;From:&quot; header missing ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mail(): &quot;s...', 'C:\\xampp\\htdocs...', 20, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(20): mail('linareiter@yand...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...')
#2 [internal function]: Controller_Admins_UpdatePass->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-04-05 22:06:17 --- ERROR: ErrorException [ 2 ]: mail(): &quot;sendmail_from&quot; not set in php.ini or custom &quot;From:&quot; header missing ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
2017-04-05 22:06:17 --- STRACE: ErrorException [ 2 ]: mail(): &quot;sendmail_from&quot; not set in php.ini or custom &quot;From:&quot; header missing ~ APPPATH\classes\Controller\Admins\updatePass.php [ 20 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mail(): &quot;s...', 'C:\\xampp\\htdocs...', 20, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(20): mail('linareiter@yand...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...')
#2 [internal function]: Controller_Admins_UpdatePass->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-04-05 22:14:37 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [linareiter.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ]
2017-04-05 22:14:37 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [linareiter.com] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('linareiter.com')
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(134): Swift_Mime_SimpleMessage->setFrom('linareiter.com')
#6 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter.com', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#7 [internal function]: Controller_Admins_UpdatePass->action_index()
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#12 {main}
2017-04-05 22:15:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Swift_Transport_StreamBuffer::$_sequence ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 221 ]
2017-04-05 22:15:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Swift_Transport_StreamBuffer::$_sequence ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 221 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(221): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 221, Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\ByteStream\AbstractFilterableInputStream.php(178): Swift_Transport_StreamBuffer->_commit('EHLO [::1]\r\n')
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\ByteStream\AbstractFilterableInputStream.php(94): Swift_ByteStream_AbstractFilterableInputStream->_doWrite('EHLO [::1]\r\n')
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(294): Swift_ByteStream_AbstractFilterableInputStream->write('EHLO [::1]\r\n')
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('EHLO [::1]\r\n', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(251): Swift_Transport_EsmtpTransport->executeCommand('EHLO [::1]\r\n', Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#7 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#8 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#9 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#10 [internal function]: Controller_Admins_UpdatePass->action_index()
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#15 {main}
2017-04-05 22:17:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Swift_Transport_StreamBuffer::$_sequence ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 221 ]
2017-04-05 22:17:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Swift_Transport_StreamBuffer::$_sequence ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 221 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(221): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 221, Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\ByteStream\AbstractFilterableInputStream.php(178): Swift_Transport_StreamBuffer->_commit('EHLO [::1]\r\n')
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\ByteStream\AbstractFilterableInputStream.php(94): Swift_ByteStream_AbstractFilterableInputStream->_doWrite('EHLO [::1]\r\n')
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(294): Swift_ByteStream_AbstractFilterableInputStream->write('EHLO [::1]\r\n')
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('EHLO [::1]\r\n', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(251): Swift_Transport_EsmtpTransport->executeCommand('EHLO [::1]\r\n', Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#7 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#8 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#9 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...')
#10 [internal function]: Controller_Admins_UpdatePass->action_index()
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#15 {main}
2017-04-05 22:22:52 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 22:22:52 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#9 [internal function]: Controller_Admins_UpdatePass->action_index()
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#14 {main}
2017-04-05 22:26:09 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 22:26:09 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#9 [internal function]: Controller_Admins_UpdatePass->action_index()
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#14 {main}
2017-04-05 22:33:20 --- ERROR: ErrorException [ 2 ]: mail(): &quot;sendmail_from&quot; not set in php.ini or custom &quot;From:&quot; header missing ~ APPPATH\classes\Controller\Admins\updatePass.php [ 21 ]
2017-04-05 22:33:20 --- STRACE: ErrorException [ 2 ]: mail(): &quot;sendmail_from&quot; not set in php.ini or custom &quot;From:&quot; header missing ~ APPPATH\classes\Controller\Admins\updatePass.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mail(): &quot;s...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(21): mail('linareiter@yand...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...')
#2 [internal function]: Controller_Admins_UpdatePass->action_index()
#3 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#4 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#7 {main}
2017-04-05 22:39:08 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
2017-04-05 22:39:08 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:39:49 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
2017-04-05 22:39:49 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:40:10 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
2017-04-05 22:40:10 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:40:11 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
2017-04-05 22:40:11 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:40:11 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
2017-04-05 22:40:11 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:45:42 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
2017-04-05 22:45:42 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\Kohana\core.php [ 955 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2017-04-05 22:50:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
2017-04-05 22:50:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL a was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#3 {main}
2017-04-05 22:52:17 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 22:52:17 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#9 [internal function]: Controller_Admins_UpdatePass->action_index()
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#14 {main}
2017-04-05 22:53:01 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 22:53:01 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#9 [internal function]: Controller_Admins_UpdatePass->action_index()
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#14 {main}
2017-04-05 22:54:01 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 22:54:01 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#9 [internal function]: Controller_Admins_UpdatePass->action_index()
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#14 {main}
2017-04-05 22:56:46 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError c5sm3918967lfk.51 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 22:56:46 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError c5sm3918967lfk.51 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <lin...', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <lin...', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('linareiter@lina...')
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#9 [internal function]: Controller_Admins_UpdatePass->action_index()
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#14 {main}
2017-04-05 23:01:26 --- ERROR: ErrorException [ 2 ]: fsockopen(): php_network_getaddresses: getaddrinfo failed: ���� - ��� �������� �����, �������� �� ���� �������� ����� ����, � ������, ��� ������� ������ �� ������ ������ �� ����������� �������.  ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2017-04-05 23:01:26 --- STRACE: ErrorException [ 2 ]: fsockopen(): php_network_getaddresses: getaddrinfo failed: ���� - ��� �������� �����, �������� �� ���� �������� ����� ����, � ������, ��� ������� ������ �� ������ ������ �� ����������� �������.  ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): ph...', 'C:\\xampp\\htdocs...', 243, Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.mail...', 465, 0, 'php_network_get...', 5)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#7 [internal function]: Controller_Admins_UpdatePass->action_index()
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#12 {main}
2017-04-05 23:02:09 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 23:02:09 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('HELO [::1]\r\n', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(317): Swift_Transport_EsmtpTransport->executeCommand('HELO [::1]\r\n', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(261): Swift_Transport_AbstractSmtpTransport->_doHeloCommand()
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(118): Swift_Transport_EsmtpTransport->_doHeloCommand()
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#6 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#7 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#8 [internal function]: Controller_Admins_UpdatePass->action_index()
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#13 {main}
2017-04-05 23:04:47 --- ERROR: ErrorException [ 2 ]: fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2017-04-05 23:04:47 --- STRACE: ErrorException [ 2 ]: fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): SS...', 'C:\\xampp\\htdocs...', 243, Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 587, 0, '', 5)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#7 [internal function]: Controller_Admins_UpdatePass->action_index()
#8 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#9 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#12 {main}
2017-04-05 23:05:49 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError 3sm3869972ljj.16 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2017-04-05 23:05:49 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1  https://support.google.com/mail/?p=WantAuthError 3sm3869972ljj.16 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <lin...', Array, Array)
#2 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <lin...', Array)
#3 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('linareiter@lina...')
#4 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#5 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'linareiter@lina...', Array, Array)
#6 C:\xampp\htdocs\linareiter.com\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\linareiter.com\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\linareiter.com\application\classes\Controller\Admins\updatePass.php(23): Email::send('linareiter@yand...', 'linareiter@lina...', '\xD0\xA1\xD0\xBC\xD0\xB5\xD0\xBD\xD0\xB0 \xD0\xBF\xD0\xB0...', '\xD0\x9B\xD0\xB8\xD0\xBD\xD0\xB0, \xD1\x82\xD0\xB2\xD0...', false)
#9 [internal function]: Controller_Admins_UpdatePass->action_index()
#10 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admins_UpdatePass))
#11 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\linareiter.com\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\linareiter.com\index.php(109): Kohana_Request->execute()
#14 {main}