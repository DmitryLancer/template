<?php



//spl_autoload_register(function ($class_name) {
//    include $class_name . '.php';
//});


//if(empty($_POST)) {
//    include __DIR__ . 'controller/RegistrationController.php';
//    $RegistrationController = new \controller\RegistrationController();
//    $RegistrationController->actionIndex();
//
//}

//include_once __DIR__ . '/controller/RegistrationController.php';

//if(empty($_POST)) {
//    require __DIR__ . '/controller/RegistrationController.php';
//    $RegistrationController = new \controller\RegistrationController();
//    $RegistrationController->actionRegistration();
//
//}


//if (!empty($_POST['action'])) {
//    if ($_POST['action'] == 'post') {
//        include_once __DIR__ . '/controller/PostController.php';
//        $postController = new \controller\PostController();
//        $postController->actionIndex();
//    }
//}




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
}

var_dump($_SERVER['REQUEST_URI']);







