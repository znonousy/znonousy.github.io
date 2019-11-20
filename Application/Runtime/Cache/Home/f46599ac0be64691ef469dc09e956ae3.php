<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="baidu-site-verification" content="TFkOdELp5j" /><!-- 百度抓取验证 -->
    <title><?php echo ($articleInfo["title"]); ?>-<?php echo ($SiteInfo["title"]); ?></title>
    <meta name = "keywords" content="<?php echo ($SiteInfo["keywords"]); ?>" >
    <meta name = "description" content="<?php echo ($SiteInfo["description"]); ?>" >
    <link href="/Public/Uploads/2016-12-28/5863dce7d230a.jpg" rel="shortcut icon" style="width: 10px;height: 10px;">
    <link href="/MyBlog-master/Public/Default/css/bootstrap.min.css" rel="stylesheet">
    <link href="/MyBlog-master/Public/Default/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/MyBlog-master/Public/Default/css/animate.css" rel="stylesheet">
    <link href="/MyBlog-master/Public/Default/css/style.css" rel="stylesheet">
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
                        <a href="/MyBlog-master/index.php">
                            <img alt="image" class="img-circle" src="/MyBlog-master/Public/Uploads/<?php echo ($SiteInfo["logo"]); ?>" width="80px;"  height="80px;" />
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

<style>
    #beijing img{
        max-width: 100%;
    }
    #beijing p{
        font-size: 14px;
    }
</style>
<!-- 本页导航栏开始 -->
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo ($articleInfo["title"]); ?></h2>
        <ol class="breadcrumb">
            <li>
                <a href="/MyBlog-master/index.php">首页</a>
            </li>
            <li>
                <a href="<?php echo U('Fenlei/index',array('id'=>$fenleiInfo['id']));?>"><?php echo ($fenleiInfo["name"]); ?></a>
            </li>
            <li class="active">
                <strong><?php echo ($articleInfo["title"]); ?></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
        <input type="hidden" id = "id" value= "<?php echo ($articleInfo["id"]); ?>">
        <input type="hidden" id = "userid" value= "<?php echo ($articleInfo["uid"]); ?>">
    </div>
</div>
<!-- 本页导航栏结束 -->

<!-- 正文开始 -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12" style="padding:0px;">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="text-center article-title" style="margin:20px 0px 20px">
                            <span class="text-muted">
                                <h1>
                                    <?php echo ($articleInfo["title"]); ?>
                                </h1>
                            </span>
                            </div>
                            <div style="margin-bottom:50px;">
                                <?php switch($fenleiInfo["type"]): case "1": if($articleInfo["viewtumb"] == 0): ?><img src="/MyBlog-master/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>" alt="" style="width:100%"><?php endif; break;?>
                                    <?php case "2": ?><!-- 音乐 -->
                                        <link rel="stylesheet" href="/MyBlog-master/Public/Default/music/css/lanrenzhijia.css" type="text/css" />
                                        <div class="music-player">
                                          <div class="info">
                                            <div class="left"> <a href="javascript:;" class="icon-shuffle"></a> <a href="javascript:;" class="icon-heart"></a> </div>
                                            <div class="center">
                                              <div class="jp-playlist">
                                                <ul>
                                                  <li></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="right"> <a href="javascript:;" class="icon-repeat"></a> <a href="javascript:;" class="icon-share"></a> </div>
                                      <div class="progress jp-seek-bar"> <span class="jp-play-bar" style="width: 0%"></span> </div>
                                  </div>
                                  <div class="controls">
                                    <div class="current jp-current-time">00:00</div>
                                    <div class="play-controls">
                                        <a href="javascript:;" class="icon-previous jp-previous" title="previous"></a>
                                        <a href="javascript:;" class="icon-play jp-play" title="play"></a>
                                        <a href="javascript:;" class="icon-pause jp-pause" title="pause"></a>
                                        <a href="javascript:;" class="icon-next jp-next" title="next"></a>
                                    </div>
                                    <div class="volume-level jp-volume-bar">
                                        <span class="jp-volume-bar-value" style="width: 0%"></span>
                                        <a href="javascript:;" class="icon-volume-up jp-volume-max" title="max volume"></a>
                                        <a href="javascript:;" class="icon-volume-down jp-mute" title="mute"></a>
                                    </div>
                                </div>
                                <div id="jquery_jplayer" class="jp-jplayer"></div>
                            </div>
                            <script src="/MyBlog-master/Public/Default/music/js/jquery.min.js"></script>
                            <script src='/MyBlog-master/Public/Default/music/js/jquery.jplayer.min.js'></script>
                            <script src='/MyBlog-master/Public/Default/music/js/jplayer.playlist.min.js'></script>
                            <script>
                                $(document).ready(function(){


                                  var playlist = [{
                                      title:"<?php echo ($articleInfo["title"]); ?>",
                                      artist:"<?php echo ($userInfo["truename"]); ?>",
                                      mp3:"/MyBlog-master/Public/Uploads/<?php echo ($articleInfo["mp3"]); ?>",
                                          //oga:"http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg",
                                        poster: "/MyBlog-master/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>"
                                      }];

                                      var cssSelector = {
                                        jPlayer: "#jquery_jplayer",
                                        cssSelectorAncestor: ".music-player"
                                    };

                                    var options = {
                                        swfPath: "http://cdnjs.cloudflare.com/ajax/libs/jplayer/2.6.4/jquery.jplayer/Jplayer.swf",
                                        supplied: "ogv, m4v, oga, mp3"
                                    };

                                    var myPlaylist = new jPlayerPlaylist(cssSelector, playlist, options);

                                });
