<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends BaseController {
    public function index(){
        $m=M("liuyan");
        $count      = $m->count();
        $Page       = new \Think\Page($count,20);//
        $show       = $Page->show();//
        $arr = $m->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("arr",$arr);
        $this->assign('page',$show);// 赋值分页输出
        $randtime = rand(1,1000).time();
        $this->assign("randtime",$randtime);
        $this->assign("is_active","001");
        $this->display();
    }

    public function send(){
        $GtSdk = new \Org\Util\GeetestLib($this->CAPTCHA_ID,$this->PRIVATE_KEY);
        $user_id = $_SESSION['user_id'];
        if ($_SESSION['gtserver'] == 1) {
            $result = $GtSdk->success_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $user_id);
            if (!$result) {
                $this->error("验证码不正确");
            }
        }else{
            if (!$GtSdk->fail_validate($_POST['geetest_challenge'],$_POST['geetest_validate'],$_POST['geetest_seccode'])) {
                $this->error("都填写了吗？仔细检查2");
            }
        }
        $m=M("liuyan");
        $data = $m->create();
        if($_POST['title'] == '' || $_POST['name'] == '' || $_POST['content'] == ''){
            $this->error("都填写了吗？仔细检查");
        }
        $color = array("#18A689","#1A7BB9","#21B9BB","#F7A54A","#EC4758","#000000");
        $number = rand(0,5);
        $data['color']=$color[$number];
        $data['ip']=$_SERVER["REMOTE_ADDR"];
        $data['ctime']= time();
        $result = $m->add($data);
        if($result>0){
            if(!$this->email_set['message_set']){
                $m = M('email_type');
                $info= $m->find(1);
                $info['send_message_content'] = $info['send_message_content']."<br/>留言标题：{$_POST['title']}<br/>留言署名：{$_POST['name']}<br/>留言内容：{$_POST['content']}<br/>";
                $this->MySmtp($this->admin_email,$info['send_message_title'],$info['send_message_content']);
            }
            $this->success("留言成功！");
        }else{
            $this->error("留言失败！");
        }
    }















}
