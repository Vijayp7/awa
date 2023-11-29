<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model {
  protected $db;
  protected $empTbl='employees';
  protected $allowedFields = ['emp_id','branch','name','email','number','password','role','skills','status'];
}