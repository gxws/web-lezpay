<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>P-LZ-154支付结果查询页02</title>
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

<!-- <link rel="stylesheet" type="text/css" href="../static/public/css/_public.css" />
<link rel="stylesheet" type="text/css" href="../static/web-lezpay/css/_base.css" /> -->

<link rel="stylesheet" type="text/css" href="http://10.1.15.50:7002/web-lezpay/css/_base.mod.css" />
<?php } ?>
<!-- end style -->

</head>
<!-- end head -->

<!-- begin body -->
<body>

<!-- begin x_wrap -->
<div class="x_wrap pa j_cup " style="background-image:url(../static/web-lezpay/images/0001_weixin_busy.jpg);">

	<!-- begin x_date -->
	<div class="x_date pa">{05月09日}</div>
	<!-- end x_date -->
	<div class="a_pay pa">付款{2079500.00}元</div>
	<div class="qr">

		<a href="javascript:;" class=" cup_btn qr_btn3 pa"><img src="../static/web-lezpay/images/0001_qr_btn2_03.png" /></a>
	
	</div>
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