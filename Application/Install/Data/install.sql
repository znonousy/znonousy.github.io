-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-09-20 08:16:10
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lcm`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog_article`
--

CREATE TABLE IF NOT EXISTS `blog_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(40) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `pic` varchar(50) NOT NULL COMMENT '图片',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `fid` int(11) NOT NULL COMMENT '分类ID',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `edittime` int(11) NOT NULL COMMENT '修改时间',
  `view` int(11) NOT NULL COMMENT '查看次数',
  `status` int(11) NOT NULL COMMENT '当前状态',
  `mp3` varchar(200) DEFAULT NULL,
  `istop` int(11) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `viewtumb` int(11) NOT NULL DEFAULT '0' COMMENT '是否显示封面 0显示 1不显示',
  `articlepassword` varchar(50) DEFAULT NULL COMMENT '文章查看密码',
  `video` varchar(500) DEFAULT NULL COMMENT '视频连接',
  `file` varchar(500) DEFAULT NULL COMMENT '附件地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- 转存表中的数据 `blog_article`
--

INSERT INTO `blog_article` (`id`, `title`, `content`, `pic`, `uid`, `fid`, `ctime`, `edittime`, `view`, `status`, `mp3`, `istop`, `viewtumb`, `articlepassword`, `video`, `file`) VALUES
(13, '我在这里  你在哪里？', '我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？我在这里&nbsp; 你在哪里？\r\n\r\n                                    ', '2016-06-30/bg-16.jpg', 1, 2, 1439316541, 1439316541, 583, 0, '', 1, 0, '', '', '/lichengmi/Public/Uploads/2016-08-18/57b5bef45fe84.rar'),
(24, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 17, 0, 'zhanwei', 0, 0, '', '', ''),
(25, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(26, '阿萨达萨达撒大阿斯顿', '<p>阿斯顿阿斯顿撒旦大阿斯顿</p><p>撒</p><p>das的</p><p>撒旦</p><p>大阿斯顿撒旦</p><p>阿斯顿<img src="/lichengmi/Public/Uploads/2016-06-30/5774e8755e197.gif" alt="check.gif" height="92" width="92"></p><blockquote><p>阿斯顿撒的</p><p>阿斯顿啊说的话卡萨丁爱迪生</p><p>爱迪生阿斯顿撒旦</p></blockquote><p><br></p><p><b>爱迪生阿斯顿</b></p><p><b><br></b></p><p><b>阿斯顿撒旦撒的<span style="color: rgb(226, 139, 65);">彩色文字</span></b></p><p><b><span style="color: rgb(226, 139, 65);"><br></span></b></p><p><b><span style="color: rgb(226, 139, 65);">阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿</span></b><br></p>', '2016-06-30/bg-19.jpg', 1, 2, 1467279524, 1467279524, 22, 0, 'zhanwei', 0, 0, '', '', ''),
(27, 'asd sad asd dsa ', '<pre><code class="lang-php">萨达省大声的撒旦\r\n&lt;?php\r\n&nbsp; echo "asdasdasdasd";\r\n\r\n?&gt;\r\n</code></pre><p>asd asd asd sad sad <br></p>', '2016-06-30/bg-20.jpg', 1, 2, 1467280380, 1467280380, 20, 0, 'zhanwei', 0, 0, '', '', ''),
(28, '阿萨达萨达阿斯顿阿斯顿阿斯顿', '<p>阿斯顿爱迪生阿斯顿阿斯顿阿斯顿撒旦<br></p>', '2016-06-30/bg-21.jpg', 1, 2, 1467282431, 1467282431, 13, 0, 'zhanwei', 0, 0, '你懂的', '', ''),
(29, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 41, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(30, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 39, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(31, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 39, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(32, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 39, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(33, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(34, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(35, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(36, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(37, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(38, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(39, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(40, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(41, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(42, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(43, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(44, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(45, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(46, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(47, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(48, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(49, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(50, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(51, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(52, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 6, 0, 'zhanwei', 0, 0, '', '', ''),
(53, '阿萨达萨达大多数阿斯顿', '<p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在</p><p>里程密一直与你同在里程密一直与你同在</p>', '2016-06-30/bg-18.jpg', 1, 8, 1466576276, 1466576276, 9, 0, 'zhanwei', 0, 0, '', '', ''),
(54, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 18, 0, 'zhanwei', 0, 0, '', '', ''),
(55, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 39, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(56, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 40, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(57, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 39, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(58, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 39, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(59, '撒旦撒旦阿斯顿', '<p>撒旦阿斯顿撒旦撒旦撒旦大<br></p>', '2016-06-30/bg-22.jpg', 1, 8, 1467282442, 1467282442, 39, 0, 'zhanwei', 0, 1, '阿斯顿', '', ''),
(60, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 17, 0, 'zhanwei', 0, 0, '', '', ''),
(61, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 22, 0, 'zhanwei', 0, 0, '', '', ''),
(62, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 19, 0, 'zhanwei', 0, 0, '', '', ''),
(63, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 19, 0, 'zhanwei', 0, 0, '', '', ''),
(64, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 19, 0, 'zhanwei', 0, 0, '', '', ''),
(65, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 17, 0, 'zhanwei', 0, 0, '', '', ''),
(66, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 17, 0, 'zhanwei', 0, 0, '', '', ''),
(67, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 17, 0, 'zhanwei', 0, 0, '', '', ''),
(68, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 19, 0, 'zhanwei', 0, 0, '', '', ''),
(69, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 19, 0, 'zhanwei', 0, 0, '', '', ''),
(70, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 25, 0, 'zhanwei', 0, 0, '', '', ''),
(71, '阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿阿斯顿', '<pre style="" class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><code><span class="pln">__ROOT__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前网站的地址（不含域名）</span><span class="pln"> </span></code></li><li class="L1"><code><span class="pln">__APP__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前应用的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L2"><code><span class="pln">__MODULE__</span><span class="pun">：会替换成当前模块的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L3"><code><span class="pln">__CONTROLLER__</span><span class="pun">（</span><span class="pln">__</span><span class="pun">或者</span><span class="pln">__URL__ </span><span class="pun">兼容考虑）：</span><span class="pln"> </span><span class="pun">会替换成当前控制器的</span><span class="pln">URL</span><span class="pun">地址（不含域名）</span></code></li><li class="L4"><code><span class="pln">__ACTION__</span><span class="pun">：会替换成当前操作的</span><span class="pln">URL</span><span class="pun">地址</span><span class="pln"> </span><span class="pun">（不含域名）</span></code></li><li class="L5"><code><span class="pln">__SELF__</span><span class="pun">：</span><span class="pln"> </span><span class="pun">会替换成当前的页面</span><span class="pln">URL</span></code></li><li class="L6"><code><span class="pln">__PUBLIC__</span><span class="pun">：会被替换成当前网站的公共目录</span><span class="pln"> </span><span class="pun">通常是</span><span class="pln"> </span><span class="pun">/</span><span class="typ">Public</span><span class="pun">/</span></code></li></ol></pre><p><br/></p>', '2016-06-30/bg-17.jpg', 1, 2, 1466576257, 1466576257, 54, 0, 'zhanwei', 0, 0, '', '', ''),
(72, '', '', 'thumb.jpg', 1, 2, 1471350998, 1471350998, 1, 0, 'zhanwei', 0, 0, '', NULL, NULL),
(73, '', '', 'thumb.jpg', 1, 2, 1471351061, 1471351061, 1, 0, 'zhanwei', 0, 0, '', NULL, NULL),
(74, '', '', 'thumb.jpg', 1, 2, 1471352876, 1471352876, 1, 0, 'zhanwei', 0, 0, '', NULL, NULL),
(75, '', '<p>啊啊啊啊<span style="color: rgb(227, 55, 55);">啊啊啊啊啊啊啊啊啊</span><br></p>', 'thumb.jpg', 1, 2, 1471352886, 1471352886, 1, 0, 'zhanwei', 0, 0, '', NULL, NULL),
(76, '阿萨达萨达阿斯顿阿斯顿阿斯顿', '<p><img alt="Image"><img src="/lichengmi/Public/Uploads/2016-08-16/57b311949158a.gif" alt="loading.gif" height="140" width="130"><br></p>', 'thumb.jpg', 1, 8, 1471353244, 1471353244, 4, 0, 'zhanwei', 0, 0, '啊', NULL, NULL),
(77, '', '', 'thumb.jpg', 1, 2, 1471356432, 1471356432, 2, 0, 'zhanwei', 0, 0, '', NULL, NULL),
(78, '', '', 'thumb.jpg', 1, 2, 1471357041, 1471357041, 2, 0, 'zhanwei', 0, 0, '', NULL, NULL),
(79, 'asdasdasd', '<p>sadasdasdasd<br></p>', 'thumb.jpg', 1, 2, 1471528712, 1471528712, 2, 0, 'http://asdasd.com', 0, 0, '', 'http://ww.baidu.com', '/lichengmi/Public/Uploads/2016-08-18/57b5bef45fe84.rar');

-- --------------------------------------------------------

--
-- 表的结构 `blog_blogliuyan`
--

CREATE TABLE IF NOT EXISTS `blog_blogliuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `ctime` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `blog_blogliuyan`
--

