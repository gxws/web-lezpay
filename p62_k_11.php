<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-55-修改支付密码验证身份</title>
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
	<div class="">
		<!-- begin header -->
	  <div class="pa header auto lt" style="background-image:url(../static/web-lezpay/images/p62_0001_header.png)">
	  	<!-- begin title_bx title类启用,title_bx加上tg类,禁用则加add类-->
	  	<div class="pa title_bx add">
	  		<!-- <div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">快捷支付</em></div> -->
	  		<div class="pa cont lg" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md类常用宽度,lg类加长宽度 -->
		  		<em class="pa fs22 tc">找回支付密码</em>
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
	  	<!-- begin progress -->
			<div class="pa progress">
				<div class="pa p1 lt" style="background-image:url(../static/web-lezpay/images/p62_0001_p1bg.png)"></div>
			</div>
			<form class="k_form" id="J_k_form">
				<p class="err f18 pa" style="top:134px;left:200px;">错误提示信息区域！</p>
				<img class="pa" style="top:166px;left:188px;" src="../static/web-lezpay/images/k_01_btn_normal.png" />
				<div class="f18 pa" style="top:172px;left:254px;">获取验证码</div>
				<a class="pa" style="top:167px;left:190px;" href="p62_k_12.php"><img src='../static/web-lezpay/images/k_01_btn_normal_ghost.png'/></a>
				<div class="f26 pa lftitle" style="top:223px;">验证码</div>
				<input class="pa" style="top:218px;left:192px;width:210px;" type="text"/>
				<img class="pa" style="top:310px;left:190px;" src="../static/web-lezpay/images/k_01_btn_big.png" />
				<div class="f26 pa" style="top:322px;left:250px;">下一步</div>
				<a class="pa" id="J_k_btn" style="top:302px;left:185px;" href="javascript:;"><img src='../static/web-lezpay/images/k_01_btn_big_ghost.png'/></a>
			</form>
			<!-- end progress -->
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom 附加类paging翻页,delete删除,input切换输入法-->
  <div class="pa footer delete" style="background-image:url(../static/web-lezpay/images/p62_0002_footer_bg3.jpg)"></div>
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