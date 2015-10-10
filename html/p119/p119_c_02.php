<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-59-支付宝账户授权并支付</title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
<meta name="Author" content="chenyongen" />
<meta name="Keywords" content="chenyongen" />
<meta name="Description" content="chenyongen" />

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

<!-- <link rel="stylesheet" type="text/css" href="http://10.1.15.50:8000/static/web-lezpay/css/_base.mod.css" /> -->
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
	  		<div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><i class="pa k_head_icon" style="background-image:url(../static/web-lezpay/images/icon_k_title_p119.png)"><></i></div>
	  		<div class="pa cont md" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md类常用宽度,lg类加长宽度 -->
		  		<em class="pa fs22 tc">账户授权并付款</em>
		  		<div class="pa end" style="background-image:url(../static/web-lezpay/images/p62_0001_afterbg.png)">
		  		</div>
	  		</div>
	  	</div>
	  	<!-- end title_bx -->
	  	<div class="pa x_date">12月30日</div>
		</div>
	  <!-- end header -->
	  <!-- begin container -->
		<div class="pa container k_box_p119 c_p119box" style="background-image:url(../static/web-lezpay/images/p62_0001_container.png)">
			<div class="pa codeBg"><img class="pa" width="245" height="245" src="../static/web-lezpay/images/demo_k_p119_01.jpg"/></div>
			<div class="pa text">授权网视账户 159 5458 5428付款<em>{xxxx.xx}</em>元</div>
			<div class="pa text2">开启小额免密付款更方便，<a href="javascript:;">查看操作</a></div>
			<a class="pa btn over" href="./p119_c_03.php">
				<img src="../static/web-lezpay/images/btn_k_title_p119.png"/>
			</a>
			<a class="pa btn return" href="javascript:;">
				<img src="../static/web-lezpay/images/btn_k_title_p119_02.png"/>
			</a>
			<div class="pa tishi">温馨提示：若需取消授权，只需登录支付宝官网，在【账户设置】→【应用授<br/>权】进行操作即可。</div>
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