<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-36-快捷支付输入支付密码-第二种</title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
<meta name="Author" content="xiek" />
<meta name="Keywords" content="xiek" />
<meta name="Description" content="xiek" />

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
	<div class="">
		<!-- begin header -->
	  <div class="header auto lt" style="background-image:url(../static/web-lezpay/images/p62_0001_header.png)">
	  	<!-- begin title_bx title类启用,title_bx加上tg类,禁用则加add类-->
	  	<div class="pa title_bx tg">
	  		<div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">快捷支付</em></div>
	  		<div class="pa cont md" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md类常用宽度,lg类加长宽度 -->
		  		<em class="pa fs22 tc">付款{37950}元</em>
		  		<div class="pa end" style="background-image:url(../static/web-lezpay/images/p62_0001_afterbg.png)">
		  		</div>
	  		</div>
	  	</div>
	  	<!-- end title_bx -->
	  	<div class="pa x_date">12月30日</div>
		</div>
	  <!-- end header -->
	  <!-- begin container -->
		<div class="pa container" style="background-image:url(../static/web-lezpay/images/p62_0001_container.png)">
			<form class="k_form" id="J_k_form" action="index.html" method="post">
				<p class="err fs18 pa" style="top:30px;left:200px;">错误提示信息区域！</p>
				 <div class="f26 pa lftitle" style="top:68px;">付款卡</div>
				<div class="f26 pa" style="top:66px;left:200px;">建设银行9558****5520（储蓄卡）</div>
				<div class="f26 pa lftitle" style="top:124px;">支付密码</div>
				<input class="pa" style="top:116px;left:192px;width:210px;" type="password"/>
				<img class="pa" style="top:120px;left:425px;" src="../static/web-lezpay/images/k_01_btn_small.png" />
				<div class="f18 pa" style="top:125px;left:438px;">找回支付密码</div>
				<a class="pa" style="top:118px;left:422px;" href="javascript:;"><img src="../static/web-lezpay/images/k_01_btn_small_ghost.png"/></a>
				<div class="f26 pa lftitle" style="top:182px;">手机号码</div>
				<div class="f26 pa" style="top:182px;left:203px;">134****5544</div>
				<img class="pa" style="top:175px;left:425px;" src="../static/web-lezpay/images/k_01_btn_small.png" />
				<div class="f18 pa" style="top:180px;left:446px;">获取验证码</div>
				<a class="pa" style="top:173px;left:422px;" href="p62_k_02.php"><img src="../static/web-lezpay/images/k_01_btn_small_ghost.png"/></a>
				<div class="f26 pa lftitle" style="top:234px;">短信验证码</div>
				<input class="pa" type="text" style="top:226px;left:192px;width:210px;" />
				<img class="pa" style="top:310px;left:190px;" src="../static/web-lezpay/images/k_01_btn_big.png" />
				<div class="f26 pa" style="top:322px;left:250px;">确认付款</div>
				<a class="pa" style="top:302px;left:185px;" href="javascript:formSubmit();"><img src="../static/web-lezpay/images/k_01_btn_big_ghost.png" /></a>
			</form>
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom 附加类paging翻页,delete删除,input切换输入法-->
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
<!--
<script type="text/javascript">
WS.base.checkTvbox('00000000000', '0000');
</script>
-->
<!-- end javascript -->
</body>
<!-- end body -->

</html>
<!-- end html -->