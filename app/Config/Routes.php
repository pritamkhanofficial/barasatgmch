<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'WebsiteController::home');
$routes->get('archive', 'WebsiteController::archive');
$routes->get('inner-page', 'WebsiteController::innerPage');
$routes->get('department', 'WebsiteController::department');
$routes->get('staff', 'WebsiteController::staff');
$routes->get('get-file/(:any)', 'FileController::getFile/$1');

$routes->group('back-panel', static function ($routes) {

    $routes->match(['get','post'], '/', 'AuthController::Auth');    
    $routes->group('/', ['filter'=>'authFilter','namespace' => 'App\Controllers'], static function ($routes) {
        $routes->get('dashboard', 'DashboardController::index');
        $routes->get('logout', 'AuthController::logout');
        $routes->match(['get','post'], 'update-profile', 'AuthController::updateProfile');
        $routes->match(['get','post'], 'change-password', 'AuthController::changePassword');
        // $routes->match(['get','post'], 'change-password', 'BackPanelController::Slider');

        $routes->match(['get', 'post'],'slider/', 'BackPanelController::Slider');
        $routes->match(['get', 'post'],'slider/(:segment)', 'BackPanelController::Slider/$1');
        $routes->match(['get', 'post'],'slider/(:segment)/(:segment)', 'BackPanelController::Slider/$1/$2');


        $routes->match(['get', 'post'],'documents/', 'BackPanelController::Documents');
        $routes->match(['get', 'post'],'documents/(:segment)', 'BackPanelController::Documents/$1');
        $routes->match(['get', 'post'],'documents/(:segment)/(:segment)', 'BackPanelController::Documents/$1/$2');


        $routes->match(['get', 'post'],'about-hospital/', 'BackPanelController::aboutHospital');
        $routes->match(['get', 'post'],'about-hospital/(:segment)', 'BackPanelController::aboutHospital/$1');
        $routes->match(['get', 'post'],'about-hospital/(:segment)/(:segment)', 'BackPanelController::aboutHospital/$1/$2');



        $routes->match(['get', 'post'],'gallery/', 'BackPanelController::Gallery');
        $routes->match(['get', 'post'],'gallery/(:segment)', 'BackPanelController::Gallery/$1');
        $routes->match(['get', 'post'],'gallery/(:segment)/(:segment)', 'BackPanelController::Gallery/$1/$2');


        $routes->match(['get', 'post'],'content-management/', 'BackPanelController::contentManagement');
        $routes->match(['get', 'post'],'content-management/(:segment)', 'BackPanelController::contentManagement/$1');
        $routes->match(['get', 'post'],'content-management/(:segment)/(:segment)', 'BackPanelController::contentManagement/$1/$2');


        $routes->match(['get', 'post'],'hospital-head/', 'BackPanelController::hospitalHead');
        $routes->match(['get', 'post'],'hospital-head/(:segment)', 'BackPanelController::hospitalHead/$1');
        $routes->match(['get', 'post'],'hospital-head/(:segment)/(:segment)', 'BackPanelController::hospitalHead/$1/$2');


        $routes->match(['get', 'post'],'department/', 'BackPanelController::department');
        $routes->match(['get', 'post'],'department/(:segment)', 'BackPanelController::department/$1');
        $routes->match(['get', 'post'],'department/(:segment)/(:segment)', 'BackPanelController::department/$1/$2');



        $routes->match(['get', 'post'],'staff/', 'BackPanelController::staff');
        $routes->match(['get', 'post'],'staff/(:segment)', 'BackPanelController::staff/$1');
        $routes->match(['get', 'post'],'staff/(:segment)/(:segment)', 'BackPanelController::staff/$1/$2');



        $routes->match(['get', 'post'],'designation/', 'BackPanelController::designation');
        $routes->match(['get', 'post'],'designation/(:segment)', 'BackPanelController::designation/$1');
        $routes->match(['get', 'post'],'designation/(:segment)/(:segment)', 'BackPanelController::designation/$1/$2');


        $routes->match(['get', 'post'],'page/', 'BackPanelController::page');
        $routes->match(['get', 'post'],'page/(:segment)', 'BackPanelController::page/$1');
        $routes->match(['get', 'post'],'page/(:segment)/(:segment)', 'BackPanelController::page/$1/$2');

       
    });
});
/* $routes->group('back-panel', static function ($routes) {

    
    $routes->group('/', ['namespace' => 'App\Controllers'], static function ($routes) {
        $routes->get('dashboard', 'DashboardController::index');
       
    });
}); */
