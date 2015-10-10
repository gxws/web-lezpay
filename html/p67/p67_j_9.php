<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-15-银联支付卡选择页</title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
<meta name="Author" content="xiewulong" />
<meta name="Keywords" content="xiewulong" />
<meta name="Description" content="xiewulong" />

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

<!-- begin x_wrap -->
<div class="x_wrap pa j_cup " style="background-image:url(../static/web-lezpay/images/0001_cup_select.jpg);">

	<!-- begin x_date -->
	<div class="x_date pa">{05月09日}</div>
	
	<!-- end x_date -->
	<a class="select_btn select_btn_more pa" href="javascript:;">
	<img src="../static/web-lezpay/images/0001_cup_select_btn.png" /></a>
	<div class="blank_liset blank_1">
		<div class="blank_name pa">{建设银行(储蓄卡)}</div>
		<div class="blank_id pa">6228****0118</div>
		<a class="select_btn pa" href="javascript:;"><img src="../static/web-lezpay/images/0001_cup_select_btn.png" /></a>
	</div>
	<div class="blank_liset blank_2">
		<div class="blank_name pa">{工作银行(储蓄卡)}</div>
		<div class="blank_id pa">6228****0118</div>
		<a class="select_btn pa" href="javascript:;">
		<img src="../static/web-lezpay/images/0001_cup_select_btn.png" /></a>
	</div>
	<div class="blank_liset blank_3">
		<div class="blank_name pa">{农业银行(信用卡)}</div>
		<div class="blank_id pa">6228****0118</div>
		<a class="select_btn pa" href="javascript:;">
		<img src="../static/web-lezpay/images/0001_cup_select_btn.png" /></a>
	</div>
	<div class="a_pay pa">付款{2079500.00}元</div>
</div>
<!-- end x_wrap -->

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

<!-- <script type="text/javascript" src="../static/web-lezpay/js/_base.js"></script> -->

<script type="text/javascript" src="http://10.1.15.50:7002/web-lezpay/js/_base.mod.js"></script>
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