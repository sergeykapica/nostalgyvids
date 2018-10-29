<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-29 21:24:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-29 21:24:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
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
2014-12-29 21:24:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL email was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 111 ]
2014-12-29 21:24:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL email was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2014-12-29 21:24:56 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 x16sm25777702wia.15 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2014-12-29 21:24:56 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 x16sm25777702wia.15 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#9 [internal function]: Controller_Email->action_email()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2014-12-29 21:25:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL email/email was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 111 ]
2014-12-29 21:25:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL email/email was not found on this server. ~ SYSPATH\classes\Kohana\Request\Client\internal.php [ 111 ]
--
#0 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2014-12-29 21:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.php/email ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2014-12-29 21:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.php/email ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-12-29 21:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.php ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2014-12-29 21:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: email.php ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-12-29 21:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/email.php ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2014-12-29 21:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/email.php ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-12-29 21:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/email.php ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
2014-12-29 21:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: controller/email.php ~ SYSPATH\classes\Kohana\request.php [ 1152 ]
--
#0 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2014-12-29 21:28:18 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 o1sm6355869wjf.41 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2014-12-29 21:28:18 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 o1sm6355869wjf.41 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#9 [internal function]: Controller_Email->action_index()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2014-12-29 21:33:12 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 wv8sm51074290wjc.44 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2014-12-29 21:33:12 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 wv8sm51074290wjc.44 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#9 [internal function]: Controller_Email->action_index()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2014-12-29 21:33:32 --- ERROR: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2014-12-29 21:33:32 --- STRACE: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): SS...', 'C:\\xampp\\htdocs...', 243, Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://gmail.com', 465, 0, '', 5)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#7 [internal function]: Controller_Email->action_index()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2014-12-29 21:34:38 --- ERROR: ErrorException [ 2 ]: fsockopen():  ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2014-12-29 21:34:38 --- STRACE: ErrorException [ 2 ]: fsockopen():  ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): ', 'C:\\xampp\\htdocs...', 243, Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://stmp.ukr....', 465, 0, 'php_network_get...', 5)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#7 [internal function]: Controller_Email->action_index()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2014-12-29 21:42:13 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2014-12-29 21:42:13 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#9 [internal function]: Controller_Email->action_index()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2014-12-29 21:43:10 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2014-12-29 21:43:10 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#9 [internal function]: Controller_Email->action_index()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2014-12-29 21:44:06 --- ERROR: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2014-12-29 21:44:06 --- STRACE: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): SS...', 'C:\\xampp\\htdocs...', 243, Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.ukr....', 25, 0, '', 5)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'kohanaframework...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#7 [internal function]: Controller_Email->action_index()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2014-12-29 21:49:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
2014-12-29 21:49:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pages\show.php [ 4 ]
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
2014-12-29 21:49:32 --- ERROR: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2014-12-29 21:49:32 --- STRACE: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): SS...', 'C:\\xampp\\htdocs...', 243, Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.ukr....', 25, 0, '', 5)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'vosinedik@ukr.n...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#7 [internal function]: Controller_Email->action_index()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2014-12-29 21:51:10 --- ERROR: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2014-12-29 21:51:10 --- STRACE: ErrorException [ 2 ]: fsockopen(): SSL: crypto enabling timeout ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): SS...', 'C:\\xampp\\htdocs...', 243, Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.ukr....', 587, 0, '', 5)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'vosinedik@ukr.n...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\x94\xD0\xB0 \xD1\x82\xD1\x8B \xD1\x81\xD0\xB0\xD0...', false)
#7 [internal function]: Controller_Email->action_index()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2014-12-29 22:00:54 --- ERROR: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [Moiseyka] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ]
2014-12-29 22:00:54 --- STRACE: Swift_RfcComplianceException [ 0 ]: Address in mailbox given [Moiseyka] does not comply with RFC 2822, 3.6.2. ~ MODPATH\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php [ 319 ]
--
#0 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(249): Swift_Mime_Headers_MailboxHeader->_assertValidAddress('Moiseyka')
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(107): Swift_Mime_Headers_MailboxHeader->normalizeMailboxes(Array)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mime\Headers\MailboxHeader.php(71): Swift_Mime_Headers_MailboxHeader->setNameAddresses(Array)
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mime\SimpleMimeEntity.php(572): Swift_Mime_Headers_MailboxHeader->setFieldBodyModel(Array)
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mime\SimpleMessage.php(209): Swift_Mime_SimpleMimeEntity->_setHeaderFieldModel('From', Array)
#5 C:\xampp\htdocs\kohana\modules\email\classes\email.php(134): Swift_Mime_SimpleMessage->setFrom('Moiseyka')
#6 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'Moiseyka', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\xAF \xD0\xA4\xD0\xA3\xD0\xA2\xD0\x91\xD0\x9E\xD0\x9B...', false)
#7 [internal function]: Controller_Email->action_index()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2014-12-29 22:01:11 --- ERROR: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
2014-12-29 22:01:11 --- STRACE: Swift_TransportException [ 0 ]: Expected response code 250 but got code "", with message "" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ]
--
#0 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('', Array)
#1 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('RSET\r\n', Array, Array)
#2 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(267): Swift_Transport_EsmtpTransport->executeCommand('RSET\r\n', Array)
#3 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(472): Swift_Transport_AbstractSmtpTransport->reset()
#4 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'Moiseyka@ukr.ne...', Array, Array)
#5 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'Moiseyka@ukr.ne...', Array, Array)
#6 C:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 C:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 C:\xampp\htdocs\kohana\application\classes\Controller\email.php(16): Email::send('vosinedik@ukr.n...', 'Moiseyka@ukr.ne...', '\xD0\xA2\xD1\x8B \xD0\x92\xD1\x83\xD0\xB0\xD1\x81\xD1\x8F...', '\xD0\xAF \xD0\xA4\xD0\xA3\xD0\xA2\xD0\x91\xD0\x9E\xD0\x9B...', false)
#9 [internal function]: Controller_Email->action_index()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Email))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\request.php(1164): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}