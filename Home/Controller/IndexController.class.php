<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        if (!empty($_POST)) {
            $ci = trim($_POST['ci']);

            $data = D('word')->where("ci like  '%$ci%' ")->select();
            $this->assign("data", $data);
            $this->display('showlist');
        } else {
            $this->display();
        }
    }


}

