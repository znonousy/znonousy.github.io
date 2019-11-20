<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baidu-site-verification" content="TFkOdELp5j" /><!-- 百度抓取验证 -->
    <title>基本信息-<?php echo ($SiteInfo["title"]); ?></title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="/Public/Default/user/font-awesome-4.6.3/css/font-awesome.min.css">            <!-- Font awesome -->
    <link rel="stylesheet" href="/Public/Default/user/css/bootstrap.min.css">                                  <!-- Bootstrap style -->
    <link rel="stylesheet" href="/Public/Default/user/css/hero-slider-style.css">                              <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="/Public/Default/user/css/magnific-popup.css">                                 <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->

    <link rel="stylesheet" href="/Public/Default/user/css/templatemo-style.css">                               <!-- Templatemo style -->
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

        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->
            <div class="cd-slider-nav">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    <div class="collapse navbar-toggleable-sm text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav" id = "barsss">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo U('User/index');?>" data-no="1">会员中心 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo U('User/addArticle');?>" data-no="2">写篇文章</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo U('User/myArticle');?>" data-no="3">我的文章</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo U('User/liuyan');?>" data-no="4">我的留言</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo U('User/userInfo');?>" data-no="5">基本信息</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo U('User/detail');?>" data-no="6">主页信息</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo U('User/gonggao');?>" data-no="7">管理公告</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <ul class="cd-hero-slider">  <!-- autoplay -->

<link href="/Public/Default/css/style.css" rel="stylesheet">
<!-- 调用头部文件 -->
<link href=" /Public/Default/shearphoto_common/css/ShearPhoto.css" rel="stylesheet" type="text/css" media="all"><!--CSS文件，有点废话-->

