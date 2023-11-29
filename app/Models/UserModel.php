<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $db;
    private string $empTbl;
    private string $branchesTbl;
    private string $courseTbl;
    private string $moduleTbl;

    private string $moduleclsTbl;
    private string $roleTbl;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->empTbl = 'employees';
        $this->branchesTbl = 'branches';
        $this->courseTbl = 'courses';
        $this->roleTbl = 'roles';
        $this->moduleTbl = 'module_details';
        $this->moduleclsTbl = 'module_classes';
    }



    public function checkEmailExist($email)
    {

        $builder = $this->db->table($this->empTbl);
        $builder->select('id');
        $builder->select('number');
        $builder->select('email');

        $builder->where('email', $email);

        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }
    public function checkToken($token)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->select('id');

        $builder->where('token', $token);

        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRowArray();
        return $result;
    }
    public function changePassword($updateData, $email)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->set('password', $updateData['password']);
        $builder->set('updated_at', $updateData['updated_at']);

        $builder->where("email", $email);

        if ($builder->update()) {
            return true;
        } else {
            return false;
        }
    }

    public function countAllEmployees()
    {
        $builder = $this->db->table($this->empTbl);
        $builder->selectCount('id');

        $query = $builder->countAllResults();
        return  $query;
    }

    public function createBranch($data)
    {
        $builder = $this->db->table($this->branchesTbl);
        $builder->set('name', $data['name']);
        $builder->set('address', $data['address']);
        $builder->set('created_at', date('Y-m-d h:i:s'));

        $success = $builder->insert();

        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }
    public function getBranches()
    {
        $builder = $this->db->table($this->branchesTbl);
        $builder->select('*');

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }
    public function getBranchDetails($branch_id)
    {
        $builder = $this->db->table($this->branchesTbl);
        $builder->select("*");

        $query = $builder->getWhere(['id' => $branch_id]);

        if ($query->getNumRows() > 0) {
            return $query->getRowArray();
        } else {
            return null;
        }
    }
    public function updateBranch($data)
    {
        $builder = $this->db->table($this->branchesTbl);
        $builder->set('name', $data['name']);
        $builder->set('address', $data['address']);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $data['id']);

        $success = $builder->update();
        if ($success) {
            return ['status' => true, 'message' => "Successfully updated branch"];
        } else {
            return ['status' => false, 'message' => "Failed to update branch"];
        }
    }

    public function getUserByEmail($email)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->select("*");

        $builder->where('email', $email);

        $query = $builder->get();
        $result = $query->getRowArray();
        if ($query->getNumRows() > 0) {
            return $result;
        } else {
            return null;
        }
    }
    public function updateToken($uemail, $token)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->set('token', $token);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('email', $uemail);

        $success = $builder->update();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }


    public function CreateEmployee($data)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->set('emp_id', $data['id']);
        $builder->set('name', $data['name']);
        $builder->set('email', $data['email']);
        $builder->set('password', $data['password']);
        $builder->set('number', $data['mobile']);
        $builder->set('role', $data['role']);
        $builder->set('skills', $data['skills']);
        $builder->set('branch', $data['branchId']);
        $builder->set('created_at', date('Y-m-d h:i:s'));

        $success = $builder->insert();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }



    public function getEmployees()
    {
        $builder = $this->db->table($this->empTbl);
        $builder->select('*');

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }
    public function getRole($role)
    {
        $builder = $this->db->table($this->roleTbl);
        $builder->select('name');

        $builder->where('id', $role);

        $query = $builder->get();
        $result = $query->getRowArray();
        return $result;
    }

    public function getBranchName($branch)
    {
        $builder = $this->db->table($this->branchesTbl);
        $builder->select('name');

        $builder->where('id', $branch);

        $query = $builder->get();
        $result = $query->getRowArray();
        return $result;
    }
    public function getEmployeeDetails($id)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->select('*');

        $builder->where('id', $id);

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }


    public function getModuleDetails($id)
    {
        $builder = $this->db->table($this->moduleTbl);
        $builder->select('*');

        $builder->where('id', $id);

        $query = $builder->get();
        $result = $query->getRowArray();
        return $result;
    }

    public function getCourseDetails($id)
    {
        $builder = $this->db->table($this->courseTbl);
        $builder->select('*');

        $builder->where('id', $id);

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }






    public function updateEmployee($data)
    {

        $builder = $this->db->table($this->empTbl);
        $builder->set('emp_id', $data['emp_id']);
        $builder->set('name', $data['name']);
        $builder->set('email', $data['email']);
        $builder->set('password', $data['password']);
        $builder->set('number', $data['mobile']);
        $builder->set('role', $data['role']);
        $builder->set('skills', $data['skills']);
        $builder->set('branch', $data['branchId']);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $data['id']);

        $success = $builder->update();

        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }

    public function updateEmployeeStatus($id, $status)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->set('status', $status);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $id);

        $success = $builder->update();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }


    public function addModule($data)
    {

        $builder = $this->db->table($this->moduleTbl);
        $builder->set('name', $data['name']);
        $builder->set('cost', $data['cost']);
        $builder->set('module_type', $data['module_type']);
        $builder->set('time', $data['time']);
        $builder->set('created_at', date('Y-m-d h:i:s'));
        $builder->set('status', 'active');

        $success = $builder->insert();
        if ($success) {
            $insertedId = $this->db->insertID();
            return ['status' => true, 'inserted_id' => $insertedId];
        } else {
            return ['status' => false];
        }
    }
    public function addModuleClass($data)
    {

        $builder = $this->db->table($this->moduleclsTbl);
        $builder->set('class_no', $data['number']);
        $builder->set('topics', $data['topics']);
        $builder->set('faculty_reference', $data['faculty_reference']);
        $builder->set('material', $data['material']);
        $builder->set('practicles', $data['practicles']);
        $builder->set('topics', $data['topics']);
        $builder->set('module_id', $data['module_id']);
        $builder->set('created_at', date('Y-m-d h:i:s'));

        $success = $builder->insert();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }
    public function getModules()
    {
        $builder = $this->db->table($this->moduleTbl);
        $builder->select('*');

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }
    public function getCourses()
    {
        $builder = $this->db->table($this->courseTbl);
        $builder->select('courses.*, module_details.name as module_name, branches.name as branch_name');

        $builder->join('module_details', 'courses.modules = module_details.id');
        $builder->join('branches', 'courses.branch = branches.id');

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }


    public function getModule($id)
    {
        $builder = $this->db->table($this->moduleTbl);
        $builder->select('module_classes.*');

        $builder->join('module_classes', 'module_classes.module_id = module_details.id');

        $builder->where('module_details.id', $id);

        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            $result = $query->getResultArray();
            return $result;
        } else {
            return null;
        }
    }

    public function updateCourse($data)
    {
        $builder = $this->db->table($this->courseTbl);
        $builder->set('name', $data['name']);
        $builder->set('short_name', $data['shrt_course']);
        $builder->set('branch', $data['branch']);
        $builder->set('classes', $data['total_classes']);
        $builder->set('modules', $data['module']);
        $builder->set('order', $data['order']);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $data['id']);

        $success = $builder->update();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }


    public function addCourse($data)
    {
        $builder = $this->db->table($this->courseTbl);
        $builder->set('name', $data['course']);
        $builder->set('short_name', $data['shrt_course']);
        $builder->set('branch', $data['branch']);
        $builder->set('classes', $data['total_classes']);
        $builder->set('modules', $data['module']);
        $builder->set('module_order	', $data['order']);
        $builder->set('created_at', date('Y-m-d h:i:s'));

        $success = $builder->insert();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }
    public function updateModuleStatus($id, $status)
    {
        $builder = $this->db->table($this->moduleTbl);
        $builder->set('status', $status);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $id);

        $success = $builder->update();

        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }




    public function updateCourseStatus($id, $staus)
    {
        $builder = $this->db->table($this->courseTbl);
        $builder->set('status', $staus);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $id);

        $success = $builder->update();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }





    public function getCourseByBranch($branch)
    {

        $builder = $this->db->table($this->courseTbl);
        $builder->select('courses.*, module_details.name as module_name, branches.name as branch_name');

        $builder->join('module_details', 'courses.modules = module_details.id');
        $builder->join('branches', 'courses.branch = branches.id');

        $builder->where('courses.branch', $branch);
        $builder->where('courses.status', '0');

        $query = $builder->get();
        if ($query->getNumRows() > 0) {
            $result = $query->getResultArray();
            return $result;
        } else {
            return null;
        }
    }
    public function getEmployeeByBranch($branch)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->select('employees.*, branches.name as branch_name, roles.name as role_name');

        // $builder->join('skills', 'employees.skills = skills.id');
        $builder->join('roles', 'roles.id = employees.role');
        $builder->join('branches', 'employees.branch = branches.id');

        $builder->where('branch', $branch);

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }

    public function getEmployeeByRole($role)
    {
        $builder = $this->db->table($this->empTbl);
        $builder->select('employees.*, branches.name as branch_name, roles.name as role_name');

        $builder->join('branches', 'branches.id = employees.branch');
        $builder->join('roles', 'roles.id = employees.role');

        $builder->where('roles.id', $role);

        $query = $builder->get();
        $result = $query->getResultArray();
        return $result;
    }
    public function addModuleCls($data)
    {
        $builder = $this->db->table($this->moduleclsTbl);
        $builder->set('module_id', $data['module']);
        $builder->set('class_no', $data['number']);
        $builder->set('faculty_reference', $data['fac_refer']);
        $builder->set('topics', $data['topics']);
        $builder->set('teacher_file', $data['teacher_file']);
        $builder->set('material', $data['student_file']);
        $builder->set('practicles', $data['practicals_file']);
        $builder->set('created_at', date('Y-m-d h:i:s'));

        $success = $builder->insert();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }


    public function updateModule($data)
    {

        $builder = $this->db->table($this->moduleTbl);
        $builder->set('name', $data['name']);
        $builder->set('cost', $data['cost']);
        $builder->set('module_type', $data['module_type']);
        $builder->set('time', $data['time']);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $data['id']);

        $success = $builder->update();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }


    public function updateModuleCls($data)
    {
        $builder = $this->db->table($this->moduleclsTbl);
        $builder->set('module_id', $data['module']);
        $builder->set('class_no', $data['number']);
        $builder->set('faculty_reference', $data['fac_refer']);
        $builder->set('topics', $data['topics']);
        $builder->set('updated_at', date('Y-m-d h:i:s'));

        $builder->where('id', $data['id']);

        $success = $builder->update();
        if ($success) {
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }
}
