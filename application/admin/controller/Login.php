<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class Login extends Controller
{
    //xianshi denglu
    public function index()
    {
        $request = request();
        if ($request->isPost()) {
            // 做一个简单的登录 组合where数组条件 
            $map = input('post.');
            // dump($map);
            // exit();
            $map['password'] = md5($map['password']);
            $data = Db::connect("mysql")->name('users')->where($map)->find();
            if (empty($data)) {
                $this->error('账号或密码错误');
            } else {
                $sdata = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'avatar' => $data['avatar'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                ];
                session('user', $sdata);

                $this->success('登录成功、前往管理后台', 'admin/Index/index');
            }
        } else {
            return $this->fetch();
        }
    }


    // 退出登录
    public function loginOut()
    {
        session('user', null);
        $this->success('退出成功、前往登录页面', 'Index/login/index');
    }
}
