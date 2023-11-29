<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class AdminController extends BaseController
{

    //creating branch
  public function index()
  {
    if ($this->request->isAJAX()) {
      $name    = $this->request->getPost('name');
      $address = $this->request->getPost('address');

      $data = [
        'name'    => $name,
        'address' => $address
      ];

      $userModel = new UserModel();
      $result    = $userModel->createBranch($data);

      $this->response->setStatusCode(200);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');

      if ($result['status'] == true) {
        return $this->response->setJSON(['status' => true, 'message' => 'Branch Created Successfully']);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Failed to Create Branch']);
      }
    } else {
      $this->response->setStatusCode(404);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Error Occurred']);
    }
  }
  //get branch details
  public function getBranchDetails()
  {
    $branch_id = $this->request->getGet('id');

    if ($branch_id) {
      $userModel = new UserModel();
      $result    = $userModel->getBranchDetails($branch_id);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {
        return $this->response->setJSON(['status' => true, 'message' => 'Branch details retrieved successfully', 'branch' => $result]);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving branch details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing branch ID']);
    }
  }
    //updating branch details
  public function updateBranch()
  {
    if ($this->request->isAJAX()) {
      $branchID = $this->request->getPost('id');
      $name     = $this->request->getPost('branch');
      $address  = $this->request->getPost('address');

      $data      = [
        'id'      => $branchID,
        'name'    => $name,
        'address' => $address
      ];
      $userModel = new UserModel();
      $result    = $userModel->updateBranch($data);

      $this->response->setStatusCode(200);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');

      if ($result['status'] == true) {
        return $this->response->setJSON(['status' => true, 'message' => 'Branch Updated Successfully']);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Failed to Update Branch']);
      }
    } else {
      $this->response->setStatusCode(404);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Error Occurred']);
    }
  }

    
  public function getCourseByBranch()
  {
    $branch = $this->request->getGet('branch');
    if ($branch) {
      $userModel = new UserModel();
      $result    = $userModel->getCourseByBranch($branch);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {
        return $this->response->setJSON(['status' => true, 'message' => 'Course details retrieved successfully', 'Course' => $result]);
      } else {

        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving Course details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Course ID']);
    }
  }

    //create employee
  public function addEmployee()
  {
    if ($this->request->isAJAX()) {

      $empId    = $this->request->getPost('emp_id');
      $name     = $this->request->getPost('name');
      $email    = $this->request->getPost('email');
      $password = $this->request->getPost('password');
      $mobile   = $this->request->getPost('mobile');
      $role     = $this->request->getPost('role');
      $skills   = $this->request->getPost('skills');
      $branchId = $this->request->getPost('branch');

      $data      = [

        'id'       => $empId,
        'name'     => $name,
        'email'    => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'mobile'   => $mobile,
        'role'     => $role,
        'skills'   => $skills,
        'branchId' => $branchId

      ];
      $userModel = new UserModel();
      $result    = $userModel->CreateEmployee($data);
      $this->response->setStatusCode(200);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');

      if ($result['status'] == true) {
        return $this->response->setJSON(['status' => true, 'message' => 'User Created Successfully']);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Failed to Create User']);
      }
    } else {
      $this->response->setStatusCode(404);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Error Occurred']);
    }
  }


  //update employee
  public function updateEmployee()
  {
    if ($this->request->isAJAX()) {
      $Id       = $this->request->getPost('id');
      $empId    = $this->request->getPost('emp_id');
      $name     = $this->request->getPost('name');
      $email    = $this->request->getPost('email');
      $password = $this->request->getPost('password');
      $mobile   = $this->request->getPost('mobile');
      $role     = $this->request->getPost('role');
      $skills   = $this->request->getPost('skills');
      $branchId = $this->request->getPost('branch');

      $data      = [
        'id'       => $Id,
        'emp_id'   => $empId,
        'name'     => $name,
        'email'    => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'mobile'   => $mobile,
        'role'     => $role,
        'skills'   => $skills,
        'branchId' => $branchId

      ];
      $userModel = new UserModel();
      $result    = $userModel->updateEmployee($data);
      $this->response->setStatusCode(200);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');

      if ($result['status'] == true) {
        return $this->response->setJSON(['status' => true, 'message' => 'User Created Successfully']);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Failed to Create User']);
      }
    } else {
      $this->response->setStatusCode(404);
      $this->response->setHeader('Access-Control-Allow-Origin', '*');
      $this->response->setHeader('Access-Control-Allow-Headers', 'Origin');
      $this->response->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Error Occurred']);
    }
  }

  //get employee details
  public function getEmployeeDetails()
  {
    $id = $this->request->getGet('id');
    if ($id) {
      $userModel = new UserModel();
      $result    = $userModel->getEmployeeDetails($id);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {
        return $this->response->setJSON(['status' => true, 'message' => 'Employees details retrieved successfully', 'employee' => $result]);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving Employee details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Employee ID']);
    }
  }
  public function getEmployeeByRole()
  {

    $role = $this->request->getGet('role');
    if ($role) {
      $userModel = new UserModel();
      $result    = $userModel->getEmployeeByRole($role);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {
        return $this->response->setJSON(['status' => true, 'message' => 'Employee details retrieved successfully', 'Employee' => $result]);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving Employee details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Employee role']);
    }
  }

  public function getEmployeeByBranch()
  {
    $branch = $this->request->getGet('branch');
    if ($branch) {
      $userModel = new UserModel();
      $result    = $userModel->getEmployeeByBranch($branch);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {
        return $this->response->setJSON(['status' => true, 'message' => 'Course details retrieved successfully', 'Employee' => $result]);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving Course details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Course ID']);
    }
  }

  //updating employee status
  public function updateEmployeeStatus()
  {
    $id = $this->request->getGet('ID');
    $status=$this->request->getGet('status');
    if ($id) {
      $userModel = new UserModel();
      $result    = $userModel->updateEmployeeStatus($id,$status);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {
        return $this->response->setJSON(['status' => true, 'message' => 'Status updated successfully', 'employee' => $result]);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Error']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing employee ID']);
    }
  }


 // creating module
  public function addModule()
  {
    if ($this->request->isAJAX()) {

      $name        = $this->request->getPost('name');
      $cost        = $this->request->getPost('cost');
      $module_type = $this->request->getPost('module_type');
      $time        = $this->request->getPost('time');
      $userModel   = new UserModel();
      $data        = [
        'name'        => $name,
        'cost'        => $cost,
        'module_type' => $module_type,
        'time'        => $time,
      ];
      $result      = $userModel->addModule($data);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result['status']) {
        $moduleId = $result['inserted_id'];
        $data['module_id'] = $moduleId;
        return $this->response->setJSON(['status' => true, 'message' => 'Module added successfully..', 'Module' => $moduleId]);
      } else {

        return $this->response->setJSON(['status' => false, 'message' => 'Module Not added..']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Module ID']);
    }
  }


  //get module details
  public function getModuleDetails()
  {
    // if ($this->request->isAJAX()) {
    $id = $this->request->getGet('id');
    if ($id) {
      $userModel = new UserModel();
      $result    = $userModel->getModuleDetails($id);

      if ($result) {
        $this->response->setStatusCode(200)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => true, 'message' => 'Module details retrieved successfully', 'Module' => $result]);
      } else {
        $this->response->setStatusCode(500)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving Module details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Module ID']);
    }
    // }
  }

  //creating course
  public function addCourse()
  {
    if ($this->request->isAJAX()) {

      $branch      = $this->request->getPost('branch');
      $course      = $this->request->getPost('name');
      $shrt_course = $this->request->getPost('shrt_course');
      $total_cls   = $this->request->getPost('class');
      $modules     = $this->request->getPost('module[]');
      $order       = $this->request->getPost('order');

      $data = [
        'branch'        => $branch,
        'course'        => $course,
        'total_classes' => $total_cls,
        'shrt_course'   => $shrt_course,
        'module'        => $modules,
        'order'         => $order
      ];

      $userModel = new UserModel();
      $result    = $userModel->addCourse($data);
      if ($result) {
        $this->response->setStatusCode(200)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => true, 'message' => 'Course details added successfully', 'Course' => $result]);
      } else {
        $this->response->setStatusCode(500)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Employee ID']);
    }
  }

  //updating course
  public function updateCourse()
  {
    $branch      = $this->request->getPost('branch');
    $course      = $this->request->getPost('name');
    $shrt_course = $this->request->getPost('shrt_course');
    $total_cls   = $this->request->getPost('class');
    $modules     = $this->request->getPost('modules');
    $order       = $this->request->getPost('order');

    $data      = [
      'branch'        => $branch,
      'course'        => $course,
      'shrt_course'   => $shrt_course,
      'total_classes' => $total_cls,
      'module'        => $modules,
      'order'         => $order
    ];
    $userModel = new UserModel();
    $result    = $userModel->updateCourse($data);
    if ($result) {
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
    } else {
      $this->response->setStatusCode(500)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
    }
  }
  //get course details
  public function getCourseDetails()
  {
    // if ($this->request->isAJAX()) {
    $id = $this->request->getGet('id');
    if ($id) {
      $userModel = new UserModel();
      $result    = $userModel->getCourseDetails($id);

      if ($result) {
        $this->response->setStatusCode(200)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => true, 'message' => 'Course details retrieved successfully', 'course' => $result]);
      } else {
        $this->response->setStatusCode(500)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving Course details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Course ID']);
    }
    // }
  }


  //updating module status
  public function updateModuleStatus()
  {
    $id = $this->request->getGet('ID');
    $status = $this->request->getGet('status');

    if ($id) {
      $userModel = new UserModel();
      $result    = $userModel->updateModuleStatus($id,$status);
      if ($result) {
        $this->response->setStatusCode(200)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => true, 'message' => 'Status updated successfully', 'Module' => $result]);
      } else {
        $this->response->setStatusCode(500)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => false, 'message' => 'Error']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Module ID']);
    }
  }


  //updating course status
  public function updateCourseStatus()
  {
    $id = $this->request->getGet('ID');
    $status = $this->request->getGet('status');

    if ($id) {
      $userModel = new UserModel();
      $result    = $userModel->updateCourseStatus($id,$status);
      if ($result) {
        $this->response->setStatusCode(200)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => true, 'message' => 'Status updated successfully', 'Course' => $result]);
      } else {
        $this->response->setStatusCode(500)
          ->setHeader('Access-Control-Allow-Origin', '*')
          ->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => false, 'message' => 'Error']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Course ID']);
    }
  }

  //creating module class
  public function addModuleCls()
  {
    if ($this->request->isAJAX()) {

      $module = $this->request->getPost('module_id');
      $number = $this->request->getPost('number');
      $fac_refer = $this->request->getPost('fac_refer');
      $topics = $this->request->getPost('topics');
      $teacherMaterial = $this->request->getFile('teacherMaterial');
      $studentMaterial = $this->request->getFile('studentMaterial');
      $practicals = $this->request->getFile('practicals');
      $uploadPath = ROOTPATH . 'public/uploads/';

      $teacherFileName = '';
      $studentFileName = '';
      $practicalsFileName = '';

      if ($teacherMaterial && $teacherMaterial->isValid()) {
        $teacherFileName = $teacherMaterial->getName();
        $teacherMaterial->move($uploadPath, $teacherFileName);
      }

      if ($studentMaterial && $studentMaterial->isValid()) {
        $studentFileName = $studentMaterial->getName();
        $studentMaterial->move($uploadPath, $studentFileName);
      }

      if ($practicals && $practicals->isValid()) {
        $practicalsFileName = $practicals->getName();
        $practicals->move($uploadPath, $practicalsFileName);
      }


      $userModel = new UserModel();
      $data = [
        'module' => $module,
        'number' => $number,
        'fac_refer' => $fac_refer,
        'topics' => implode(",", $topics),
        'teacher_file' => $teacherFileName,
        'student_file' => $studentFileName,
        'practicals_file' => $practicalsFileName,

      ];
      $result = $userModel->addModuleCls($data);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {

        return $this->response->setJSON(['status' => true, 'message' => 'Class created successfully', 'class' => $result]);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Failed']);
      }
    }
  }
  //updating module
  public function updateModule()
  {
    if ($this->request->isAJAX()) {
      $id = $this->request->getPost('module_id');
      $name        = $this->request->getPost('name');
      $cost        = $this->request->getPost('cost');
      $module_type = $this->request->getPost('module_type');
      $time        = $this->request->getPost('time');
      $userModel   = new UserModel();
      $data        = [
        'id' => $id,
        'name'        => $name,
        'cost'        => $cost,
        'module_type' => $module_type,
        'time'        => $time,
      ];
      $result      = $userModel->updateModule($data);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result['status']) {
        return $this->response->setJSON(['status' => true, 'message' => 'Module updated successfully..', 'Module' => $result]);
      } else {

        return $this->response->setJSON(['status' => false, 'message' => 'Module Not updated..']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Module ID']);
    }
  }


  //updating module class

  public function updateModuleCls()
  {
    $id = $this->request->getPost('id');
    $module = $this->request->getPost('module_id');
    $number = $this->request->getPost('number');
    $fac_refer = $this->request->getPost('fac_refer');
    $topics = $this->request->getPost('topics[]');

    $userModel = new UserModel();
    $data = [
      'id' => $id,
      'module' => $module,
      'number' => $number,
      'fac_refer' => $fac_refer,
      'topics' => implode(",", $topics),

    ];
    $result = $userModel->updateModuleCls($data);
    $this->response->setStatusCode(200)
      ->setHeader('Access-Control-Allow-Origin', '*')
      ->setContentType('application/json', 'utf-8');
    if ($result) {

      return $this->response->setJSON(['status' => true, 'message' => 'Class updated successfully', 'class' => $result]);
    } else {
      return $this->response->setJSON(['status' => false, 'message' => 'Failed']);
    }
  }
  //get module class details

  public function getModuleCls()
  {
    $id = $this->request->getGet('id');
    if ($id) {
      $userModel = new UserModel();
      $result    = $userModel->getModule($id);
      $this->response->setStatusCode(200)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      if ($result) {
        return $this->response->setJSON(['status' => true, 'message' => 'Module details retrieved successfully', 'Module' => $result]);
      } else {
        return $this->response->setJSON(['status' => false, 'message' => 'Error retrieving Module details']);
      }
    } else {
      $this->response->setStatusCode(400)
        ->setHeader('Access-Control-Allow-Origin', '*')
        ->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Missing Module ID']);
    }
  }


  
}
