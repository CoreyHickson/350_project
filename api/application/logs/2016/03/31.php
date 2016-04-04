<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-31 23:24:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Api.php [ 57 ] in C:\xampp\htdocs\api\application\classes\Controller\Api.php:57
2016-03-31 23:24:08 --- DEBUG: #0 C:\xampp\htdocs\api\application\classes\Controller\Api.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\api\system\classes\Kohana\Controller.php(84): Controller_Api->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\api\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\xampp\htdocs\api\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\api\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\api\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\api\application\classes\Controller\Api.php:57