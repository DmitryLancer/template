<?php



spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


if(empty($_POST)) {
    include_once __DIR__ . 'controller/RegistrationController.php';
    $RegistrationController = new \controller\RegistrationController();
    $RegistrationController->actionIndex();

}