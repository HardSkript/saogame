<?php

require_once 'setup.php';

header('Content-Type: text/html; charset=UTF-8');
require_once dirname(__FILE__).'/Lib/framework/yii.php';
Yii::createWebApplication(dirname(__FILE__).'/protected/config/main.php')->run();