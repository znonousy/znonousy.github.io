<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="baidu-site-verification" content="TFkOdELp5j" /><!-- 百度抓取验证 -->
    <title>会员中心-<?php echo ($SiteInfo["title"]); ?></title>
    <meta name = "keywords" content="<?php echo ($SiteInfo["keywords"]); ?>" >
    <meta name = "description" content="<?php echo ($SiteInfo["description"]); ?>" >
    <link href="/Public/Uploads/2016-12-28/5863dce7d230a.jpg" rel="shortcut icon" style="width: 10px;height: 10px;">
    <link href="/Public/Default/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Default/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Public/Default/css/animate.css" rel="stylesheet">
    <link href="/Public/Default/css/style.css" rel="stylesheet">
    <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "//hm.baidu.com/hm.js?2dc48996b4cea4835be33fba577cde47";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header" style="text-align:center;">
                        <div class="dropdown profile-element"> <span>
                        <a href="/index.php">
                            <img alt="image" class="img-circle" src="/Public/Uploads/<?php echo ($SiteInfo["logo"]); ?>" width="80px;"  height="80px;" />
                        </a>
                        </span>
                        <span class="clear"> <span class="block m-t-xs" style = "color:#fff;"> <strong class="font-bold"><?php echo ($SiteInfo["name"]); ?></strong>
                        </span> <span class="text-muted text-xs block"><?php echo ($SiteInfo["set_content"]); ?></span> </span>
                    </div>
                    <div class="logo-element">
                        <?php echo ($SiteInfo["name"]); ?>
                    </div>
                </li>
                <?php if(is_array($fenleiListone)): foreach($fenleiListone as $key=>$vo): ?><li class="">
                    <a href="#" ><i class="fa fa-bar-chart-o"></i> <span class="nav-label"><?php echo ($vo["name"]); ?></span><span class="fa arrow"></span></a>
                    <ul style="height: 0px;" aria-expanded="false" class="nav nav-second-level collapse">
                        <?php if(is_array($fenleiListtwo)): foreach($fenleiListtwo as $key=>$vs): if($vo["id"] == $vs['fid']): ?><li><a href="<?php echo U('Fenlei/index',array('id'=>$vs['id']));?>"  is_active = "active_<?php echo ($vs["id"]); ?>"><?php echo ($vs["name"]); ?></a></li><?php endif; endforeach; endif; ?>
                    </ul>
                </li><?php endforeach; endif; ?>
                <li>
                    <a href="<?php echo U('Message/index');?>" is_active = "active_001"><i class="fa fa-globe"></i> <span class="nav-label">留言板</span><!-- <span class="label label-info pull-right">NEW</span> --></a>
                </li>
                <li>
                    <a href="<?php echo U('Userlist/index');?>" is_active = "active_002"><i class="fa fa-globe"></i> <span class="nav-label">本站会员</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Index/yaoqingma');?>" is_active = "active_003"><i class="fa fa-globe"></i> <span class="nav-label" style = "color:#ED5565;">邀请码与友链</span></a>
                </li>
                    </ul>

                </div>
            </nav>
            <div id="page-wrapper" class="gray-bg" style="overflow: hidden;">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" action="<?php echo U('Index/serch');?>" method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="搜索框在这里......" class="form-control" name="keywords" id="top-search" required>
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">欢迎来到<?php echo ($SiteInfo["name"]); ?>，祝您访问愉快！</span>
                            </li>
                        <?php if($_SESSION['muser']!= ''): ?><li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="javascript:void(0)">
                                    <i class="fa fa-envelope"></i>  <span class="label label-warning">家</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <div class="media-body">
                                                <strong><a href="<?php echo U('User/index');?>">进入会员中心</a></strong>. <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="dropdown-messages-box">
                                            <div class="media-body ">
                                                <strong><a href="<?php echo U('User/logout');?>">退出登陆</a></strong>. <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="text-center link-block">
                                                <i class="fa fa-envelope"></i> <strong>Carol和你在一起</strong>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        <li>欢迎你，<?php echo (session('muser')); ?></li>
                        <?php else: ?>
                            <li>
                                <a data-toggle="modal" href="#myModal6">注册</a>
                            </li>
                            <li>
                                <a data-toggle="modal" href="#modal-form">登陆</a>
                            </li><?php endif; ?>
                        </ul>

                    </nav>
                </div>
                <!-- 登陆在这里开始 -->
                <div style="display: none;" class="modal inmodal fade in" id="modal-form" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">登陆中心</h4>
                            </div>
                            <div class="modal-body">

                                <form class="form-horizontal" action="<?php echo U('User/login');?>" method="post">
                                    <p>没有账号可不要乱登陆哦</p>
                                    <div class="form-group"><label class="col-lg-2 control-label">邮箱</label>

                                        <div class="col-lg-10"><input placeholder="请输入邮箱" class="form-control" type="email" name = "email" required>
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">密码</label>

                                        <div class="col-lg-10"><input placeholder="请输入密码" class="form-control" type="password" name = "password" required></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-7">
                                            <button class="btn btn-sm btn-white" type="submit">点击登陆</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- 登陆结束 -->


                <!-- 注册开始 -->
                <div style="display: none;" class="modal inmodal fade in" id="myModal6" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">注册中心</h4>
                            </div>
                            <div class="modal-body">

                                <form class="form-horizontal" action="<?php echo U('User/reg');?>" method="post">
                                    <p>欢迎加入.</p>
                                    <div class="form-group"><label class="col-lg-2 control-label">邮箱</label>

                                        <div class="col-lg-10"><input placeholder="请输入邮箱" class="form-control" type="email" required name = "email">
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">密码</label>

                                        <div class="col-lg-10"><input placeholder="请输入密码" class="form-control" type="password" required name = "password"></div>
                                    </div>
                                     <div class="form-group"><label class="col-lg-2 control-label" >昵称</label>

                                        <div class="col-lg-10"><input placeholder="请输入昵称（一旦注册无法修改！）" class="form-control" type="text" required name = "truename">
                                        </div>
                                    </div>
                                    <?php if($SiteInfo["userstatus"] == 1): ?><div class="form-group"><label class="col-lg-2 control-label" >邀请码</label>

                                        <div class="col-lg-10"><input placeholder="请输入邀请码" class="form-control" type="text" required name = "code">
                                        </div>
                                    </div><?php endif; ?>
                                    <div class="form-group">
                                        <div class="col-lg-offset-5 col-lg-7">
                                            <button class="btn btn-sm btn-white" type="submit">点击注册</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- 注册结束 -->

