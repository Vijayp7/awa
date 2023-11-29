<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Counsellor extends BaseController
{

  public function index()
  {
    return view('counsellor/admisnReview');
  }
}
