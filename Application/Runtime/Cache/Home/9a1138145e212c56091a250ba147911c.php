<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=" js no-touch"><head>
    <!-- ==========================
    	Meta Tags
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========================
    	Title
    =========================== -->
    <title><?php echo ($arr["truename"]); ?>的主页-<?php echo ($SiteInfo["title"]); ?></title>

    <meta name = "keywords" content="<?php echo ($SiteInfo["keywords"]); ?>" >
    <meta name = "description" content="<?php echo ($SiteInfo["description"]); ?>" >
    <!-- ==========================
    	Fonts
    =========================== -->


    <!-- ==========================
    	CSS
    =========================== -->
    <link href="/Public/Default/blog/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/Public/Default/blog/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/Public/Default/blog/animate.css" rel="stylesheet" type="text/css">
    <link href="/Public/Default/blog/creative-brands.css" rel="stylesheet" type="text/css">
    <link href="/Public/Default/blog/vertical-carousel.css" rel="stylesheet" type="text/css">
    <link href="/Public/Default/blog/custom.css" rel="stylesheet" type="text/css">

    <!-- ==========================
    	JS
    =========================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">
	<a href="#page-top" class="scroll-up scroll"><i class="fa fa-chevron-up"></i></a>
    <h1>Freelancer</h1>

    <!-- ==========================
    	HEADER - START
    =========================== -->
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavigation"><i class="fa fa-bars"></i></button>
                    <img src="/Public/Uploads/<?php echo ($userPic); ?>" class="navbar-logo pull-left" alt="" style="border-radius: 50px;margin-top:7px;padding-top:0px;">
                    <a href="/index.php?m=Home&c=Blog&a=index&id=14" class="navbar-brand animated flipInX"><?php echo ($arr["truename"]); ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="myNavigation">

                    <ul class="nav navbar-nav navbar-right animated flipInX">
                    <li><a href="/index.php" class="scroll" target="_blank">回到主站</a></li>
                        <li><a href="#about" class="scroll">我在这</a></li>
                        <li><a href="#services" class="scroll">我的擅长</a></li>
                        <li><a href="#reference" class="scroll">我的生活</a></li>
                        <li><a href="#contact" class="scroll">留言给我</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

        <div class="jumbotron">
            <img src="/Public/Uploads/<?php echo ($userPic); ?>" class="img-responsive scrollpoint sp-effect3" alt="" style="border-radius: 370px;" width="370px;" height="370px;">
            <div class="social-wrapper">
                <ul class="brands brands-inline hidden-xs scrollpoint sp-effect1">
                    <li><a href="#"><i class="fa fa-facebook  hi-icon-effect-8"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
                <h2 class="scrollpoint sp-effect3"><?php echo ($arr["truename"]); ?></h2>
                <ul class="brands brands-inline hidden-xs scrollpoint sp-effect2">
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Slideshow start -->
            <div id="slideshow" class="carousel slide vertical scrollpoint sp-effect3" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slideshow item 1 active -->
                    <?php if(is_array($biaoqian)): foreach($biaoqian as $k=>$vo): ?><!-- Slideshow item 2 -->
                    <?php if($k == 0): ?><div class="item active">
                    <?php else: ?>
                    <div class="item"><?php endif; ?>
                    <h3><?php echo ($vo); ?><i class="fa fa-code icon"></i></h3></div>
                    <!-- Slideshow item 3 --><?php endforeach; endif; ?>
                </div>
            </div>
            <!-- Slideshow end -->
        <a href="#about" class="btn btn-reference btn-lg scroll scrollpoint sp-effect1" role="button"><i class="fa fa-smile-o"></i>我的简介</a>
        <a href="#contact" class="btn btn-reference btn-lg btn-active scroll scrollpoint sp-effect2" role="button"><i class="fa fa-bolt"></i>留言给我</a>
        </div>
    </header>
    <!-- ==========================
    	HEADER - END
    =========================== -->

    <!-- ==========================
    	ABOUT - START
    =========================== -->
    <section id="about" class="content-first">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 hidden-xs scrollpoint sp-effect1"><!-- Profile image -->
                	<img src="/Public/Uploads/1.jpg" class="image-bordered img-responsive" alt="" style="border-radius: 165px;">
                </div><!-- Profile end -->

                <div class="col-md-7 col-sm-6 scrollpoint sp-effect1"><!-- Profile description -->
                	<h3><?php echo ($arr["truename"]); ?></h3>
                  	<p><?php echo ($info["description"]); ?></p>

                    <div class="tweets"><!-- Tweets row -->
                        <!-- Tweets slideshow -->
                             <div class="media">
                                    <div class="pull-left"><i class="fa fa-twitter"></i></div>
                                    <div class="media-body">
                                        <div id="slideshow1" class="carousel slide" data-ride="carousel">
                                              <div class="carousel-inner">
                                               <!-- Slideshow item 1 active -->
                                                  <?php if(is_array($gexing)): foreach($gexing as $k=>$vo): ?><!-- Slideshow item 2 -->
                                                    <?php if($k == 0): ?><div class="item active">
                                                    <?php else: ?>
                                                    <div class="item"><?php endif; ?>
                                                    <span style = "font-size:16px;"><?php echo ($vo); ?><span></i></div>
                                                    <!-- Slideshow item 3 --><?php endforeach; endif; ?>
                                              </div>
                                         </div>
                                    </div>
                             </div>
                       <!-- Tweets slideshow end -->
                    </div><!-- Tweets row end -->
               </div><!-- Profile description end-->

              <div class="col-md-3 col-sm-4 scrollpoint sp-effect2"><!--Timeline-->

                  <div class="timeline">
                      <!-- BLOG POST 1 - START -->
                      <div class="event">
                          <div class="event-info">
                            <div class="date">2012</div>
                          </div>
                      	  <span>我在编程</span>
                      </div> <!-- BLOG POST 1 - END -->

                      <div class="event">
                          <div class="event-info">
                             <div class="date">2013</div>
                          </div>
                      	  <span>我在编程</span>
                      </div> <!-- BLOG POST 1 - END -->

                      <div class="event">
                          <div class="event-info">
                             <div class="date">2014</div>
                          </div>
                      	  <span>我在编程</span>
                      </div> <!-- BLOG POST 1 - END -->

                      <div class="event">
                          <div class="event-info">
                             <div class="date">2015</div>
                          </div>
                      	  <span>我在编程</span>
                      </div> <!-- BLOG POST 1 - END -->

                      <div class="event">
                          <div class="event-info">
                             <div class="date">2016</div>
                          </div>
                      	  <span>还会编程</span>
                      </div> <!-- BLOG POST 1 - END -->

                  </div><!--timeline-->
              </div><!--col 3 end-->

            </div><!--Row about end-->


            <div class="row">
            	<div class="col-md-12 text-center">
                	<a id="skills-toggle" class="btn btn-primary"><i class="fa fa-arrow-circle-o-down"></i> Check my skills</a>
                </div>
            </div>
        </div><!-- Container end-->

        <div id="skills">
            <div class="container">
                <div class="row"><!-- Toogle my skills start -->
                    <div class="col-md-3">
                        <div class="chart" data-percent="73">73% CSS</div>
                    </div>
                    <div class="col-md-3">
                        <div class="chart" data-percent="89">89% Html</div>
                    </div>
                    <div class="col-md-3">
                        <div class="chart" data-percent="83">83% Code</div>
                    </div>
                    <div class="col-md-3">
                        <div class="chart" data-percent="62">62% Design</div>
                    </div>
                </div><!-- Toogle my skills end-->

            </div><!-- Container end-->
        </div>

    </section>
    <!-- ==========================
    	ABOUT - END
    =========================== -->

     <!-- ==========================
    	SERVICER - START
    =========================== -->
    <section id="services" class="content-second">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="scrollpoint sp-effect3">我最擅长的事情</h2>
                    <p class="scrollpoint sp-effect3">活了这么久，肯定是有些拿的出手的本事，你懂得.</p>
                </div>

                <div class="col-md-3 service scrollpoint sp-effect1">
                <img src="/Public/Default/blog/ico5.png" alt="">
                <h3><?php echo ($info["shanchangtitle1"]); ?></h3>
                <p><?php echo ($info["shanchangcontent1"]); ?>.</p>
                </div>


                <div class="col-md-3 service scrollpoint sp-effect1">
                <img src="/Public/Default/blog/ico4.png" alt="">
                <h3><?php echo ($info["shanchangtitle2"]); ?></h3>
                <p><?php echo ($info["shanchangcontent2"]); ?>.</p>
                </div>


                <div class="col-md-3 service scrollpoint sp-effect2">
                <img src="/Public/Default/blog/ico1.png" alt="">
                <h3><?php echo ($info["shanchangtitle3"]); ?></h3>
                <p><?php echo ($info["shanchangcontent3"]); ?>.</p>
                </div>

                <div class="col-md-3 service scrollpoint sp-effect2">
                <img src="/Public/Default/blog/ico3.png" alt="">
                <h3><?php echo ($info["shanchangtitle4"]); ?></h3>
                <p><?php echo ($info["shanchangcontent4"]); ?>.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- ==========================
    	SERVICES - END
    =========================== -->

    <!-- ==========================
    	NUMBERS - START
    =========================== -->
    <section id="separator" class="content-first">
        <div class="container">
            <div class="row scrollpoint sp-effect3">
                <div class="col-sm-2">
                	<i class="fa fa-user"></i>
                    <p><span class="number highlight" data-from="0" data-to="100" data-refresh-interval="10"></span>这里</p>
                </div>
                <div class="col-sm-2">
                	<i class="fa fa-coffee"></i>
                    <p><span class="number highlight" data-from="0" data-to="200" data-refresh-interval="10"></span>什么</p>
                </div>
                <div class="col-sm-2">
                	<i class="fa fa-code"></i>
                    <p><span class="number highlight" data-from="0" data-to="300" data-refresh-interval="10"></span>都没有</p>
                </div>
                <div class="col-sm-2">
                	<i class="fa fa-envelope"></i>
                    <p><span class="number highlight" data-from="0" data-to="400" data-refresh-interval="10"></span>只是</p>
                </div>
                <div class="col-sm-2">
                	<i class="fa fa-phone"></i>
                    <p><span class="number highlight" data-from="0" data-to="500" data-refresh-interval="10"></span>为了</p>
                </div>
                <div class="col-sm-2">
                	<i class="fa fa-facebook"></i>
                    <p><span class="number highlight" data-from="0" data-to="600" data-refresh-interval="10"></span>占地方</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
    	NUMBERS - END
    =========================== -->

     <!-- ==========================
    	SHOWCASE - START
    =========================== -->
    <section id="showcase" class="content-second">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="scrollpoint sp-effect3">我的骄傲作品</h2>
                    <p class="scrollpoint sp-effect3">作为一只代码狗，没有作品怎么和妹子装X？我会乱说？.</p>
                </div>

                <div class="col-lg-6 showcase-text scrollpoint sp-effect1">
                    <div class="row">
                    <!-- Service 1 -->
                    	<div class="col-sm-6 col-md-6 col-lg-12">
                            <div class="media">
                                <div class="pull-left showcase-icon"><i class="fa fa-puzzle-piece"></i></div>
                                <div class="media-body">
                                    <h3 class="media-heading"><?php echo ($info["zuopintitle1"]); ?></h3>
                                    <p><?php echo ($info["zuopincontent1"]); ?>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Service 2 -->
                    	<div class="col-sm-6 col-md-6 col-lg-12">
                            <div class="media">
                                <div class="pull-left showcase-icon"><i class="fa fa-trophy"></i></div>
                                <div class="media-body">
                                   <h3 class="media-heading"><?php echo ($info["zuopintitle2"]); ?></h3>
                                    <p><?php echo ($info["zuopincontent2"]); ?>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Service 3 -->
                    	<div class="col-sm-6 col-md-6 col-lg-12">
                            <div class="media">
                                <div class="pull-left showcase-icon"><i class="fa fa-thumbs-up"></i></div>
                                <div class="media-body">
                                    <h3 class="media-heading"><?php echo ($info["zuopintitle3"]); ?></h3>
                                    <p><?php echo ($info["zuopincontent3"]); ?>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Service 4 -->
                    	<div class="col-sm-6 col-md-6 col-lg-12">
                            <div class="media">
                                <div class="pull-left showcase-icon"><i class="fa fa-arrows"></i></div>
                                <div class="media-body">
                                    <h3 class="media-heading"><?php echo ($info["zuopintitle4"]); ?></h3>
                                    <p><?php echo ($info["zuopincontent4"]); ?>.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="text-center showcase-button">
                   		<a class="btn btn-primary btn-lg" role="button"><i class="fa fa-bolt"></i> See in action</a>
                   </div>
                </div>

                <div class="col-lg-6 col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2 col-lg-offset-0 showcase-carousel hidden-xs scrollpoint sp-effect2">
                    <img src="/Public/Default/blog/imac.png" class="img-responsive" alt="">

                    <div id="carousel-reference" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active"><img src="/Public/Default/blog/image_01.png" alt=""></div>
                            <div class="item"><img src="/Public/Default/blog/image_02.png" alt=""></div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-reference" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
                        <a class="right carousel-control" href="#carousel-reference" data-slide="next"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
    	SHOWCASE - END
    =========================== -->

    <!-- ==========================
    	QUOTES - START
    =========================== -->
    <section id="quotes" class="content-first">
        <div class="container">
            <div class="row scrollpoint sp-effect3">
                <div class="col-sm-8 col-sm-offset-2">
                    <blockquote class="blockquote-reverse">
                        <p><i class="fa fa-quote-left"></i><?php echo ($info["geyan"]); ?></p>
                        <footer><?php echo ($arr["truename"]); ?></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
    	QUOTES - END
    =========================== -->

    <!-- ==========================
    	REFERENCE - START
    =========================== -->
    <section id="reference" class="content-second">
        <h2 class="scrollpoint sp-effect3">我的生活</h2>
        <p class="scrollpoint sp-effect3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in turpis quam. Nulla quis eleifend lectus.</p>
   		<ul class="grid cs-style-4">
				<li>
					<figure class="scrollpoint sp-effect1">
						<div><img src="/Public/Default/blog/ref1.png" alt="img04"></div>
						<figcaption>
							<h3>Lorem ipsum</h3>
							<a href="">Show me</a>
						</figcaption>
					</figure>
				</li>

                <li>
					<figure class="scrollpoint sp-effect3">
						<div><img src="/Public/Default/blog/ref2.png" alt="img04"></div>
						<figcaption>
							<h3>Lorem ipsum</h3>
							<a href="">Show me</a>
						</figcaption>
					</figure>
				</li>

                <li>
					<figure class="scrollpoint sp-effect2">
						<div><img src="/Public/Default/blog/ref3.png" alt="img04"></div>
						<figcaption>
							<h3>Lorem ipsum</h3>
							<a href="">Show me</a>
						</figcaption>
					</figure>
				</li>

                <li>
					<figure class="scrollpoint sp-effect1">
						<div><img src="/Public/Default/blog/ref4.png" alt="img04"></div>
						<figcaption>
							<h3>Lorem ipsum</h3>
							<a href="">Show me</a>
						</figcaption>
					</figure>
				</li>

                <li>
					<figure class="scrollpoint sp-effect3">
						<div><img src="/Public/Default/blog/ref5.png" alt="img04"></div>
						<figcaption>
							<h3>Lorem ipsum</h3>
							<a href="">Show me</a>
						</figcaption>
					</figure>
				</li>

                <li>
					<figure class="scrollpoint sp-effect2">
						<div><img src="/Public/Default/blog/ref6.png" alt="img04"></div>
						<figcaption>
							<h3>Lorem ipsum</h3>
							<a href="">Show me</a>
						</figcaption>
					</figure>
				</li>

			</ul>

	</section>
    <!-- ==========================
    	REFERENCE - END
    =========================== -->

    <!-- ==========================
    	BLOG - START
    =========================== -->
    <section id="blog" class="content-first">
    	<div class="container">
        	<h2 class="scrollpoint sp-effect3">我的文章</h2>
        	<p class="scrollpoint sp-effect3">这里向你展现几篇我的技术文章</p>
        </div>

        <div class="line hidden-xs">
        	<div class="container">
                <div class="row">
                    <div class="col-sm-4"><i class="fa fa-bullhorn"></i></div>
                    <div class="col-sm-4"><i class="fa fa-bullhorn"></i></div>
                    <div class="col-sm-4"><i class="fa fa-bullhorn"></i></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row"><!-- MAIN ROW - Start -->
            	<!-- BLOG POST - Start -->
                <?php if(is_array($zuixinArticle)): foreach($zuixinArticle as $s=>$vo): ?><div class="col-sm-4 scrollpoint sp-effect<?php echo ($s+1); ?>">
                	<div class="blog-post">
                    	<div class="blog-body">
                    		<h3><?php echo (msubstr($vo["title"],0,10,'utf-8',false)); ?></h3>
                        	<p><?php echo (msubstr(strip_tags($vo["content"]),0,150,'utf-8',true)); ?></p>
                        	<a href="<?php echo U('Article/index',array('id'=>$vo['id']));?>" class="btn btn-primary">阅读更多</a>
                        </div>
                        <div class="blog-info">
                        	<a><i class="fa fa-comment"></i><?php echo ($vo["comment"]); ?></a>
                            <a><i class="fa fa-calendar"></i><?php echo (date( "Y-m-d",$vo["ctime"])); ?></a>
                            <a href="javascript:void(0)"><?php echo ($vo["view"]); ?></a>
							<a href="javascript:void(0)"><?php echo ($vo["fname"]); ?></a>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>
                <!-- BLOG POST - End -->




            </div><!-- MAIN ROW - end -->
        </div><!-- CONTAINER - end -->
    </section>
    <!-- ==========================
    	BLOG - END
    =========================== -->

    <!-- ==========================
    	PRICING - START
    =========================== -->

    <!-- ==========================
    	PRICING - END
    =========================== -->

    <!-- ==========================
    	TESTIMONIALS - START
    =========================== -->
    <section id="testimonials" class="content-first">
        <div class="container">
        	<h2 class="scrollpoint sp-effect3 text-center">TA对我的评价</h2>
        	<p class="scrollpoint sp-effect3 text-center">在这里你可以看到我身边的人，对我的评价如何！</p>
            <div class="row">

                <!-- TESTIMONIAL 1 - START -->
                <div class="col-sm-6 scrollpoint sp-effect1">
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object img-circle" src="/Public/Default/blog/tom.png" alt=""></a>
                        <div class="media-body">
                            <h4 class="media-heading">男孩的评价</h4>
                            <span>Webdesigner</span>
                            <p><?php echo ($info["pingjianan"]); ?></p>
                        </div>
                    </div>
                </div>
                <!-- TESTIMONIAL 1 - END -->

                <!-- TESTIMONIAL 2 - START -->
                <div class="col-sm-6 scrollpoint sp-effect2">
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object img-circle" src="/Public/Default/blog/suzanne.png" alt=""></a>
                        <div class="media-body">
                            <h4 class="media-heading">女孩的评价</h4>
                            <span>Webdesigner</span>
                            <p><?php echo ($info["pingjianv"]); ?></p>
                        </div>
                    </div>
                </div>
                <!-- TESTIMONIAL 2 - END -->

            </div>

        </div>
    </section>
    <!-- ==========================
    	TESTIMONIALS - END
    =========================== -->

    <!-- ==========================
    	CONTACT - START
    =========================== -->
    <section id="contact" class="content-first">
        <div class="container">
        	<h2 class="scrollpoint sp-effect3">留言给我</h2>
            <div class="contact-alert">
            </div>
            <div class="row">
            <!-- PRICING TABLE FIRST - start -->
                <div class="col-sm-12">
                	<img src="/Public/Default/blog/macbook.png" class="img-responsive hidden-xs" alt="">

                    <div class="macbook-inner black">
                    	<div class="row scrollpoint sp-effect4">
                        	<div class="col-sm-8">
                            	<h3 class="hidden-xs">填写一个留言</h3>


                                <form role="form" id="contactForm" action="<?php echo U('Blog/send',array('id'=>$_GET['id']));?>" method="post">

                                    <div class="form-group control-group">
                                        <div class="controls">
                                            <p class="help-block"></p>
                                            <input class="form-control" placeholder="您的称呼" id="firstname" data-validation-required-message="请填写您的称呼." aria-invalid="false" type="text" name = "name" required>
                                        </div>
                                    </div>

                                    <div class="form-group control-group">
                                        <div class="controls">
                                            <p class="help-block"></p>
                                            <input class="form-control" placeholder="您的电话" id="lastname" data-validation-required-message="请填写您的电话." aria-invalid="false" type="text" name = "tel">
                                        </div>
                                    </div>

                                    <div class="form-group control-group">
                                        <div class="controls">
                                            <p class="help-block"></p>
                                            <input class="form-control" placeholder="您的邮箱" id="email" data-validation-required-message="请填写您的邮箱." aria-invalid="false" type="email" name = "email" required>
                                        </div>
                                    </div>

                                    <div class="form-group control-group">
                                        <div class="controls">
                                            <p class="help-block"></p>
                                            <textarea class="form-control" placeholder="留言信息" id="message" data-validation-required-message="请填写您的留言信息." aria-invalid="false" name = "content" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" required>发送留言</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-sm-4">

                            <img src="/Public/Uploads/<?php echo ($userPic); ?>" class="contact-image image-responsive hidden-xs hidden-sm" alt="" >
                            	<div class="contact-info">
                                	<p>如果您对我有想法</p>
                                    <p>如果您对我有意见</p>
                                    <p>如果您对我有建议</p>
                                    <p>都可以在这里留言</p>
                                </div>
                            </div>
                    	</div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
    	CONTACT - END
    =========================== -->

    <!-- ==========================
    	FOOTER - START
    =========================== -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 scrollpoint sp-effect3">

               			<ul class="brands brands-inline">
                            <li><a href="#"><i class="fa fa-facebook  hi-icon-effect-8"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    <p>© 这里是<?php echo ($arr["truename"]); ?>的主页，页面来自于： <a href="http://carolcoral.cn" target="_blank" class="btn btn-footer">Carol</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
    	FOOTER - END
    =========================== -->

    <!-- ==========================
    	JS
    =========================== -->
	<script src="/Public/Default/blog/jquery-latest.js"></script>
	<script src="/Public/Default/blog/bootstrap.js"></script>
    <script src="/Public/Default/blog/creative-brands.js"></script>
    <script src="/Public/Default/blog/jquery.js"></script>
    <script src="/Public/Default/blog/modernizr.js"></script>
    <script src="/Public/Default/blog/waypoints.js"></script>
    <script src="/Public/Default/blog/jquery_002.js"></script>
    <script src="/Public/Default/blog/jqBootstrapValidation.js"></script>
    <script src="/Public/Default/blog/custom.js"></script>

</body></html>