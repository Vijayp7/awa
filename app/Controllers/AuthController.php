<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class AuthController extends BaseController
{
  use ResponseTrait;

  public function index(): string
  {
    $data['title'] = 'Login';
    return view('login', $data);
  }
  public function auth()
  {
    if ($this->request->isAJAX()) {
      $email    = $this->request->getPost('email');
      $password = $this->request->getPost('password');

      $userModel = new UserModel();
      $user      = $userModel->getUserByEmail($email);
      // $hash_password=password_hash($user['password'],PASSWORD_BCRYPT);
      if (!$user || !password_verify($password, $user['password'])) {
        return $this->response->setJSON(['status' => false, 'message' => 'Invalid credentials', 'djd' => $password]);
      } else {
        session()->set('user_id', $user['id']);
        session()->set('role', $user['role']);
        session()->set('isLoggedIn', true);

        return $this->response->setJSON(['status' => true, 'message' => 'User Found']);
      }
    } else {
      $this->response->setStatusCode(404);
      return $this->response->setJSON(['status' => false, 'message' => 'User Not Found']);
    }
  }



  public function sendResetLink()
  {
    $token     = md5(rand(0, 1000));
    $uemail    = $this->request->getPost('email');
    $userModel = new UserModel();
    $user      = $userModel->getUserByEmail($uemail);

    if ($user) {
      $userModel->updateToken($uemail, $token);

      // $resetLink = base_url('resetPassword/' . $token);
      // _FnY%TkZeM2Z
      $message = "Please reset your password by clicking on the following link: ";

      $email = \Config\Services::email();
      $email->setFrom('awa@cmschamps.com');
      $email->setTo($uemail);
      $email->setSubject('Reset Password | AWA');
      $email->setMessage($message);
      $email->setCC('shiva.infasta@gmail.com');

      if ($email->send()) {
        $this->response->setStatusCode(200);
        $this->response->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => true, 'message' => 'Mail Sent Successfully...']);
      } else {
        $this->response->setStatusCode(404);
        $this->response->setContentType('application/json', 'utf-8');
        return $this->response->setJSON(['status' => false, 'message' => 'Mail Not Sent...']);
      }
    } else {
      $this->response->setStatusCode(404);
      $this->response->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Email Not Registered...']);
    }
  }

  public function resetPassword()
  {
    $token      = $this->request->uri->getSegment(3);
    $data       = [];
    $model      = new UserModel();
    $checkToken = $model->checkToken($token);
    if (!empty($checkToken)) {
      $data['title'] = "Change Password";
      return view('reset-password', $data);
    } else {
      $this->response->setStatusCode(404);
      $this->response->setContentType('application/json', 'utf-8');
      return $this->response->setJSON(['status' => false, 'message' => 'Invalid Token..!']);
    }
  }



  public function updatePassword()
  {
    $email       = $this->request->getPost('email');
    $newpass     = $this->request->getPost('password');
    $confirmPass = $this->request->getPost('cpassword');
    $hashpass    = md5($newpass);
    $token       = $this->request->getPost('token');

    $updateData = [
      'password'   => $hashpass,
      'updated_at' => date("Y-m-d H:i:s")
    ];
    $model      = new UserModel();
    $result     = $model->changePassword($updateData, $email);
    if ($result) {
      $this->response->setStatusCode(200);
      return $this->response->setJSON(['status'  => true, 'message' => 'Your password has been changed successfully. Please login again.']);
    } else {
      $this->response->setStatusCode(403);
      return $this->response->setJSON(['status'  => false, 'message' => 'Failed to change your password!']);
    }
  }
  public function logout()
  {
    session()->destroy();
    return redirect()->to('/');
  }
}
