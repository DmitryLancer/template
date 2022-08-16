<?php



//spl_autoload_register(function ($class_name) {
//    include $class_name . '.php';
//});


if(empty($_POST)) {
    include __DIR__ . 'controller/RegistrationController.php';
    $RegistrationController = new \controller\RegistrationControllerr();
    $RegistrationController->actionIndex();

}

