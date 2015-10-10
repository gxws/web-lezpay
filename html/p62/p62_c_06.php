<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-45-快捷支付添加信用卡失败结果</title>
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
	  <div class="header auto" style="background-image:url(../static/web-lezpay/images/p62_0001_header.png)">
	  	<!-- begin title_bx title类启用,title_bx加上tg类,禁用则加add类-->
	  	<div class="pa title_bx add">
	  		<!-- <div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">快捷支付</em></div> -->
	  		<div class="pa cont lg" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md类常用宽度,lg类加长宽度 -->
		  		<em class="pa fs22 tc">添加信用卡</em>
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
	  <div class="pa container" style="background:url(../static/web-lezpay/images/p62_c_resle.png) no-repeat;">
		 <div class="pa c_p62tips">
			<img src="../static/web-lezpay/images/0001_fail.png" />
			<div class="pa lis">信用卡添加失败！</div>
			<div class="pa xlis">错误提示：您输入的信息有误</div>
		 </div>
		 <a class="pa btnback" href="p62_c_07.php"><img src="../static/web-lezpay/images/btn_c_p62back.png" /></a>
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