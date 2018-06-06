<?php
namespace Home\Controller;

use Think\Controller;

class CiController extends Controller
{
    public function showlist()
    {
        //创建模型   
        $cis = new \Model\WordModel();

        //实现分页
        //1.获取总条数 和每页显示的数量
        $cnt = $cis->count();
        $per = 19;
        //2. 实例化分页类  
        $page = new \Tools\Page($cnt, $per);

        //3.制作一条sql语句
        $sql = "select * from wwg_word order by id desc " . $page->limit;
        $info = $cis->query($sql);


        $pagelist = $page->fpage(array(3, 4, 5, 6, 7, 8));
            // dump($info);
        //显示模板  分配数据
        $this->assign('pagelist', $pagelist);
        $this->assign('info', $info);
        $this->display();
    }
    //添加
    public function add()
    {
        $cis = D('word');
        if (!empty($_POST)) {
            $num = $cis->add($_POST);
            if ($num) {
                $this->redirect('showlist', array(), 2, '添加成功');
            } else {
                $this->redirect('add', array(), 2, '添加失败');
            }
        } else {
             //显示模板
            $this->display();
        }
    }
    //删除
    public function del($id)
    {
        $cis = D('word');

        $num = $cis->delete($id);
        if ($num) {
            $this->redirect('showlist', array(), 2, '删除成功');
        } else {
            $this->redirect('showlist', array(), 2, '删除失败');
        }

    }



}