</script>
<!-- 音乐 --><?php break;?>
<?php default: ?>
<?php if($articleInfo["viewtumb"] == 0): ?><img src="/MyBlog-master/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>" alt="" style="width:100%"><?php endif; endswitch;?>

</div>

<div id = "beijing">
<?php
 $article_id = 'article_'.$articleInfo['id']; if($articleInfo['articlepassword'] != '' && $_SESSION[$article_id] != $articleInfo['articlepassword']){ ?>
    <form class="form-horizontal" action="<?php echo U('Article/enarticlepassword',array('id'=>$articleInfo['id']));?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-2 control-label">请输入文章密码：</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" require></div>
        </div>
        <div class="mail-body text-center tooltip-demo">
            <button class="btn btn-sm btn-primary" id="adds" type="submit">发送</button>
        </div>
    </form>
<?php
 }else{ ?>
    <p style="font-size:14px;" class="text2" >
        <?php echo ($articleInfo["content"]); ?>
    </p>
<?php
 } ?>
</div>
<hr>
<div class="row">

    <div class="col-md-12">
        <h1>回复列表</h1>
        <div id="pinglun">

        </div>
        <button class="btn btn-primary btn-block m" id = "show" onclick="replay()" style="margin:0px;"><i class="fa fa-arrow-down"></i>查看更多</button>
    </div>
    <hr>
</div>
<?php
 if(($articleInfo['articlepassword'] != '' && $_SESSION[$article_id] == $articleInfo['articlepassword']) || ($articleInfo['articlepassword'] == '')){ ?>
<hr>
<div class="row" id = "huifus">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
            <i class="fa fa-info-circle"></i>回复操作
            </div>
            <div class="panel-body">
                <form action="<?php echo U('Article/replay',array('id'=>$articleInfo['id']));?>" method="post" class="form-horizontal">
                    <div class="form-group"><label class="col-sm-2 control-label">楼层</label>
                        <div class="col-sm-10" >
                            <input type="text" value = "顶楼" disabled="" class="form-control" id = "replay">
                        </div>
                    </div>
                    <input type="hidden" value = "" name = "replay" id = "huifuyincang">
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">昵称</label>
                        <div class="col-sm-10"><input class="form-control" type="text" placeholder = "请填写昵称" name = "name" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('muser')); ?>"<?php endif; ?>></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label" >邮箱</label>
                        <div class="col-sm-10"><input class="form-control" type="email" placeholder = "请填写邮箱" name = "email" required <?php if($_SESSION['mid']!= ''): ?>value ="<?php echo (session('memail')); ?>"<?php endif; ?>></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label" >内容</label>
                        <div class="col-sm-10">
                            <textarea name="content" class="form-control" cols="30" rows="5" placeholder = "请填写内容" required style="width:100%;"></textarea>
                        </div>
                    </div>
                    <center>
                    <div id="embed-captcha"></div>
                    <p id="wait" class="show">正在加载验证码......</p>
                    <p id="notice" class="hide">请先拖动验证码到相应位置</p>
                    </center>
                    <center><button type="submit" class="btn btn-w-m btn-warning" style="margin-top:10px;" id="popup-submit">提交回复</button></center>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
 } ?>
