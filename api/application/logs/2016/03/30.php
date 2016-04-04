<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-30 21:35:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Model\CharacterModel.php [ 60 ] in C:\xampp\htdocs\api\application\classes\Model\CharacterModel.php:60
2016-03-30 21:35:06 --- DEBUG: #0 C:\xampp\htdocs\api\application\classes\Model\CharacterModel.php(60): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 60, Array)
#1 C:\xampp\htdocs\api\application\classes\Controller\Api.php(34): Model_CharacterModel->create(Array)
#2 C:\xampp\htdocs\api\system\classes\Kohana\Controller.php(84): Controller_Api->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\api\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 C:\xampp\htdocs\api\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\api\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\api\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\api\application\classes\Model\CharacterModel.php:60