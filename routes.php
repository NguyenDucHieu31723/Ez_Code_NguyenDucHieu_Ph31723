<?php
use Bramus\Router\Router;
use Nguye\EzCode\Controllers\Admin\AuthenticateController;
use Nguye\EzCode\Controllers\Admin\CategoriesAdminController;
use Nguye\EzCode\Controllers\Admin\ChartAdminController;
use Nguye\EzCode\Controllers\Admin\CommentsAdminController;
use Nguye\EzCode\Controllers\Admin\CoursesAdminController;
use Nguye\EzCode\Controllers\Admin\HomeAdminController;
use Nguye\EzCode\Controllers\Admin\ProfileController;
use Nguye\EzCode\Controllers\Admin\StatusAdminController;
use Nguye\EzCode\Controllers\Admin\UsersAdminController;
use Nguye\EzCode\Controllers\Client\CourseController;
use Nguye\EzCode\Controllers\Client\HomeController;

$router = new Router();
$router->get('/', HomeController::class . '@index');
$router->mount('/course', function () use ($router) {
    $router->get('/', CourseController::class . '@index');
    $router->get('/{id}/show', CourseController::class . '@show');
});
$router->match('GET|POST', '/auth/login', AuthenticateController::class . '@login');
$router->mount('/admin', function () use ($router) {
    $router->get('/', HomeAdminController::class . '@index');
    $router->get('/logout', AuthenticateController::class . '@logout');
    $router->mount('/profile', function () use ($router) {
        $router->get('/', ProfileController::class . '@index');
        $router->get('/{id}/profile', ProfileController::class . '@profile');
    });
    $router->mount('/categories', function () use ($router) {
        $router->get('/', CategoriesAdminController::class . '@index');
        $router->get('/{id}/delete', CategoriesAdminController::class . '@delete');
        $router->get('/{id}/show', CategoriesAdminController::class . '@show');
        $router->match('GET|POST', '/{id}/update', CategoriesAdminController::class . '@update');
        $router->match('GET|POST', '/create', CategoriesAdminController::class . '@create');
    });
    $router->mount('/courses', function () use ($router) {
        $router->get('/', CoursesAdminController::class . '@index');
        $router->get('/{id}/delete', CoursesAdminController::class . '@delete');
        $router->get('/{id}/show', CoursesAdminController::class . '@show');
        $router->match('GET|POST', '/{id}/update', CoursesAdminController::class . '@update');
        $router->match('GET|POST', '/create', CoursesAdminController::class . '@create');
    });
    $router->mount('/status', function () use ($router) {
        $router->get('/', StatusAdminController::class . '@index');
        $router->get('/{id}/delete', StatusAdminController::class . '@delete');
        $router->get('/{id}/show', StatusAdminController::class . '@show');
        $router->match('GET|POST', '/{id}/update', StatusAdminController::class . '@update');
        $router->match('GET|POST', '/create', StatusAdminController::class . '@create');
    });
    $router->mount('/chart', function () use ($router) {
        $router->get('/', ChartAdminController::class . '@index');
    });
    $router->mount('/users', function () use ($router) {
        $router->get('/', UsersAdminController::class . '@index');
        $router->get('/{id}/delete', UsersAdminController::class . '@delete');
        $router->get('/{id}/show', UsersAdminController::class . '@show');
        $router->match('GET|POST', '/create', UsersAdminController::class . '@create');
        $router->match('GET|POST', '/{id}/update', UsersAdminController::class . '@update');
    });
    $router->mount('/comments', function () use ($router) {
        $router->get('/', CommentsAdminController::class . '@index');
    });
});
$router->before('GET|POST', '/admin/*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});
$router->before('GET|POST', '/admin/.*', function () {
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit();
    }
});
$router->run();