</div>
</div>
</div>
<div class="col-lg-3">
    <div class="widget-head-color-box navy-bg p-lg text-center" style="margin-top:0px;">
        <div class="m-b-md">
            <h2 class="font-bold no-margins">
                <?php echo ($userInfo["truename"]); ?>
            </h2>
            <small>注册会员</small>
        </div>
        <img src="/MyBlog-master/Public/Uploads/1.jpg" class="img-circle circle-border m-b-md" alt="profile" height="135px; " width="135px;">
    </div>
    <div class="widget-text-box">
        <p><span class="label label-success"  style="font-size:12px;">发布时间：<?php echo (date('Y-m-d H:i:s',$articleInfo["ctime"])); ?></span></p>
        <p><span class="label label-success"  style="font-size:12px;">修改时间：<?php echo (date('Y-m-d H:i:s',$articleInfo["edittime"])); ?></span></p>
        <p><span class="label label-success"  style="font-size:12px;">查看次数：<?php echo ($articleInfo["view"]); ?></span></p>
        <p><span class="label label-success"  style="font-size:12px;">评论次数：<?php echo ($articleInfo["comment"]); ?></span></p>
    </div>
    <div class="widget lazur-bg p-xl">
        <h2>
         <center>TA的文章总数</center>
     </h2>
     <center> <h1><?php echo ($articleCount); ?></h1></center>
     <a href="<?php echo U('Blog/index',array('id'=>$userInfo['id']));?>" target="_blank"><center><button type="button" class="btn btn-w-m btn-danger">查看他的主页</button></center></a>
 </div>
 <div class="widget yellow-bg p-lg text-left" style="padding-left:5px;padding-right:5px;">
    <center><h2>TA的最新文章</h2></center>
    <ul class="todo-list m-t ui-sortable" style="color:#000;">
        <?php if(is_array($zuixin)): foreach($zuixin as $key=>$vo): ?><li>
                <span class="m-l-xs"><a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>"><?php echo (msubstr($vo["title"],0,10,'utf-8',true)); ?></a></span>
            </li><?php endforeach; endif; ?>
    </ul>
</div>
<div class="widget red-bg p-lg text-center" style="padding:10px;margin-bottom:50px;padding-left: 5px;">
    <div class="m-b-md" style="margin-bottom:15px;">
    <div><i class="fa fa-bell fa-4x"></i></div>
        <button type="button" class="btn btn-w-m btn-info share" style="margin-top:15px;" id = "luandian">不要乱点</button>
        <!-- <div id="socialShare"></div> -->
    </div>
</div>


</div>
</div>
</div>
</div>
<!-- 正文结束 -->

<!-- 调用脚部文件 -->
      <a href="#0" class="cd-top">↑</a>
        <div class="footer" style="z-index:9999;">
            <div class="pull-right">
               <a href="javascript:" style="color: #000">承接各类网站制作，微信、APP开发，请联系<a href="mailto：947752894@qq.com" >管理员邮箱</a></a>&nbsp;&nbsp;<a href="<?php echo U('Admin/Index/index');?>" target="_blank">管理员登录</a>&nbsp;&nbsp;<!-- <strong>如果你使用本站程序</strong> 请保留友情链接. -->
            </div>
            <div>
                <strong>Copyright</strong> <a href="http://carolcoral.cn/">CarolCoral</a> &copy; 2014-2016
                管理员邮箱：<a href = "mailto:<?php echo ($SiteInfo["admin_email"]); ?>"><?php echo ($SiteInfo["admin_email"]); ?></a><!--&nbsp; &nbsp; 统计：<?php echo ($SiteInfo["statistics"]); ?> -->&nbsp; &nbsp;
                <img src="/MyBlog-master/Public/Uploads/gh.png" style="width: 18px;height: 18px;margin-top: -5px;"><?php echo ($SiteInfo["icp"]); ?>
            </div>
        </div>

        </div>
        </div>
    <EMBED src="/MyBlog-master/Public/Uploads/MP3/" width='0px' height='0px' type='audio/mpeg' loop="1" autostart="true" volume="0"></EMBED>
    <script src="/MyBlog-master/Public/Default/js/jquery-2.1.1.js"></script>
    <script src="/MyBlog-master/Public/Default/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/MyBlog-master/Public/Default/js/bootstrap.min.js"></script>
    <!-- 手风琴菜单 -->
    <script src="/MyBlog-master/Public/Default/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- 滚动条 -->
    <script src="/MyBlog-master/Public/Default/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- 导航菜单 -->
    <script src="/MyBlog-master/Public/Default/js/inspinia.js"></script>
    <!-- 进度条 -->
    <script src="/MyBlog-master/Public/Default/js/plugins/pace/pace.min.js"></script>

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

