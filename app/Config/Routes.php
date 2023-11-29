<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
//login
$routes->add('login', 'AuthController::login');
$routes->post('auth', 'AuthController::auth');
$routes->get('/', 'AuthController::index');
$routes->post('sendResetLink', 'AuthController::sendResetLink');
$routes->get('logout', 'AuthController::logout');
$routes->post('resetPassword', 'AuthController::resetPassword');
$routes->post('updatePassword', 'AuthController::updatePassword');

//admin views
$routes->get('admin/course', 'Admin::course', ['filter' => 'authCheck']);
$routes->get('admin/employees', 'Admin::employees', ['filter' => 'authCheck']);
$routes->get('admin/branch', 'Admin::branches', ['filter' => 'authCheck']);
$routes->get('admin/modules', 'Admin::modules', ['filter' => 'authCheck']);
$routes->get('admin/add-module', 'Admin::addModule', ['filter' => 'authCheck']);
$routes->get('admin/edit-module/(:any)', 'Admin::editModule/$1', ['filter' => 'authCheck']);
$routes->get('admin/module-view/(:any)', 'Admin::viewModule/$1', ['filter' => 'authCheck']);
$routes->get('admin/add_cls', 'Admin::add_cls', ['filter' => 'authCheck']);

$routes->post('admin/add-course', 'AdminController::addCourse', ['filter' => 'authCheck']);
$routes->post('addModuleCls', 'AdminController::addModuleCls', ['filter' => 'authCheck']);
$routes->post('updateModule', 'AdminController::updateModule', ['filter' => 'authCheck']);
$routes->post('updateModuleCls', 'AdminController::updateModuleCls', ['filter' => 'authCheck']);
$routes->post('add_branch', 'AdminController::index', ['filter' => 'authCheck']);
$routes->post('update_branch', 'AdminController::updateBranch', ['filter' => 'authCheck']);
$routes->post('addModule', 'AdminController::addModule', ['filter' => 'authCheck']);
$routes->post('admin/add_employee', 'AdminController::addEmployee', ['filter' => 'authCheck']);
$routes->get('getEmployeeDetails', 'AdminController::getEmployeeDetails', ['filter' => 'authCheck']);
$routes->get('getEmployeeByRole', 'AdminController::getEmployeeByRole', ['filter' => 'authCheck']);
$routes->get('getEmployeeByBranch', 'AdminController::getEmployeeByBranch', ['filter' => 'authCheck']);
$routes->get('updateEmployeeStatus', 'AdminController::updateEmployeeStatus', ['filter' => 'authCheck']);
$routes->get('getCourseByBranch', 'AdminController::getCourseByBranch', ['filter' => 'authCheck']);
$routes->get('getBranchDetails', 'AdminController::getBranchDetails', ['filter' => 'authCheck']);
$routes->get('getModuleDetails', 'AdminController::getModuleDetails', ['filter' => 'authCheck']);
$routes->get('getCourseDetails', 'AdminController::getCourseDetails', ['filter' => 'authCheck']);
$routes->get('updateCourseStatus', 'AdminController::updateCourseStatus', ['filter' => 'authCheck']);
$routes->get('getModuleCls', 'AdminController::getModuleCls', ['filter' => 'authCheck']);
$routes->get('updateModuleStatus', 'AdminController::updateModuleStatus', ['filter' => 'authCheck']);


$routes->get('counsellor/admissions', 'Counsellor::index');
$routes->get('counsellor/enrollment', 'Counsellor::enrollment');
$routes->get('counsellor/admission', 'Counsellor::Admission');
$routes->get('counceller/studentDetails', 'Counsellor::studentDetails');
