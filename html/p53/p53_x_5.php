<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title> 8.1.3.显示支付渠道(P-LZ-8) </title>
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
<!--
<link rel="stylesheet" type="text/css" href="../static/public/css/_public.css" />
<link rel="stylesheet" type="text/css" href="../static/web-lezpay/css/_base.css" />
-->
<link rel="stylesheet" type="text/css" href="http://10.1.15.50:7002/web-lezpay/css/_base.mod.css" />
<?php } ?>
<!-- end style -->

</head>
<!-- end head -->

<!-- begin body -->
<body>

<div class="x_wrap pa" style="background-image:url(http://10.1.15.50:7002/web-lezpay/images/bg_x_wrap_x05.png);">
	<div class="x_date pa">05月09日</div>
	<div class="x_lezpay_choose">
		<h1 class="pa">还需付款28000.00元，请选择支付方式</h1>
		<em><a href="javascript:;" class="prev pa"><img src="http://10.1.15.50:7002/web-lezpay/images/bg_x_lezpay_choose_em_a_prev.png" /></a></em>
		<div class="banks">
			<a href="javascript:;" class="bank1 pa"><img src="http://10.1.15.50:7002/web-lezpay/images/demo_x_4.png" /></a>
			<a href="javascript:;" class="bank2 pa"><img src="http://10.1.15.50:7002/web-lezpay/images/demo_x_5.png" /></a>
			<a href="javascript:;" class="bank3 pa"><img src="http://10.1.15.50:7002/web-lezpay/images/demo_x_6.png" /></a>
			<a href="javascript:;" class="bank4 pa"><img src="http://10.1.15.50:7002/web-lezpay/images/demo_x_4.png" /></a>
		</div>
		<em><a href="javascript:;" class="next pa"><img src="http://10.1.15.50:7002/web-lezpay/images/bg_x_lezpay_choose_em_a_next.png" /></a></em>
		<a href="javascript:;" class="x_btn pa back"><img src="http://10.1.15.50:7002/web-lezpay/images/x_0001_240_60.png" /></a>
	</div>
</div>

</body>
<!-- end body -->

</html>
<!-- end html -->