<script>
    function huifuss(a){
        $("#replay").val("回复"+a+"楼");
        $("#huifuyincang").val(a);
    }
    var num = 0;
    var id = $("#id").val();
    var userid = $("#userid").val();
    var now = <?php echo ($articleInfo["comment"]); ?>+1;
    function replay(){
        $.ajax({
         type: "POST",
         url: "/MyBlog-master/index.php/Home/Article/getReplay",
         data: "id="+id+"&num="+num,
         success: function(msg){
           if(msg == 5){
            $("#show").html('<i class="fa fa-arrow-down"></i>没有更多内容了');
        }else{
            msg = eval(msg);
            for (var i in msg)
            {
                now --;
                if(msg[i].replay !=0){
                    msg[i].content = "<span class = 'label label-info' style = 'font-size:12px;'>回复"+msg[i].replay+"楼:</span><br/><br>"+msg[i].content;
                }
                if(msg[i].pic ==null){
                    var pic = '/MyBlog-master/Public/Uploads/default.png';
                }else{
                    var pic = "/MyBlog-master/Public/Uploads/"+msg[i].pic;
                }
                if(msg[i].uid == userid){
                    var shenfen = '<a class="btn btn-xs btn-white" href = "#huifus"onclick="huifuss('+now+')"><i class="fa fa-heart"></i> 回复 </a> <a class="btn btn-xs btn-danger"><i class="fa fa-pencil"></i> 楼主';
                }else if(msg[i].uid !=0 && msg[i].uid != userid){
                    var shenfen = '<a class="btn btn-xs btn-white" href = "#huifus" onclick="huifuss('+now+')"><i class="fa fa-heart"></i> 回复 </a> <a class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> 本站会员';
                }else{
                    var shenfen = '<a class="btn btn-xs btn-white" href = "#huifus" onclick="huifuss('+now+')"><i class="fa fa-heart"></i> 回复 </a> <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> 游客';
                }

                var tm = new Date(parseInt(msg[i].ctime) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");

                $("#pinglun").append('<div class="feed-element"><a href="#" class="pull-left"><img alt="image" class="img-circle" src="'+pic+'"></a><div class="media-body "><small class="pull-right" style ="font-size:12px;">'+now+'楼</small><strong style = "font-size:15px;">'+msg[i].name+'</strong><br><small class="text-muted">'+tm+'</small><div class="well" style = "font-size:14px;">'+msg[i].content+'</div><div class="pull-right">'+shenfen+'</a></div></div></div><hr />');
            }
            num = num+10;
        }
    }
});
}
replay();
</script>
<!-- 回复验证码 -->
<script src="http://static.geetest.com/static/tools/gt.js"></script>
<script>
        var handlerEmbed = function (captchaObj) {
        $("#popup-submit").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";
                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "hide";
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "<?php echo U('Base/EchoMyVerify',array('t'=>$randtime));?>", // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
            }, handlerEmbed);
        }
    });
</script>
<link rel="stylesheet" href="/MyBlog-master/Public/Default/Share/css/share.css" type="text/css" />
<script src="/MyBlog-master/Public/Default/Share/js/share.js"></script>
<script>
        $(function() {
            $("#socialShare").socialShare({
                content: '<?php echo (msubstr(strip_tags($vo["content"]),0,160,'utf-8',true)); ?>',
                url:'http://<?php echo $_SERVER["SERVER_NAME"];?>/MyBlog-master/index.php?m=Home&c=Article&a=index&id=106',
                titile:'<?php echo ($articleInfo["title"]); ?>-<?php echo ($SiteInfo["title"]); ?>',
                pic:'/MyBlog-master/Public/Uploads/<?php echo ($articleInfo["pic"]); ?>'
            });

        });
        $("#shareQQ").on("click",function(){
            $(this).socialShare("tQQ");
        })
        $("#luandian").click(function(){
            $('body').html("<center><h1 style = 'color:#fff;'>都TM告诉你不要乱点了，不相信我是吧，看你现在怎么办</h1><a href = '#' onclick = 'javascript:history.go(-1)' style = 'color:#2f4050;'>返回</a></center>");
        })
    </script>