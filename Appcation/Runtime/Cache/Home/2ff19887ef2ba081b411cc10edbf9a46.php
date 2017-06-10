<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sjj时间轴内容添加</title>
<link href="/timeline/Public/css/history.css" rel="stylesheet" />
</head>
<body>
<!-- 代码 开始 -->
<div class="head-warp">
  <div class="head">
        <div class="nav-box">
          <form id="from" name="form" method="get" action="<?php echo U('Home/Add/getInfo');?>">
              <ul style="text-align:center;">
              <li class="cur" style="font-size:30px; font-family:'微软雅黑', '宋体';">备忘录</li>
              <li class="cur"><input type="text" id="title" name="title" placeholder=".title." style="text-align:center;"></input> </li>
              <li class="cur"><textarea type="text" id="contact" name="contact" placeholder="请输入内容..." rows="10" cols="50"></textarea></li>
              <li><input type="submit" name="ok" value="提交" width="400px" height="200px"></li>    
              </ul>
          </form>      
        </div>
  </div>
</div>
</div>

<script src="/timeline/Public/js/jquery.js"></script> 
<script src="/timeline/Public/js/main.js"></script>
<!-- 代码 结束 -->
<div style="text-align:center;margin:20px 0 60px 0;line-height:28px">
<p>代码整理：<a href="#" target="_blank">sjj</a></p>
<p>＊尊重他人劳动成果，转载请自觉注明出处！注：此代码仅供学习交流，请勿用于商业用途。</p>
</div>
</body>
</html>