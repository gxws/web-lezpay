<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title> 8.1.2.1.确认支付信息页(P-LZ-2) </title>
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

<div class="x_wrap pa" style="background-image:url(http://10.1.15.50:7002/web-lezpay/images/bg_x_wrap_x01.png);">
	<div class="x_date pa">05月09日</div>
	<div class="x_lezpay_infoconfirm">
		<form method="post">
			<h1 class="pa">【VIP购优汇】oneday正品大肚杯保温瓶情侣杯不锈钢男士女士水杯创意学生杯</h1>
			<p class="pa">40000.50元&nbsp;<span>（已付款：12000.50元）</span></p>
			<label class="pa cb1"><input type="checkbox" checked="checked" />使用积分1000抵扣1元</label>
			<label class="pa cb2"><input type="checkbox" checked="checked" />使用余额50.50元</label>
			<div class="smt">
				<div class="text pa">确认付款:28000.50元</div>
				<a href="javascript:;" class="pa go"><img src="http://10.1.15.50:7002/web-lezpay/images/x_0001_530_60.png" /></a>
				<a href="javascript:;" class="pa back"><img src="http://10.1.15.50:7002/web-lezpay/images/x_0001_240_60.png" /></a>
			</div>
		</form>
	</div>
</div>

</body>
<!-- end body -->

</html>
<!-- end html -->