<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Counsellor extends BaseController
{

  public function index()
  {
    return view('counceller/admisnReview');
  }

  public function enrollment(){
    return view('counceller/enrollment');

  }
public function Admission(){
  return view('counceller/new-admission');

}
public function studentDetails(){
  return view('counceller/counceller-student-details');

}

}
