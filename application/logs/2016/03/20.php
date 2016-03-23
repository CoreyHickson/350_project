<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-20 18:21:49 --- CRITICAL: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH\classes\Kohana\View.php [ 355 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:236
2016-03-20 18:21:49 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(236): Kohana_View->render()
#1 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#2 C:\xampp\htdocs\application\classes\Controller\api.php(17): Kohana_Response->body(Object(View))
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:236
2016-03-20 18:32:39 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:32:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 18:33:04 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:33:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 18:33:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 18:33:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 18:33:42 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:33:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 18:54:28 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:54:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 18:56:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:56:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 18:56:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 18:56:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:01:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Rest' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:01:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:07:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:07:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:06 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:22 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:22 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:26 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:26 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:08:26 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:08:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:15:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:15:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:15:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:15:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:15:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:15:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:15:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH\classes\Controller\api.php [ 3 ] in file:line
2016-03-20 19:15:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:23 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:24 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:24 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:23:24 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:38:08 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:38:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:38:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:38:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:38:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:38:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:38:50 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:38:50 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:38:50 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 19:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 19:52:33 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 35 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 19:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^api/users(?:/...', 'api.php', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 20:08:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\api.php [ 39 ] in C:\xampp\htdocs\application\classes\Controller\api.php:39
2016-03-20 20:08:22 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\api.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 39, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Controller\api.php:39
2016-03-20 20:11:07 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:11:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:13:43 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:13:43 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:13:43 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:13:43 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:13:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:14:07 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:14:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:14:33 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:14:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:16:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:16:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:16:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:16:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:16:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:16:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:16:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:16:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:19:15 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:19:15 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:19:15 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:22:29 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:22:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:22:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:22:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:22:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:22:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:22:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:22:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:22:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:22:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:24 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:25 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:31 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:32 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:32 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:23:32 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:24:16 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:24:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:24:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:24:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:24:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:24:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:51 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:29:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:29:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:32:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:32:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:32:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:32:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:32:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:32:54 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:32:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:33:39 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:33:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:33:39 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:33:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:33:39 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:33:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:34:14 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:34:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:34:14 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:34:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:34:14 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:34:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:34:48 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:34:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:34:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:34:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:36:01 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:36:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:36:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:36:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:36:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:36:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:36:44 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:36:44 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:36:44 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:36:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:36:45 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:36:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:37:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:37:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:37:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:37:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:37:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:37:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:37:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:37:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:38:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:38:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:38:18 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:38:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:38:18 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:38:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:38:37 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:38:38 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:38:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:41:04 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:41:04 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:41:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:41:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:42:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:42:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:42:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:42:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:42:21 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:42:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:42:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:42:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:42:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:43:56 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:43:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:43:57 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:43:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:45:33 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:45:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:45:34 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:45:34 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:45:34 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:45:34 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:41 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:42 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:42 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:42 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:51 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:51 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:48:52 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:48:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:49:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:49:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:49:03 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:49:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:49:46 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:49:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:54:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:54:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:54:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:54:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:58:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:58:50 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:58:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 20:58:50 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 20:58:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:00:47 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:00:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:00:48 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:00:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:00:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:00:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:00:49 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:00:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:01:00 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:01:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:01:00 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:01:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:06:15 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_CharacterModel::$response ~ APPPATH\classes\Model\CharacterModel.php [ 8 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:8
2016-03-20 21:06:15 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#2 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:8
2016-03-20 21:06:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_CharacterModel::$response ~ APPPATH\classes\Model\CharacterModel.php [ 8 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:8
2016-03-20 21:06:47 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#2 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:8
2016-03-20 21:06:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_CharacterModel::$response ~ APPPATH\classes\Model\CharacterModel.php [ 8 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:8
2016-03-20 21:06:48 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#2 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:8
2016-03-20 21:07:04 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:07:04 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:08:20 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:08:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:08:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:08:27 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:08:39 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::factory(), called in C:\xampp\htdocs\application\classes\Model\CharacterModel.php on line 7 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 41 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:41
2016-03-20 21:08:39 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(41): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory()
#2 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:41
2016-03-20 21:08:47 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:08:47 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:09:22 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:10:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:10:03 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:10:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:10:16 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:10:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:10:16 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:10:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:10:16 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:11:31 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:11:31 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:11:32 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:11:32 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:26 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:26 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:26 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:27 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:27 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:27 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:28 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:21:28 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:22:09 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:22:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:22:11 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:22:11 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:22:11 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 21:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 21:22:20 --- CRITICAL: Database_Exception [ 2019 ]: Invalid characterset or character set not supported ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 147 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:84
2016-03-20 21:22:20 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(84): Kohana_Database_MySQLi->set_charset('latin1_swedish_...')
#1 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(154): Kohana_Database_MySQLi->connect()
#2 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#9 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#10 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#11 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#14 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#17 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:84
2016-03-20 21:22:30 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:22:30 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:16 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:17 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:17 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:17 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:17 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:18 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:23:18 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:28 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:29 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:29 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:29 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:29 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:30 --- CRITICAL: Database_Exception [ 1146 ]: Table 'dnd.characterscharacters' doesn't exist [ SHOW FULL COLUMNS FROM `characterscharacters` ] ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 171 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:25:30 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('`characterschar...')
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(7): Kohana_ORM::factory('Model_Character')
#7 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\MySQLi.php:337
2016-03-20 21:30:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: member ~ APPPATH\classes\Model\CharacterModel.php [ 13 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:13
2016-03-20 21:30:19 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(40): Model_CharacterModel->get(NULL)
#2 C:\xampp\htdocs\application\classes\Controller\api.php(25): Controller_api->get_all()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:13
2016-03-20 22:23:59 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_api::$_rest ~ APPPATH\classes\Controller\api.php [ 34 ] in C:\xampp\htdocs\application\classes\Controller\api.php:34
2016-03-20 22:23:59 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\api.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\api.php:34
2016-03-20 22:25:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_api::$_rest ~ APPPATH\classes\Controller\api.php [ 34 ] in C:\xampp\htdocs\application\classes\Controller\api.php:34
2016-03-20 22:25:44 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\api.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 34, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\api.php:34
2016-03-20 22:34:44 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:34:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<id>[^/...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:35:47 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 243 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:35:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:/(?P<contr...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:39:07 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 243 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:/(?P<contr...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:39:24 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 243 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:39:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:/(?P<contr...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:39:45 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 243 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:39:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:/(?P<contr...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:42:25 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:42:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<contro...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:42:29 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:42:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<contro...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:42:37 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<contro...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:42:58 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 22:42:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 22:45:36 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:45:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<contro...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:45:54 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:45:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<contro...', 'api/characters/...', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:45:58 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:45:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<contro...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:46:10 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 22:46:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 22:46:11 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 22:46:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 22:46:57 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 242 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2016-03-20 22:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\\xampp\\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^(?:(?P<contro...', 'api/characters', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(472): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2016-03-20 22:47:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_api::$_rest ~ APPPATH\classes\Controller\api.php [ 57 ] in C:\xampp\htdocs\application\classes\Controller\api.php:57
2016-03-20 22:47:04 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\api.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\api.php:57
2016-03-20 22:48:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_api::$model ~ APPPATH\classes\Controller\api.php [ 57 ] in C:\xampp\htdocs\application\classes\Controller\api.php:57
2016-03-20 22:48:05 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\api.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\api.php:57
2016-03-20 22:48:57 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_CharacterModel::$response ~ APPPATH\classes\Model\CharacterModel.php [ 81 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:81
2016-03-20 22:48:57 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(81): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 81, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(57): Model_CharacterModel->update(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:81
2016-03-20 22:49:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\CharacterModel.php [ 81 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:81
2016-03-20 22:49:11 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(81): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 81, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(57): Model_CharacterModel->update(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:81
2016-03-20 22:49:50 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 22:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 22:53:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Model\CharacterModel.php [ 82 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:82
2016-03-20 22:53:57 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(57): Model_CharacterModel->update(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:82
2016-03-20 22:54:13 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Model\CharacterModel.php [ 86 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:86
2016-03-20 22:54:13 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(86): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\\xampp\\htdocs...', 86, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(57): Model_CharacterModel->update(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:86
2016-03-20 22:54:37 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 22:54:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 22:55:35 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 22:55:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 22:57:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 22:57:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:00:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\CharacterModel.php [ 105 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:105
2016-03-20 23:00:41 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(105): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 105, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(58): Model_CharacterModel->delete(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:105
2016-03-20 23:01:36 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:01:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:05:02 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:05:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:05:27 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:05:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:05:40 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:05:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:05:53 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:07:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:07:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:07:10 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:07:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:07:59 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:07:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:17:17 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:17:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:17:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: params ~ APPPATH\classes\Controller\api.php [ 57 ] in C:\xampp\htdocs\application\classes\Controller\api.php:57
2016-03-20 23:17:51 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\api.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\api.php:57
2016-03-20 23:18:05 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:18:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:18:11 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:18:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:18:19 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:18:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:18:36 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Response.php [ 160 ] in C:\xampp\htdocs\system\classes\Kohana\Response.php:160
2016-03-20 23:18:36 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\xampp\\htdocs...', 160, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(57): Kohana_Response->body(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\system\classes\Kohana\Response.php:160
2016-03-20 23:19:30 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:20:06 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:20:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:20:28 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:20:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:20:31 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of ParseError given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(ParseError))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:20:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:22:13 --- CRITICAL: ErrorException [ 1 ]: Uncaught TypeError: Argument 1 passed to Kohana_Kohana_Exception::handler() must be an instance of Exception, instance of Error given in C:\xampp\htdocs\system\classes\Kohana\Kohana\Exception.php:84
Stack trace:
#0 [internal function]: Kohana_Kohana_Exception::handler(Object(Error))
#1 {main}
  thrown ~ SYSPATH\classes\Kohana\Kohana\Exception.php [ 84 ] in file:line
2016-03-20 23:22:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-20 23:26:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Model\CharacterModel.php [ 81 ] in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:81
2016-03-20 23:26:56 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\CharacterModel.php(81): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 81, Array)
#1 C:\xampp\htdocs\application\classes\Controller\api.php(46): Model_CharacterModel->update(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_api->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_api))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\CharacterModel.php:81