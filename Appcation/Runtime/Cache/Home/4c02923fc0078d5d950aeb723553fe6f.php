<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sjj时间轴</title>
<link href="/timeline/Public/css/history.css" rel="stylesheet" />
</head>
<body>
<!-- 代码 开始 -->
<div class="head-warp">
  <div class="head">
        <div class="nav-box">
          <ul>
              <li class="cur" style="text-align:center; font-size:62px; font-family:'微软雅黑', '宋体';">大学时间轴</li>
              <a href="<?php echo U('Home/add/index');?>"><li class="cur" style="text-align:center; font-size:20px; font-family:'微软雅黑', '宋体';">添加</li></a>
          </ul>
        </div>
  </div>
</div>
<div class="main">
  <div class="history">
    
    <div class="history-date">
      <ul>
        <h2 class="first"><a href="#nogo">2017</a></h2>
        <?php if(is_array($date)): foreach($date as $key=>$vo): ?><li class="green">
          <h3><?php echo ($vo["date"]); ?><span><?php echo ($vo["year"]); ?></span></h3>
          <dl>
            <dt><?php echo ($vo["title"]); ?>
              <span><?php echo ($vo["contact"]); ?></span>
            </dt>
          </dl>
        </li><?php endforeach; endif; ?>
      </ul>
  </div>
  


    
  </div>
</div>

<script src="/timeline/Public/js/jquery.js"></script> 
<script src="/timeline/Public/js/main.js"></script>
<!-- 代码 结束 -->
<div style="text-align:center;margin:20px 0 60px 0;line-height:28px">
<p>代码整理：<a href="http://www.lanrentuku.com/" target="_blank">懒人图库</a></p>
<p>＊尊重他人劳动成果，转载请自觉注明出处！注：此代码仅供学习交流，请勿用于商业用途。</p>
</div>
</body>
</html>