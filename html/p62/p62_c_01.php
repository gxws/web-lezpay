<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-35-快捷支付选择银行卡</title>
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

<!-- <link rel="stylesheet" type="text/css" href="../static/public/css/_public.css" />
<link rel="stylesheet" type="text/css" href="../static/web-lezpay/css/_base.css" /> -->

<link rel="stylesheet" type="text/css" href="http://10.1.15.50:8000/static/web-lezpay/css/_base.mod.css" />
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
	  	<div class="pa title_bx tg">
	  		<div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">快捷支付</em></div> 
	  		<div class="pa cont md" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md类常用宽度,lg类加长宽度 -->
		  		<em class="pa fs22 tc">付款{27950}元</em>
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
	  <div class="pa container c_p62slelists">
			<div class="pa c_p62tip">当前仅支持建设银行、交通银行，更多银行将陆续开通！</div>
			<div class="pa ti">选择付款卡：</div>
			<div class="li li1" style=" background:url(../static/web-lezpay/images/bg_c_01list.png) no-repeat;">
				<span class="pa p1"><img src="../static/web-lezpay/images/0002_select_icbc.png" /></span>
				<span class="pa p2">工商银行</span>
				<span class="pa p3">6228****2001</span>
				<span class="pa p4">储蓄卡</span>
				<a class="pa p5" href="p62_c_02.php"><img src="../static/web-lezpay/images/bg_c_01lists.png" /></a>
			</div>
			<div class="li li2" style=" background:url(../static/web-lezpay/images/bg_c_01list.png) no-repeat;">
				<span class="pa p1"><img src="../static/web-lezpay/images/0002_select_icbc.png" /></span>
				<span class="pa p2">工商银行</span>
				<span class="pa p3">6228****2001</span>
				<span class="pa p4">储蓄卡</span>
				<a class="pa p5" href="javascript:;"><img src="../static/web-lezpay/images/bg_c_01lists.png" /></a>
			</div>
			<div class="li li3" style=" background:url(../static/web-lezpay/images/bg_c_01list.png) no-repeat;">
				<span class="pa p1"><img src="../static/web-lezpay/images/0002_select_icbc.png" /></span>
				<span class="pa p2">工商银行</span>
				<span class="pa p3">6228****2001</span>
				<span class="pa p4">储蓄卡</span>
				<a class="pa p5" href="javascript:;"><img src="../static/web-lezpay/images/bg_c_01lists.png" /></a>
			</div>
			<div class="li li4" style=" background:url(../static/web-lezpay/images/bg_c_01list.png) no-repeat;">
				<span class="pa p1"><img src="../static/web-lezpay/images/0002_select_icbc.png" /></span>
				<span class="pa p2">工商银行</span>
				<span class="pa p3">6228****2001</span>
				<span class="pa p4">储蓄卡</span>
				<a class="pa p5" href="javascript:;"><img src="../static/web-lezpay/images/bg_c_01lists.png" /></a>
			</div>
			<div class="pa page"><span>2</span>/5</div>
			<!-- begin addcard_bx 添加银行卡-->
			<div class="pa addcard_bx">
				<a href="javascript:;" class="pa add_deposit"><img src="../static/web-lezpay/images/p62_0001_addcard1.png" alt="" width="140" height="40"/></a>
				<a href="javascript:;" class="pa add_credit"><img src="../static/web-lezpay/images/p62_0001_addcard2.png" alt="" width="140" height="40"/></a>
				<a href="javascript:;" class="pa add_pay"><img src="../static/web-lezpay/images/p62_0002_addpay.png" alt="" width="140" height="165"/></a>
			</div>
			<!-- end addcard_bx -->
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom 附加类paging翻页,delete删除,input切换输入法-->
  <div class="pa footer" style="background-image:url(../static/web-lezpay/images/p62_0002_footer_bg2.jpg)"></div>
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
WS.base.next = 'p62_c_02.php';	//按帮助跳转的页面
WS.base.prev = 'p62_c_03.php';
</script>

<!-- end javascript -->
</body>
<!-- end body -->

</html>
<!-- end html -->