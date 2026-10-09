<?php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login(): string { return view('auth/login',['title'=>'Login','activePage'=>'login']); }
    public function attempt(){ $username=trim((string)$this->request->getPost('username')); $password=(string)$this->request->getPost('password'); $user=(new UserModel())->where('username',$username)->first(); if(!$user || !password_verify($password,$user['password'])){return redirect()->back()->withInput()->with('error','Invalid username or password.');} session()->regenerate(); session()->set(['logged_in'=>true,'user_id'=>$user['id'],'username'=>$user['username'],'full_name'=>$user['full_name']]); return redirect()->to(site_url('tasks')); }
    public function logout(){ session()->destroy(); return redirect()->to(site_url('login'))->with('message','You have been logged out.'); }
}