<!-- 本页导航栏开始 -->
<link href="/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="/Public/css/plugins/summernote/summernote.css" rel="stylesheet">
<link href="/Public/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>会员中心</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/index.php">首页</a>
            </li>
            <li>
                <a href="<?php echo U('User/index');?>">会员中心</a>
            </li>
            <li class="active">
                <strong>修改文章</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
    </div>
</div>
<!-- 本页导航栏结束 -->

<!-- 正文开始 -->
<div class="wrapper wrapper-content fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
                <div class="row">
                    
                    <div class="col-lg-9 fadeInRight">
                        <div class="mail-box-header">
                            <h2>
                                写文章
                            </h2>
                        </div>
                        <div class="mail-box">
                            <div class="mail-body">
                                <form class="form-horizontal" action="<?php echo U('User/doUpdateArticle',array('id'=>$arr['id']));?>" method="post" enctype= "multipart/form-data">
                                    <div class="form-group" ><label class="col-sm-2 control-label">标题：</label>

                                        <div class="col-sm-10"><input type="text" class="form-control" name = "title" require id = "title" value = "<?php echo ($arr["title"]); ?>"></div>
                                    </div>
                                    <div class="form-group"><label class="col-sm-2 control-label" >分类：</label>

                                        <div class="col-sm-10">
                                            <select name="fid" id="" require id = "fidss" class="form-control" onchange="change(this)">
                                                <?php if(is_array($arr2)): foreach($arr2 as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" type = "<?php echo ($vo["type"]); ?>" <?php if($vo["id"] == $arr['fid']): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-sm-2 control-label">图片：<span style = "color:red;">必须</span></label>

                                        <div class="col-sm-10"><input type="file" value="" name= "pic" ></div>
                                    </div>

                                    <div class="form-group" style="display:none;" id = "mp3"><label class="col-sm-2 control-label">音乐文件：</label>

                                        <div class="col-sm-10"><input type="file" value="" name= "mp3" ></div>
                                    </div>


                                    <link href="/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
                                    <script type="text/plain" name="content" id="myEditor" style="width:100%;height:510px;">
                                    <p><?php echo ($arr["content"]); ?></p>
                                    </script>
                                    <div class="mail-body text-center tooltip-demo">
                                        <button  class="btn btn-sm btn-primary" id = "adds" type="submit"> 更新</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 正文结束 -->





<!-- 调用脚部文件 -->
<script type="text/javascript" src="/Public/umeditor/third-party/jquery.min.js"></script>
<script src="/Public/js/inspinia.js"></script>
      <a href="#0" class="cd-top">↑</a>
        <div class="footer" style="z-index:9999;">
            <div class="pull-right">
               <a href="http://cteam.cc" style="color: #000">承接各类网站制作，微信、APP开发，请联系http://cteam.cc</a>&nbsp;&nbsp;<a href="<?php echo U('Admin/Index/index');?>" target="_blank">等</a>&nbsp;&nbsp;<!-- <strong>如果你使用本站程序</strong> 请保留友情链接. -->
            </div>
            <div>
                <strong>Copyright</strong> <a href="http://carolcoral.cn/">CarolCoral</a> &copy; 2014-2016
                管理员邮箱：<a href = "mailto:<?php echo ($SiteInfo["admin_email"]); ?>"><?php echo ($SiteInfo["admin_email"]); ?></a><!--&nbsp; &nbsp; 统计：<?php echo ($SiteInfo["statistics"]); ?> -->&nbsp; &nbsp;
                <img src="/Public/Uploads/gh.png" style="width: 18px;height: 18px;margin-top: -5px;"><?php echo ($SiteInfo["icp"]); ?>
            </div>
        </div>

        </div>
        </div>
    <EMBED src="/Public/Uploads/MP3/" width='0px' height='0px' type='audio/mpeg' loop="1" autostart="true" volume="0"></EMBED>
    <script src="/Public/Default/js/jquery-2.1.1.js"></script>
    <script src="/Public/Default/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/Public/Default/js/bootstrap.min.js"></script>
    <!-- 手风琴菜单 -->
    <script src="/Public/Default/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- 滚动条 -->
    <script src="/Public/Default/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- 导航菜单 -->
    <script src="/Public/Default/js/inspinia.js"></script>
    <!-- 进度条 -->
    <script src="/Public/Default/js/plugins/pace/pace.min.js"></script>

    <script>
        var s_url= "active_<?php echo ($is_active); ?>";
        var now_url = '';
        for(var i = 0;i<$("#side-menu li").length;i++){
            now_url=$("#side-menu li a").eq(i).attr("is_active");
            if(now_url == s_url){
                $("#side-menu a").eq(i).parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().addClass("in");
            }else{
                $("#side-menu a").eq(i).parent().removeClass("active");
            }
        }
        </script>
        <!-- 返回顶部 -->
        <script>
                jQuery(document).ready(function($){
    // browser window scroll (in pixels) after which the "back to top" link is shown
    var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function(){
        ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if( $(this).scrollTop() > offset_opacity ) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0 ,
            }, scroll_top_duration
        );
    });

});
        </script>
</body>

</html>

<script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/Public/umeditor/lang/zh-cn/zh-cn.js"></script>




    <!-- Custom and plugin javascript -->





<script>
    $(function(){
        var um = UM.getEditor('myEditor');
    })
</script>
<script>
    function change(s){
        a=$(s).find("option:selected").attr("type");
        if(a ==2){
            $("#mp3").css("display","block");
        }else{
            $("#mp3").css("display","none");
        }
    }
</script>