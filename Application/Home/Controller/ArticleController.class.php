<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function index(){
        $id = I("get.id");
        $m=M("article");
        $prefix  = C('DB_PREFIX');
         $articleInfo = $m->field("a.*,(SELECT count(id) FROM {$prefix}comment where aid = {$id}) as comment")->table("{$prefix}article as a")->where("status = 0 AND id = {$id}")->find();
        if($articleInfo){
            $mm=D("user");
            $m->where("id = {$id}")->setInc('view',1);
            $userInfo = $mm->where("id = {$articleInfo['uid']}")->relation(true)->find();
            $mmm=M("fenlei");
            $fenleiInfo = $mmm->where("id = {$articleInfo['fid']}")->find();
            $articleCount = $m->where("uid = {$userInfo['id']} AND status = 0")->count();
            $zuixin = $m->where("uid = {$userInfo['id']} AND status = 0")->limit(5)->order("id desc")->select();
            $xihuan = $m->where("status = 0")->limit(5)->order("rand()")->select();
            $this->assign("zuixin",$zuixin);
            $this->assign("xihuan",$xihuan);
            $this->assign("articleCount",$articleCount);
            $this->assign("articleInfo",$articleInfo);
            $this->assign("userInfo",$userInfo);
            $this->assign("fenleiInfo",$fenleiInfo);
            $this->assign("is_active",$fenleiInfo['id']);
            $this->display();
        }else{
            $this->error('该文章正在审核中',U('Index/index'));
        }

    }

    public function replay(){
        $GtSdk = new \Org\Util\GeetestLib($this->CAPTCHA_ID,$this->PRIVATE_KEY);
        $user_id = $_SESSION['user_id'];
        if ($_SESSION['gtserver'] == 1) {
            $result = $GtSdk->success_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $user_id);
            if (!$result) {
                $this->error("验证码不正确");
            }
        }else{
            if (!$GtSdk->fail_validate($_POST['geetest_challenge'],$_POST['geetest_validate'],$_POST['geetest_seccode'])) {
                $this->error("验证码不正确");
            }
        }
        if($_POST['name'] == '' || $_POST['email'] == '' || $_POST['content'] == ''){
            $this->error("滚回去，最恨提交空数据");
        }
        $aid = I("get.id");
        $m =M("comment");
        $data = $m->create();
        $data['aid'] = $aid;
        $data['ctime']=time();
        if($_SESSION['muser']!=null || $_SESSION['muser']!= ''){
            $data['uid'] = $_SESSION['mid'];
        }
        $result = $m->add($data);
        if($result>0){
            $mm = M("article");
            if(!$this->email_set['comment_set']){
                $m = M('email_type');
                $info= $m->find(1);
                $article= $mm->find($aid);
                $info['send_comment_content'] = $info['send_comment_content']."<br/>回复帖子标题：<a href = '".$_SERVER['HTTP_REFERER']."' target = '_blank'>{$article['title']}</a><br/>回复署名：{$_POST['name']}<br/>回复内容：{$_POST['content']}";
                $this->MySmtp($this->admin_email,$info['send_comment_title'],$info['send_comment_content']);
            }
            $this->success("回复成功！");
        }else{
            $this->error("回复失败！");
        }
    }

    public function getReplay(){
        $id  = intval(I("post.id"));
        $num = intval(I("post.num"));
        $m = D("comment");
        $arr = $m->where("aid = {$id}")->limit($num,10)->relation(true)->order("id desc")->select();
        if(!empty($arr)){
            $this->ajaxReturn($arr);
        }else{
            echo 5;
            exit;
        }
    }

    public function getReplay_new(){
        $id  = intval(I("post.id"));
        $num = intval(I("post.num"));
        $m = D("comment");
        $arr = $m->where("aid = {$id}")->limit($num,10)->relation(true)->order("id desc")->select();
        if(!empty($arr)){
            for($i = 0; $i<count($arr);$i++){
                if($arr[$i]['replay'] != 0){
                    $s = $m->find($arr[$i]['replay']);
                    if($s){
                        $arr[$i]['father'] = $s;
                    }
                }
                unset($s);
            }
            $this->ajaxReturn($arr);
        }else{
            echo 5;
            exit;
        }
    }

    public function enarticlepassword(){
        $id = I('get.id');
        $password = I('post.password');
        $_SESSION["article_{$id}"] = $password;
        $this->success('我也不知道对不对');
    }





}
