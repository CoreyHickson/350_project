<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-21 02:09:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:10:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/Api.php [ 3 ] in file:line
2016-03-21 02:10:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-03-21 02:13:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Model/CharacterModel.php [ 84 ] in /opt/lampp/htdocs/application/classes/Model/CharacterModel.php:84
2016-03-21 02:13:14 --- DEBUG: #0 /opt/lampp/htdocs/application/classes/Model/CharacterModel.php(84): Kohana_Core::error_handler(8, 'Undefined index...', '/opt/lampp/htdo...', 84, Array)
#1 /opt/lampp/htdocs/application/classes/Controller/Api.php(46): Model_CharacterModel->update(Array)
#2 /opt/lampp/htdocs/system/classes/Kohana/Controller.php(84): Controller_Api->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /opt/lampp/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/application/classes/Model/CharacterModel.php:84
2016-03-21 02:13:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete character model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /opt/lampp/htdocs/application/classes/Model/CharacterModel.php:106
2016-03-21 02:13:36 --- DEBUG: #0 /opt/lampp/htdocs/application/classes/Model/CharacterModel.php(106): Kohana_ORM->delete()
#1 /opt/lampp/htdocs/application/classes/Controller/Api.php(60): Model_CharacterModel->delete(Array)
#2 /opt/lampp/htdocs/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 /opt/lampp/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /opt/lampp/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /opt/lampp/htdocs/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /opt/lampp/htdocs/index.php(118): Kohana_Request->execute()
#8 {main} in /opt/lampp/htdocs/application/classes/Model/CharacterModel.php:106