INSERT INTO `blog_blogliuyan` (`id`, `uid`, `name`, `tel`, `email`, `content`, `ctime`, `ip`) VALUES
(1, 1, '李传明', '13552875303', '731371050@qq.com', '阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款阿什顿卡收到款', 1439044923, '127.0.0.1'),
(3, 0, '1111', '111', '7313711012350@qq.com', '11', 1457970754, '127.0.0.1'),
(4, 1, '测试', '13552875303', '731371050@qq.com', '撒旦阿斯顿撒旦阿斯顿撒旦', 1470924449, '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的结构 `blog_code`
--

CREATE TABLE IF NOT EXISTS `blog_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(30) NOT NULL COMMENT '邀请码',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0未使用 1 使用',
  `user` varchar(40) DEFAULT NULL COMMENT '使用用户',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=162 ;

--
-- 转存表中的数据 `blog_code`
--

INSERT INTO `blog_code` (`id`, `code`, `status`, `user`) VALUES
(1, 'hkjchkagyaisu', 1, '7313710150@qq.com'),
(160, '0', 0, ''),
(161, 'asdasd', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `blog_comment`
--

CREATE TABLE IF NOT EXISTS `blog_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '评论者姓名',
  `email` varchar(30) NOT NULL COMMENT '评论者邮箱',
  `content` varchar(200) NOT NULL COMMENT '评论者内容',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '评论者ID',
  `replay` int(11) DEFAULT NULL COMMENT '评论谁',
  `ctime` int(11) NOT NULL COMMENT '评论时间',
  `aid` int(11) NOT NULL COMMENT '文章ID',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0显示 1不显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- 转存表中的数据 `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `name`, `email`, `content`, `uid`, `replay`, `ctime`, `aid`, `status`) VALUES
(38, '111', 'xx@qq.com', 'asdasdasdasdkhasdkhsakdhkasdhkashdkash撒旦看见啊是的快结婚撒旦看见啊是的好看见啊是的好看撒好的看撒好的空间撒好的空间撒好的看撒好的看撒好的凯撒的话空间撒好的看见啊是的', 13, 0, 1453393489, 13, 0),
(39, '111', 'xx@qq.com', 'asdasd', 13, 0, 1453393498, 13, 0),
(40, 'MonkeyCode', '731371050@qq.com', 'asdasd', 1, 0, 1453393513, 13, 0),
(41, 'asdasd', 'asdasd@qq.com', '\nStrong Strong on 21 May 2015, 11:40AM\nCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,turpis. ', 0, 0, 1453393529, 13, 0),
(42, 'MonkeyCode', '731371050@qq.com', '123', 1, 0, 1454678768, 13, 0),
(52, 'asdasd', 'asdasd@qq.com', 'asdasdasdasd', 0, 0, 1459696620, 13, 0),
(53, '阿萨德阿萨德', '731371050@qq.com', '阿萨德', 0, 0, 1462375083, 13, 1),
(54, 'MonkeyCode', '731371050@qq.com', 'sadasdasd', 1, 0, 1466581900, 24, 0),
(55, 'MonkeyCode', '731371050@qq.com', '阿萨达萨达撒旦撒旦', 1, 4, 1466585775, 13, 0),
(56, 'MonkeyCode', '731371050@qq.com', 'asdasd asd ', 1, 0, 1471262878, 71, 0),
(57, 'MonkeyCode', '731371050@qq.com', '阿萨达萨达阿斯顿', 1, 2, 1471272780, 13, 0),
(58, 'MonkeyCode', '731371050@qq.com', '测试回复', 1, 2, 1471272827, 13, 0),
(59, 'MonkeyCode', '731371050@qq.com', '这里是一个测试评论', 1, 0, 1471273712, 13, 0),
(60, 'MonkeyCode', '731371050@qq.com', '测试回复 哈哈哈哈哈哈', 1, 11, 1471273747, 13, 0),
(61, 'MonkeyCode', '731371050@qq.com', 'ceshiping;lun', 1, 57, 1471277712, 13, 0),
(62, 'aaa', 'ass@qq.com', 'asasas', 0, 59, 1471278994, 13, 0),
(63, 'asdasdasd', '731371050@qq.com', 'asdasd', 0, 59, 1471279358, 13, 0),
(64, '阿斯顿', '731371050@qq.com', '评论啊这里是一个测试评论', 0, 59, 1471281237, 13, 0),
(65, 'admin', 'lcm1475@hotmail.com', '我叫祁腾飞', 0, 0, 1471281335, 13, 0),
(66, '美国', '7313710150@qq.com', '回复祁腾飞', 0, 65, 1471281358, 13, 0),
(67, '3', 'lcm14752@gmail.com', 'asdasdasd', 0, 0, 1471282619, 29, 0);

-- --------------------------------------------------------

--
-- 表的结构 `blog_email_set`
--

CREATE TABLE IF NOT EXISTS `blog_email_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `smtpserver` varchar(200) NOT NULL COMMENT 'SMTP服务器',
  `smtpserverport` int(11) NOT NULL COMMENT 'SMTP服务器端口',
  `smtpusermail` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户邮箱',
  `smtpuser` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户帐号',
  `smtppass` varchar(200) NOT NULL COMMENT 'SMTP服务器的用户密码',
  `reg_set_admin` int(11) NOT NULL COMMENT '用户注册 管理员是否收到邮件 0是 1不是',
  `reg_set_user` int(11) NOT NULL COMMENT '用户注册 用户是否收到邮件 0是 1不是',
  `send_article_set` int(11) NOT NULL COMMENT '用户发表文章  管理员是否收到邮件 0是 1 不是',
  `comment_set` int(11) NOT NULL COMMENT '用户回复 管理员是否收到邮件 0是 1不是',
  `message_set` int(11) NOT NULL COMMENT '收到留言是否发邮件 0是 1不是',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `blog_email_set`
--

INSERT INTO `blog_email_set` (`id`, `smtpserver`, `smtpserverport`, `smtpusermail`, `smtpuser`, `smtppass`, `reg_set_admin`, `reg_set_user`, `send_article_set`, `comment_set`, `message_set`) VALUES
(1, 'smtp.163.com', 25, 'zhaodong1475@163.com', 'zhaodong1475@163.com', 'zxc123456', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blog_email_type`
--

CREATE TABLE IF NOT EXISTS `blog_email_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_user_title` varchar(200) NOT NULL COMMENT '用户注册用户收到邮件的标题',
  `reg_user_content` text NOT NULL COMMENT '用户注册用户收到邮件的内容',
  `reg_admin_title` varchar(200) NOT NULL COMMENT '用户注册管理员收到邮件的标题',
  `reg_admin_content` text NOT NULL COMMENT '用户注册管理员收到邮件的内容',
  `send_article_title` varchar(200) NOT NULL COMMENT '用户发文章管理员收到邮件的标题',
  `send_article_content` text NOT NULL COMMENT '用户发文章管理员收到邮件的内容',
  `send_comment_title` varchar(200) NOT NULL COMMENT '用户评论管理员收到邮件的标题',
  `send_comment_content` text NOT NULL COMMENT '用户评论管理员收到邮件的内容',
  `send_message_title` varchar(200) NOT NULL COMMENT '用户收到留言用户邮件的标题',
  `send_message_content` text NOT NULL COMMENT '用户收到留言用户邮件内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `blog_email_type`
--

INSERT INTO `blog_email_type` (`id`, `reg_user_title`, `reg_user_content`, `reg_admin_title`, `reg_admin_content`, `send_article_title`, `send_article_content`, `send_comment_title`, `send_comment_content`, `send_message_title`, `send_message_content`) VALUES
(1, '恭喜您注册本站', '<p></p><p>123asdasd</p><p><br/></p><p><br/></p><p><strong>111阿萨德阿萨德阿萨德阿萨德</strong><br/></p><p></p>', '有人注册本网站了', '<p></p><p>撒的阿萨德阿萨德撒的阿萨德<br/></p><p></p>', '有人发表文章了呦', '<p></p><p></p><p>阿萨德按时打算打算的阿萨德阿萨德<img src="http://img.baidu.com/hi/bobo/B_0004.gif" _src="http://img.baidu.com/hi/bobo/B_0004.gif"/>a</p><p></p><p></p>', '亲爱的管理员 有人评论文章了呦11122', '<p></p><p></p><p></p><p></p><p>阿萨德很卡金士顿贺卡上接电话卡接收到华盛顿安达市安达市阿萨德1111221</p><p></p><p></p><p></p><p></p>', '亲爱的管理员有用户留言了啊！', '<p></p><p>9<img src="http://img.baidu.com/hi/jx2/j_0002.gif" _src="http://img.baidu.com/hi/jx2/j_0002.gif"/></p><p>阿萨德安静收<strong>到货卡收到后卡萨达加</strong></p><p><strong>阿萨德阿萨德阿萨德安达</strong>市</p><p>阿萨德那就是的很快就阿萨德阿萨德阿萨德<br/></p><p></p>');

-- --------------------------------------------------------

--
-- 表的结构 `blog_fenlei`
--

CREATE TABLE IF NOT EXISTS `blog_fenlei` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(30) NOT NULL COMMENT '分类名称',
  `fid` int(11) NOT NULL COMMENT '父级ID',
  `type` int(11) NOT NULL COMMENT '分类样式',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '分类排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `blog_fenlei`
--

INSERT INTO `blog_fenlei` (`id`, `name`, `fid`, `type`, `sort`) VALUES
(1, '技术', 0, 2, 0),
(2, 'PHP', 1, 5, 0),
(3, '音乐', 0, 1, 200),
(8, 'Css', 1, 3, 0),
(10, '音乐分享', 3, 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `blog_friendlink`
--

CREATE TABLE IF NOT EXISTS `blog_friendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `content` varchar(200) NOT NULL COMMENT '描述',
  `ctime` int(11) NOT NULL COMMENT '时间',
  `url` varchar(100) NOT NULL COMMENT '链接',
  `type` varchar(20) NOT NULL COMMENT '样式',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `blog_friendlink`
--

INSERT INTO `blog_friendlink` (`id`, `title`, `content`, `ctime`, `url`, `type`) VALUES
(1, '斗图啊', '斗图啊是一个在线制作搞笑表情的网站', 1454596882, 'http://www.doutua.com/', 'info'),
(23, '斗图啊', '斗图啊是一个在线制作搞笑表情的网站', 1454596882, 'http://www.doutua.com/', 'info');

-- --------------------------------------------------------

--
-- 表的结构 `blog_gonggao`
--

CREATE TABLE IF NOT EXISTS `blog_gonggao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` varchar(220) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `blog_gonggao`
--

INSERT INTO `blog_gonggao` (`id`, `title`, `content`, `ctime`) VALUES
(2, '阿萨德阿萨德阿萨德', ' 撒的阿萨德阿萨德阿萨德阿萨德阿萨德奥迪阿萨德阿萨德撒的撒的1111111111', 0);

-- --------------------------------------------------------

--
-- 表的结构 `blog_jingli`
--

CREATE TABLE IF NOT EXISTS `blog_jingli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `kouling` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0;

--
-- 转存表中的数据 `blog_jingli`
--


-- --------------------------------------------------------

--
-- 表的结构 `blog_liuyan`
--

CREATE TABLE IF NOT EXISTS `blog_liuyan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(10) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(100) NOT NULL,
  `ctime` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- 转存表中的数据 `blog_liuyan`
--

INSERT INTO `blog_liuyan` (`id`, `color`, `ip`, `title`, `content`, `ctime`, `name`) VALUES
(50, '#F7A54A', '127.0.0.1', 'ASDASDASD', 'asd', 1462370318, 'asd'),
(51, '#1A7BB9', '127.0.0.1', 'a', 'a', 1462373260, 'aaa'),
(53, '#1A7BB9', '127.0.0.1', 'asdasdasd', 'asdasd', 1469969421, 'asdasd'),
(54, '#EC4758', '127.0.0.1', 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1469969445, 'aaaaaaaaaaaaaaaaaaaa'),
(55, '#000000', '127.0.0.1', 'asdasdasdasd', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\n\r\naaaaaaaaaaaaaaaaaaaa', 1469969463, 'asdsad');

-- --------------------------------------------------------

--
-- 表的结构 `blog_site`
--

CREATE TABLE IF NOT EXISTS `blog_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(200) NOT NULL COMMENT '网站标题',
  `keywords` text NOT NULL COMMENT '网站关键字',
  `description` text NOT NULL COMMENT '网站描述',
  `logo` varchar(200) NOT NULL COMMENT '网站LOGO',
  `articleSatus` int(11) NOT NULL COMMENT '0 无需审核 1 需要审核',
  `userStatus` int(11) NOT NULL COMMENT '0无需注册码 1需要注册码',
  `admin_email` varchar(100) NOT NULL COMMENT '管理员邮箱',
  `set_content` varchar(50) NOT NULL COMMENT '副标题',
  `name` varchar(50) NOT NULL COMMENT '网站名称',
  `statistics` text NOT NULL COMMENT '网站统计代码',
  `code` text NOT NULL COMMENT '邀请码说明',
  `friend_link` text NOT NULL COMMENT '友情链接说明',
  `icp` varchar(600) NOT NULL COMMENT 'ICP备案号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `blog_site`
--

INSERT INTO `blog_site` (`id`, `title`, `keywords`, `description`, `logo`, `articleSatus`, `userStatus`, `admin_email`, `set_content`, `name`, `statistics`, `code`, `friend_link`, `icp`) VALUES
(1, '里程密开源博客系统', '里程密|ThinkPHP开源博客系统456', '这里是一个网站描述11asd', '2016-07-31/579dfd09b7bad.png', 0, 0, '731371050@qq.com', '阿萨德阿萨德1', '里程密', '<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id=''cnzz_stat_icon_1256104530''%3E%3C/span%3E%3Cscript src=''" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1256104530'' type=''text/javascript''%3E%3C/script%3E"));</script>', '正如本站的名称一样，里程密，一个程序员里程的秘密，所以我们更希望这里是一个和谐干净的程序员呆的地方，\r\n而不希望这里像菜市场一样杂乱无章. ', '使用里程密开源博客系统 并且保持友情链接的网站 可以获得本站邀请码一枚和友情链接\r\n请把你的网站发送给管理员邮箱:lcm1475@aliyun.com 或者把你的网站信息发送给群主\r\n稍后就会添加上你网站的友情链接 ', '<a href = "www.baidu.com">asd</a>');

-- --------------------------------------------------------

--
-- 表的结构 `blog_slides`
--

CREATE TABLE IF NOT EXISTS `blog_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `blog_slides`
--

INSERT INTO `blog_slides` (`id`, `title`, `pic`, `url`, `ctime`) VALUES
(1, '测试幻灯片', '2016-06-30/bg-20.jpg', 'http://www.baidu.com/', 1448973450),
(3, 'asdasdasd', '2016-06-30/bg-19.jpg', 'asdasd', 1466610321);

-- --------------------------------------------------------

--
-- 表的结构 `blog_user`
--

CREATE TABLE IF NOT EXISTS `blog_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `email` varchar(40) NOT NULL COMMENT '用户邮箱',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `lasttime` int(11) NOT NULL COMMENT '上次登录时间',
  `ip` varchar(50) NOT NULL COMMENT '注册IP地址',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态 0启用 1禁用',
  `truename` varchar(30) NOT NULL DEFAULT '里程密' COMMENT '昵称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `blog_user`
--

INSERT INTO `blog_user` (`id`, `email`, `password`, `ctime`, `lasttime`, `ip`, `status`, `truename`) VALUES
(1, '731371050@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 1438876696, 1474284412, '127.0.0.1', 0, 'MonkeyCode'),
(2, '7313710150@qq.com', '7555051b6d8a2dca27a29f9cb0d2e3a6', 1438876849, 0, '127.0.0.1', 0, 'asdasdasd'),
(3, '73137105120@qq.com', '39ee488c7696d8f3ee3456218666a3c9', 1439019702, 0, '127.0.0.1', 0, 'admin'),
(4, '12@qq.com', '9fe8593a8a330607d76796b35c64c600', 1448987693, 0, '127.0.0.1', 0, '678'),
(5, '456@qq.com', '49f0bad299687c62334182178bfd75d8', 1448987973, 0, '127.0.0.1', 0, 'asd'),
(6, 'qqq@qq.com', '7815696ecbf1c96e6894b779456d330e', 1448988041, 0, '127.0.0.1', 0, 'aaaaaa'),
(7, '22@qq.com', 'b6d767d2f8ed5d21a44b0e5886680cb9', 1448988121, 0, '127.0.0.1', 0, '22'),
(8, 'qq@qq.com', '202cb962ac59075b964b07152d234b70', 1450795590, 0, '127.0.0.1', 0, '123'),
(9, '731371012350@qq.com', '4297f44b13955235245b2497399d7a93', 1452020081, 0, '127.0.0.1', 0, '123123123'),
(10, '7313711012350@qq.com', '202cb962ac59075b964b07152d234b70', 1452020105, 0, '127.0.0.1', 0, '1231231232'),
(11, 'asdxsad@qq.com', '4297f44b13955235245b2497399d7a93', 1452020148, 0, '127.0.0.1', 1, '321ss'),
(12, '123@123.com', '202cb962ac59075b964b07152d234b70', 1453392488, 0, '127.0.0.1', 1, '1231231231111');

-- --------------------------------------------------------

--
-- 表的结构 `blog_userinfo`
--

CREATE TABLE IF NOT EXISTS `blog_userinfo` (
  `uid` int(11) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `biaoqian` varchar(200) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `gexing` varchar(250) DEFAULT NULL,
  `shanchangtitle1` varchar(30) DEFAULT NULL,
  `shanchangtitle2` varchar(30) DEFAULT NULL,
  `shanchangtitle3` varchar(30) DEFAULT NULL,
  `shanchangtitle4` varchar(30) DEFAULT NULL,
  `shanchangcontent1` varchar(250) DEFAULT NULL,
  `shanchangcontent2` varchar(250) DEFAULT NULL,
  `shanchangcontent3` varchar(250) DEFAULT NULL,
  `shanchangcontent4` varchar(250) DEFAULT NULL,
  `zuopintitle1` varchar(30) DEFAULT NULL,
  `zuopintitle2` varchar(30) DEFAULT NULL,
  `zuopintitle3` varchar(30) DEFAULT NULL,
  `zuopintitle4` varchar(30) DEFAULT NULL,
  `zuopincontent1` varchar(90) DEFAULT NULL,
  `zuopincontent2` varchar(90) DEFAULT NULL,
  `zuopincontent3` varchar(90) DEFAULT NULL,
  `zuopincontent4` varchar(90) DEFAULT NULL,
  `zuopinpic` varchar(255) DEFAULT NULL,
  `geyan` varchar(100) DEFAULT NULL,
  `pingjianan` varchar(200) DEFAULT NULL,
  `pingjianv` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blog_userinfo`
--

INSERT INTO `blog_userinfo` (`uid`, `pic`, `biaoqian`, `description`, `gexing`, `shanchangtitle1`, `shanchangtitle2`, `shanchangtitle3`, `shanchangtitle4`, `shanchangcontent1`, `shanchangcontent2`, `shanchangcontent3`, `shanchangcontent4`, `zuopintitle1`, `zuopintitle2`, `zuopintitle3`, `zuopintitle4`, `zuopincontent1`, `zuopincontent2`, `zuopincontent3`, `zuopincontent4`, `zuopinpic`, `geyan`, `pingjianan`, `pingjianv`) VALUES
(3, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 'UserPic/1_big.jpg', '逗比,123123123不装逼会死星人,照镜子会被自己迷住,帅比', '本人学识渊博、经验丰富，代码风骚、效率恐怖，c/c++、java、php无不精通，熟练掌握各种框架，深山苦练20年，一天只睡3个小时，电话通知出bug后秒登vpn，千里之外定位问题，瞬息之间修复上线，本人身体强壮，健步如飞，可连续编程100小时不休息，讨论技术方案5小时不喝水，上至带项目、出方案，下至盗账号、威胁pm，学校不支持编程已辍学，家人不支持编程已断绝关系，老婆不支持编程已离婚，小孩不支持编程已送孤儿院，备用电源百兆光纤永不断电断网，门口已埋雷无人打扰， 现本人求一份it公司端茶递水工作', '一个想法会有很多人想到并且去做 而你成功的重点在于没有人想比你把这件事做的更好！', '撸管', '打屁', 'PHP写代码', '睡觉', '可以360度花式撸管，曾经运用360无死角撸管招式或者吉尼斯撸管大赛冠军。', '最喜欢的就是扯皮了，小嘴啪啪啪的不停，一个矿泉水，一包瓜子，别提多开心了。', 'PHP是什么？PHP顾名思义，就是拍黄片的意思，好了，说正经的，PHP是一门语言，讲究说学逗唱...........', '睡觉是世界上最舒服的事情，当然了。无论两个人睡，或者一个人睡，都挺舒服的，两个人可以你懂得，一个人可以睡懒觉。想想都爽啊~', '百度', '谷歌', 'Facebook', 'YouTube', '百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的，百度是我做的', '谷歌也是我做的，谷歌也是我做的，谷歌也是我做的，谷歌也是我做的谷歌也是我做的谷歌也是我做的谷歌也是我做的，谷歌也是我做的，', 'Facebook是我的，Facebook是我的，Facebook是我的，Facebook是我的，Facebook是我的，Facebook是我的，Facebook是我的，Facebo', 'YouTube是我的，YouTube是我的，YouTube是我的，YouTube是我的，YouTube是我的，YouTube是我的，YouTube是我的，YouTube是我的，Yo', '', '如果一个男人把撸管的时间放在奋斗上，那么一定有女人愿意帮你撸管。', '长的特别帅，人品也非常好，学识渊博，经验丰富，代码风骚，效率恐怖....我说完了，能把枪拿开了么？', '长的帅这个就不用说了，主要是特别有气质，真想嫁给他，给他生一堆小猴子，我也说完了，能把坦克开走了么？'),
(4, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'default.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
