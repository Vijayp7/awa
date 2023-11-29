<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Admin extends BaseController
{

  public function course()
  {
    $userModel = new UserModel();
    $data['branches'] = $userModel->getBranches();
    $data['modules'] = $userModel->getModules();
    $data['courses'] = $userModel->getCourses();
    $data['title'] = 'Course';
    return view('admin/course', $data);
  }
  public function employees()
  {
    $pager = \Config\Services::pager();
    $userModel = new UserModel();
    $page    = (int) ($this->request->getGet('page') ?? 1);
    $perPage = 10;
    $total   = $userModel->countAllEmployees();
    $pager_links = $pager->makeLinks($page, $perPage, $total);
    $employees = $userModel->getEmployees();
    foreach ($employees as $employee) {
      $roles = $userModel->getRole($employee['role']);
      $assign_branch = $userModel->getBranchName($employee['branch']);
    }
    $data['employees'] = $employees;
    $branches = $userModel->getBranches();
    $data = ['pager_links' => $pager_links, 'branches' => $branches, 'employees' => $employees, 'roles' => $roles, 'assign_branch' => $assign_branch];
    $data['title'] = 'Employees';
    return view('admin/employees', $data);
  }
  public function branches()
  {
    $userModel = new UserModel();
    $data['branches'] = $userModel->getBranches();
    $data['title'] = 'Branches';
    return view('admin/create-branch', $data);
  }

  public function modules()
  {
    $data['title'] = 'Modules';
    $userModel = new UserModel();
    $data['branches'] = $userModel->getBranches();
    $data['modules'] = $userModel->getModules();
    return view('admin/modules', $data);
  }
  public function addModule()
  {
    $userModel = new UserModel();
    $data['branches'] = $userModel->getBranches();
    $data['title'] = 'Modules';
    return view('admin/add-module', $data);
  }
  public function editModule($id = null)
  {
    $userModel = new UserModel();
    $data['branches'] = $userModel->getBranches();
    $modules= $userModel->getModuleDetails($id);
     $data['modules']=$modules;
     $data['classes'] = $userModel->getModule($id);
    // var_dump($data['modules']);
    $data['title'] = 'Modules';
    return view('admin/edit-module', $data);
  }

  public function viewModule($id = null)
  {
    $userModel = new UserModel();
    $data['branches'] = $userModel->getBranches();
    $data['modules'] = $userModel->getModule($id);
    $data['title'] = 'Modules';
    return view('admin/module-view', $data);
  }
  public function add_cls($id = null)
  {
    $userModel = new UserModel();
    $data['modules'] = $userModel->getModule($id);
    $data['title'] = 'Modules';
    return view('admin/add-cls', $data);
  }
}
