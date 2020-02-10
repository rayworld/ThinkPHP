<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    /*
     public function hello1($name = 'thinkphp')
    {
        //$data = Db::name('data')->find();
        $data = '';
        $this->assign('result', $data);
        return $this->fetch();        
    }

    public function hello00($name = 'World')
    {

        // 获取当前URL地址 不含域名
        echo 'url: ' . $this->request->url() . '<br/>';
        return 'Hello,' . $name . '！';

    }

    public function hello(Request $request)
    {
        
        echo 'name:'.$request->param('name','World','strtolower');
        echo '<br/>test:'.$request->param('test','thinkphp','strtoupper');
    } 
    */
    
    //
    public function index()
    {
        if(session('user') == '')
        {
            $this->redirect(url('Admin/login/index'));
        }
        return $this->fetch();   
    } 
}