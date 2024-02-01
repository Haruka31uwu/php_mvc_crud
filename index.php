<?php
require_once('config.php');
require_once('controller/index.php');
if(isset($_GET['m'])):
    if(method_exists('modeloController', $_GET['m'])):
        call_user_func(array('modeloController', $_GET['m']));
    endif;
else:
    modeloController::index();
endif;
