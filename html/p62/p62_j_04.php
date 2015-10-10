<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-47-快捷支付快捷支付协议</title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
<meta name="Author" content="jiqingjian" />
<meta name="Keywords" content="jiqingjian" />
<meta name="Description" content="jiqingjian" />

<!-- begin style -->
<?php
$css = array(
	'../static/public/css/_public.css',
	'../static/web-lezpay/css/_base.css',
);
if(isset($css) && !empty($css)){
	echo '<style type="text/css">';
	foreach($css as $_css)include_once($_css);
	echo '</style>';
}else{
?>

<link rel="stylesheet" type="text/css" href="../static/public/css/_public.css" />
<link rel="stylesheet" type="text/css" href="../static/web-lezpay/css/_base.css" />

<!-- <link rel="stylesheet" type="text/css" href="http://10.1.15.50:7002/web-lezpay/css/_base.mod.css" /> -->
<?php } ?>
<!-- end style -->

</head>
<!-- end head -->

<!-- begin body -->
<body>

<!-- begin wrap -->
<div class="pa x_wrap">
	<!-- begin DIY -->
	<div class="j_agreement">
		<!-- begin header -->
	  <div class="pa header auto lt" style="background-image:url(../static/web-lezpay/images/p62_0001_header.png)">
	  	<!-- begin title_bx title类启用,title_bx加上tg类,禁用则加add类-->
	  	<div class="pa title_bx add">
	  		<!-- <div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">快捷支付</em></div> -->
	  		<div class="pa cont md" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md类常用宽度,lg类加长宽度 -->
		  		<em class="pa fs22 tc">添加付款卡</em>
		  		<div class="pa end" style="background-image:url(../static/web-lezpay/images/p62_0001_afterbg.png)">
		  			<!-- <div class="pa info text-gray fs18">您尚未设置支付密码，请立即设置</div> -->
		  		</div>
	  		</div>
	  	</div>
	  	<!-- end title_bx -->
	  	<div class="pa x_date">12月30日</div>
	  </div>
	  <!-- end header -->
	  <!-- begin container -->
	  <div class="pa container" style="background-image:url(../static/web-lezpay/images/p62_0001_container.png)">
	 		<div class="pa tc title text-white">快捷支付服务协议</div>
	 		<div class="pa tx text-white">
	 			<p>财付通支付科技有限公司（以下简称“财付通公司”）依据快捷支付服务协议（以下简称“本协议”）的规定为用户（以下有时也称“您”）提供快捷支付服务，本协议在用户和财付通公司间具有合同上的法律效力。财付通公司在此特别提醒您认真阅读、充分理解本协议各条款，特别是其中所涉及的免除、限制财付通公司责任的条款、对用户权利限制条款等（特别是以粗体下划线标注的内容）。</p>
	 		</div>
	 		<div class="pa page tr"><em class="val">1</em><em class="text-white">/1</em></div>
	 		<a href="javascript:;" class="pa btn"><img src="../static/web-lezpay/images/p62_0001_xieyibtn_03.png" width="145" height="50" alt="" /></a>
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom bg2翻页,bg3删除,bg4切换输入法-->
  <div class="pa footer" style="background-image:url(../static/web-lezpay/images/p62_0002_footer_bg1.jpg)"></div>
	<!-- end bottom -->
</div>
<!-- end wrap -->
<!-- begin javascript -->

<?php
$css = array(
	'../static/web-lezpay/js/_base.js',
);
if(isset($css) && !empty($css)){
	echo '<script type="text/javascript">';
	foreach($css as $_css)include_once($_css);
	echo '</script>';
}else{
?>

<script type="text/javascript" src="../static/web-lezpay/js/_base.js"></script>

<!-- <script type="text/javascript" src="http://10.1.15.50:7002/web-lezpay/js/_base.mod.js"></script> -->
<?php } ?>
<script type="text/javascript">
//WS.base.checkTvbox('00000000000', '0000');	//机顶盒号和类型验证
//WS.base.help = 'index.html';	//按帮助跳转的页面
WS.base.prev = 'index.html';	//上一页跳转的链接
WS.base.next = 'index.html';	//下一页跳转的链接
</script>
<!-- end javascript -->
</body>
<!-- end body -->

</html>
<!-- end html -->