<!-- 正文开始 -->
<li class="selected" id = "liselected5">


    <div class="cd-full-width">
        <div class="container-fluid js-tm-page-content tm-page-1" data-page-no="1">

            <div class="row">

                <div class="col-xs-12">
                    <div class="tm-bg-white-translucent text-xs-left tm-textbox diannao">

                        <div class="mail-box" style="padding:10px;">
                            <div class="form-group">
                                <label>邮箱：</label>
                                <input  class="form-control required" type="text" disabled="" value = "<?php echo ($userInfo["email"]); ?>">
                            </div>
                            <div class="form-group">
                                <label>注册时间</label>
                                <input  class="form-control required" type="text" disabled="" value = "<?php echo (date('Y-m-d H:i:s',$userInfo["ctime"])); ?>">
                            </div>
                            <div class="form-group">
                                <label>上次登录时间</label>
                                <input  class="form-control required" type="text" disabled="" value = "<?php echo (date('Y-m-d H:i:s',session('mlasttime'))); ?>">
                            </div>
                            <div class="form-group">
                                <label>上次登录IP</label>
                                <input  class="form-control required" type="text" disabled="" value = "<?php echo (session('mlastip')); ?>">
                            </div>
                            <div class="form-group">
                                <label>账户状态</label>
                                <input  class="form-control required" type="text" disabled="" <?php if($userInfo["status"] == 0): ?>value = "启用"<?php else: ?>value = "禁用"<?php endif; ?>>
                            </div>
                            <div class="form-group">
                                <label>我的昵称</label>
                                <input  class="form-control required" type="text" disabled="" value = "<?php echo ($userInfo["truename"]); ?>">
                            </div>
                            <center><h1>修改头像</h1></center>


                            <div id="shearphoto_loading">程序加载中......</div><!--这是2.2版本加入的缓冲效果，JS方法加载前显示的等待效果-->
                            <div id="shearphoto_main">
                                <!--效果开始.............如果你不要特效，可以直接删了........-->
                                <div class="Effects" id="shearphoto_Effects" autocomplete="off">
                                  <strong class="EffectsStrong">截图效果</strong>
                                  <a href="javascript:;" StrEvent="原图" class="Aclick"><img src=" /Public/Default/shearphoto_common/images/Effects/e0.jpg"/>原图</a>
                                  <a href="javascript:;" StrEvent="美肤"><img src=" /Public/Default/shearphoto_common/images/Effects/e1.jpg"/>美肤效果</a>
                                  <a href="javascript:;" StrEvent="素描"><img src=" /Public/Default/shearphoto_common/images/Effects/e2.jpg"/>素描效果</a>
                                  <a href="javascript:;" StrEvent="自然增强"><img src=" /Public/Default/shearphoto_common/images/Effects/e3.jpg" />自然增强</a>
                                  <a href="javascript:;" StrEvent="紫调"><img src=" /Public/Default/shearphoto_common/images/Effects/e4.jpg" />紫调效果</a>
                                  <a href="javascript:;" StrEvent="柔焦"><img src=" /Public/Default/shearphoto_common/images/Effects/e5.jpg"/>柔焦效果</a>
                                  <a href="javascript:;" StrEvent="复古"><img src=" /Public/Default/shearphoto_common/images/Effects/e6.jpg"/>复古效果</a>
                                  <a href="javascript:;" StrEvent="黑白"><img src=" /Public/Default/shearphoto_common/images/Effects/e7.jpg"/>黑白效果</a>
                                  <a href="javascript:;" StrEvent="仿lomo"><img src=" /Public/Default/shearphoto_common/images/Effects/e8.jpg"/>仿lomo</a>
                                  <a href="javascript:;" StrEvent="亮白增强"><img src=" /Public/Default/shearphoto_common/images/Effects/e9.jpg"/>亮白增强</a>
                                  <a href="javascript:;" StrEvent="灰白"><img src=" /Public/Default/shearphoto_common/images/Effects/e10.jpg"/>灰白效果</a>
                                  <a href="javascript:;" StrEvent="灰色"><img src=" /Public/Default/shearphoto_common/images/Effects/e11.jpg"/>灰色效果</a>
                                  <a href="javascript:;" StrEvent="暖秋"><img src=" /Public/Default/shearphoto_common/images/Effects/e12.jpg"/>暖秋效果</a>
                                  <a href="javascript:;" StrEvent="木雕"><img src=" /Public/Default/shearphoto_common/images/Effects/e13.jpg"/>木雕效果</a>
                                  <a href="javascript:;" StrEvent="粗糙"><img src=" /Public/Default/shearphoto_common/images/Effects/e14.jpg"/>粗糙效果</a>
                              </div>
                              <!--效果结束...........................如果你不要特效，可以直接删了.....................................................-->
                              <!--primary范围开始-->
                              <div class="primary">
                                 <!--main范围开始-->
                                 <div id="main">
                                   <div class="point">
                                   </div>
                                   <!--选择加载图片方式开始-->
                                   <div id="SelectBox">
                                    <form    id="ShearPhotoForm" enctype="multipart/form-data" method="post"  target="POSTiframe">
                                        <input name="shearphoto" type="hidden" value="我要传参数" autocomplete="off"> <!--示例传参数到服务端，后端文件UPLOAD.php用$_POST['shearphoto']接收,注意：HTML5切图时，这个参数是不会传的-->
                                        <a href="javascript:;" id="selectImage"><input type="file"  name="UpFile" autocomplete="off"/></a>
                                    </form>
                                    <!-- <a href="javascript:;" id="PhotoLoading"></a> -->
                                    <a href="javascript:;" id="camerasImage"></a>
                                </div>
                                    <!--选择加载图片方式结束--->
                                    <div id="relat">
                                            <div id="black">
                                            </div>
                                            <div id="movebox">
                                                    <div id="smallbox">
                                                        <img src=" /Public/Default/shearphoto_common/images/default.gif" class="MoveImg" /><!--截框上的小图-->
                                                    </div>
                                                    <!--动态边框开始-->
                                                    <i id="borderTop">
                                                    </i>

                                                    <i id="borderLeft">
                                                    </i>

                                                    <i id="borderRight">
                                                    </i>

                                                    <i id="borderBottom">
                                                    </i>
                                                    <!--动态边框结束-->
                                                    <i id="BottomRight">
                                                    </i>
                                                    <i id="TopRight">
                                                    </i>
                                                    <i id="Bottomleft">
                                                    </i>
                                                    <i id="Topleft">
                                                    </i>
                                                    <i id="Topmiddle">
                                                    </i>
                                                    <i id="leftmiddle">
                                                    </i>
                                                    <i id="Rightmiddle">
                                                    </i>
                                                    <i id="Bottommiddle">
                                                    </i>
                                                </div>
                                                <img src=" /Public/Default/shearphoto_common/images/default.gif" class="BigImg" /><!--MAIN上的大图-->
                                            </div>
                                        </div>
                                        <!--main范围结束-->
                                        <div style="clear: both"></div>
                                        <!--工具条开始-->
                                        <div id="Shearbar">
                                            <a id="LeftRotate" href="javascript:;">
                                                <em>
                                                </em>
                                                向左旋转
                                            </a>
                                            <em class="hint L">
                                            </em>
                                            <div class="ZoomDist" id="ZoomDist">
                                                <div id="Zoomcentre">
                                                </div>
                                                <div id="ZoomBar">
                                                </div>
                                                <span class="progress">
                                                </span>
                                            </div>
                                            <em class="hint R">
                                            </em>
                                            <a id="RightRotate" href="javascript:;">
                                                向右旋转
                                                <em>
                                                </em>
                                            </a>
                                            <p class="Psava">
                                                <a id="againIMG"  href="javascript:;">重新选择</a>
                                                <a id="saveShear" href="javascript:;">保存截图</a>
                                            </p>
                                        </div>
                                        <!--工具条结束-->
                                    </div>
                                    <!--primary范围结束-->
                                    <div style="clear: both"></div>
                                </div>
                                <!--shearphoto_main范围结束-->

                                <!--主功能部份 主功能部份的标签请勿随意删除，除非你对shearphoto的原理了如指掌，否则JS找不到DOM对象，会给你抱出错误-->
                                <!--相册-->

                                <!--相册-->
                                <!--拍照-->
                                <div id="CamBox"><!--假如你不要这个拍照功能。把拍照标签删除了，JS会抱出一个console.log()给你，注意查收，console.log的内容是告诉，某个DOM对象找不到-->
                                    <p class="lens"></p>
                                    <div id="CamFlash"></div>
                                    <p class="cambar">
                                        <a href="javascript:;" id="CamOk"  >拍照</a>
                                        <a href="javascript:;" id="setCam">设置</a>
                                        <a href="javascript:;" id="camClose">关闭</a>
                                        <span style="clear:both;"></span>
                                    </p>
                                    <div id="timing"></div>
                                </div>
                                <hr>
                                <center><h1>修改密码</h1></center>
                                <form action="<?php echo U('User/changePass');?>" method="post">
                                    <div class="form-group">
                                        <label>输入密码</label>
                                        <input  class="form-control required" type="password" name = "passone">
                                    </div>
                                    <div class="form-group">
                                        <label>重复密码</label>
                                        <input  class="form-control required" type="password" name = "passtwo">
                                    </div>
                                    <button type="submit" class="btn btn-primary">确认修改</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- .cd-full-width -->

        </li>
        <!-- 正文结束 -->

        <!-- 调用脚部文件 -->
                    </ul> <!-- .cd-hero-slider -->

            <footer class="tm-footer">

                <div class="tm-social-icons-container">
                    <a href="/index.php" class="tm-social-link">C</a>
                    <a href="/index.php" class="tm-social-link">a</a>
                    <a href="/index.php" class="tm-social-link">r</a>
                    <a href="/index.php" class="tm-social-link">o</a>
                    <a href="/index.php" class="tm-social-link">l</a>
                    <a href="/index.php" class="tm-social-link">C</a>
                    <a href="/index.php" class="tm-social-link">o</a>
                    <a href="/index.php" class="tm-social-link">r</a>
                    <a href="/index.php" class="tm-social-link">a</a>
                    <a href="/index.php" class="tm-social-link">l</a>
                </div>

                <p class="tm-copyright-text">Copyright &copy; <?php echo ($SiteInfo["title"]); ?> <?php echo ($SiteInfo["statistics"]); ?> </p>

            </footer>

        </div> <!-- .cd-hero -->


        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">

            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>

        <!-- load JS files -->
        <script src="/Public/Default/user/js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="/Public/Default/user/js/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="/Public/Default/user/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="/Public/Default/user/js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="/Public/Default/user/js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->

        <script>

            function adjustHeightOfPage(pageNo) {

                // Get the page height
                var totalPageHeight = 15 + $('.cd-slider-nav').height()
                                        + $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 160
                                        + $('.tm-footer').height();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height())
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }

            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery pop up
                -----------------------------------------*/
                $('.tm-img-gallery').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}
                });

                /* Collapse menu after click
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height
                });

                /* Browser resized
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    adjustHeightOfPage( currentPageNo );
                });

                // Remove preloader
                // https://ihatetomatoes.net/create-custom-preloading-screen/
                $('body').addClass('loaded');

            });
            var active = "<?php echo ($active_name); ?>";
            var now_url = '';
            for (var i = 0; i < $("#barsss li").length; i++) {
                now_url = $("#barsss li a").eq(i).attr("data-no")
                if( now_url== active){
                    $("#barsss li a").eq(i).parent().addClass("selected");
                }
            }
        </script>

</body>
</html>

<script  type="text/javascript" src=" /Public/Default/shearphoto_common/js/ShearPhoto.js" ></script><!--ShearPhoto的核心文件 截取，拖拽，HTML5切图，数据交互等都是由这个文件处理，全部由明哥先生汗水交织而成-->
<script  type="text/javascript"  src=" /Public/Default/shearphoto_common/js/webcam_ShearPhoto.js" ></script> <!--在线拍照那个FLASH的接口，非技术性文件-->
<script  type="text/javascript"  src=" /Public/Default/shearphoto_common/js/alloyimage.js" ></script>   <!--图片特效处理,他只负责特效，其他功能与这个文件完全无关，这个JS从腾讯AI文件  如你不要特效的话，顺带删除这个文件，在hendle.js设置关闭特效-->
<script  type="text/javascript"  src=" /Public/Default/shearphoto_common/js/handle.js" ></script>