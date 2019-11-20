# 个人博客系统 

>访问地址：[http://carolcoral.cn](http://carolcoral.cn)

## 1.首页访问路径：

1. localhost:// 首页顶部导航文件位置：/Application/Home/View/Default/Public/homeheader.html 

2. 首页底部导航文件位置：/Application/Home/View/Default/Public/homefooter.html 

3. 用户顶部导航文件位置：/Application/Home/View/Default/Public/userheader.html 

4. 用户底部导航文件位置：/Application/Home/View/Default/Public/userfooter.html

## 2.管理员访问 

1. 管理员功能控制文件路径：/Application/Admin/Controller/ 

2. 管理员界面访问文件路径：/Application/Admin/View/

3. 数据库控制 数据库访问文件路径：~/Application/Common/Conf/config.php 

        'DB_TYPE' => 'mysql', // 数据库类型 
        'DB_HOST' => 'localhost', // 服务器地址 
        'DB_NAME' => 'blog', // 数据库名 
        'DB_USER' => 'root', // 用户名 
        'DB_PWD' => '947752894', // 密码 
        'DB_PORT' => '3306', // 端口
        'DB_PREFIX' => 'blog_', // 数据库表前缀

## 4.数据缓存 

>系统数据缓存文件保存在~/Application/Runtime文件夹中

## 5.系统操作日志 

1. 系统缓存日志保存在~/logreport文件夹中 

2. 系统详细日志保存路径为：~/Application/Runtime/Logs/

## 6.数据库备份 

>可以在登录管理员账户后的后台页面选择备份当前系统数据库；
>备份的数据库文件保存在~/Database文件夹中

## 7.用户账户 

        注册用户账户：947752894@qq.com 
        注册用户密码：liu947752894 
        系统管理员账户：admin 
        系统管理员口令：carol 
        系统管理员密码：947752894
