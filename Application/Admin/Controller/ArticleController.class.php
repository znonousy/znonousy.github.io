<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    // 文章列表
    public function index(){
            $m = M("article");
            $prefix  = C('DB_PREFIX');
            $count      = $m->where("status = 0")->count();
            $Page       = new \Think\Page($count,10);
            $show       = $Page->show();// 分页显示输出
            $list = $m->field("a.*,(SELECT count(id) FROM {$prefix}comment where aid = a.id) as comment")->table("{$prefix}article as a")->where("status = 0")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign("list",$list);
            $this->assign('page',$show);// 赋值分页输出
    	$this->display();
    }

    // 回收站
    public function recovery(){
            $m = M("article");
            $count      = $m->where("status = 1")->count();
            $Page       = new \Think\Page($count,10);
            $show       = $Page->show();// 分页显示输出
            $list = $m->where("status = 1")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign("list",$list);
            $this->assign('page',$show);// 赋值分页输出
            $this->display();
    }

    // 放回回收站
    public function delete(){
        $id = I("get.id");
        $m =M("article");
        $result = $m->where("id = {$id}")->setField('status',1);
        if($result>0){
            $this->success("文章放入回收站！");
        }else{
            $this->error("失败！");
        }
    }

    // 拿出回收站
    public function xianshi(){
        $id = I("get.id");
        $m =M("article");
        $result = $m->where("id = {$id}")->setField('status',0);
        if($result>0){
            $this->success("成功！");
        }else{
            $this->error("失败！");
        }
    }

    // 确认删除
    public function reallydelete(){
        $id = I("get.id");
        if(empty($id)){
            $this->error("非法操作");
        }else{
            $m = M("article");
            $result = $m->where("id = {$id}")->delete();
            if($result){
                $m = M('comment');
                $check = $m->where("aid = {$id}")->select();
                if($check){
                    $result = $m->where("aid = {$id}")->delete();
                }
                $this->myRelust($result);
            }

        }
    }

    // 改变置顶状态
    public function changeTop(){
        $id = I("get.id");
        $status = I('get.status');
        $m = M('article');
        $result = $m->where("id = {$id}")->setField('istop',$status);
        $this->myRelust($result);
    }

    // 评论列表
    public function commentList(){
        $id = I('get.id');
        $m = M('comment');
        $count      = $m->where("aid = {$id}")->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();// 分页显示输出
        $list = $m->where("aid = {$id}")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    // 改变评论状态
    public function changeCommentStatus(){
        $m = M('comment');
        $id = I("get.id");
        $status = I('get.status');
        $result = $m->where("id = {$id}")->setField('status',$status);
        $this->myRelust($result);
    }

    // 删除评论
    public  function delComment(){
        $m = M('comment');
        $id = I("get.id");
        $result = $m->delete($id);
        $this->myRelust($result);
    }

}
