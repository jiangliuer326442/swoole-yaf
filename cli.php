<?php

define('APPLICATION_PATH', dirname(__FILE__));

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

Yaf_Dispatcher::getInstance()->autoRender(FALSE);

$application->bootstrap()->getDispatcher()->dispatch(new Yaf_Request_Simple());
?>
