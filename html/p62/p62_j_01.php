<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>框架</title>
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

<link rel="stylesheet" type="text/css" href="../../../public/css/public.css" />
<link rel="stylesheet" type="text/css" href="../../static/css/base.css" />

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
	  <div class="pa header auto lt" style="background-image:url(../../static/images/p62_0001_header.png)">
	  	<!-- begin title_bx title类启用,title_bx加上tg类,禁用则加add类-->
	  	<div class="pa title_bx add">
	  		<!-- <div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">快捷支付</em></div> -->
	  		<div class="pa cont md" style="background-image:url(../../static/images/p62_0001_titlecont.png)"><!-- md类常用宽度,lg类加长宽度 -->
		  		<em class="pa fs22 tc">付款{27950}元</em>
		  		<div class="pa end" style="background-image:url(../../static/images/p62_0001_afterbg.png)">
		  			<!-- <div class="pa info text-gray fs18">您尚未设置支付密码，请立即设置</div> -->
		  		</div>
	  		</div>
	  	</div>
	  	<!-- end title_bx -->
	  	<div class="pa x_date">12月30日</div>
	  </div>
	  <!-- end header -->
	  <!-- begin container -->
	  <div class="pa container" style="background-image:url(../../static/images/p62_0001_container.png)">
	  	<!-- begin progress -->
			<div class="pa progress">
				<div class="pa p1 lt" style="background-image:url(../../static/images/p62_0001_p1bg.png)"></div>
				<div class="pa p2 lt" style="background-image:url(../../static/images/p62_0001_p2bg.png)"></div>
			</div>
			<!-- end progress -->
			<!-- begin addcard_bx 添加银行卡-->
			<div class="pa addcard_bx">
				<a href="javascript:;" class="pa add_deposit "><img src="../../static/images/p62_0001_addcard1.png" alt="" width="140" height="40"/></a>
				<a href="javascript:;" class="pa add_credit"><img src="../../static/images/p62_0001_addcard2.png" alt="" width="140" height="40"/></a>
				<a href="javascript:;" class="pa add_pay"><img src="../../static/images/p62_0002_addpay.png" alt="" width="140" height="165"/></a>
			</div>
			<!-- end addcard_bx -->
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom bg2翻页,bg3删除,bg4切换输入法-->
  <div class="pa footer" style="background-image:url(../../static/images/p62_0002_footer_bg1.jpg)"></div>
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

<script type="text/javascript" src="../../static/js/_base.js"></script>

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