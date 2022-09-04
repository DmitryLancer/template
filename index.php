<?php



spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});



$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        require_once __DIR__ . '/controller/RegistrationController.php';
        $registrationController = new \controller\RegistrationController();
        $registrationController->actionRegistration();
        break;
    case '/index.php/registration':
        require_once __DIR__ . '/controller/RegistrationController.php';
        $registrationController = new \controller\RegistrationController();
        $registrationController->actionRegistration();
        break;
    case '/index.php/post/add':
        require_once __DIR__ . '/controller/PostController.php';
        $postController = new \controller\PostController();
        $postController->actionPostAdd();
        break;
    case '/index.php/login':
        require_once __DIR__ . '/controller/LoginController.php';
        $loginController = new \controller\LoginController();
        $loginController->actionLogin();
        break;
}








