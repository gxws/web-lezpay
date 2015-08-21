<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title> P-LZ-10：工行支付-支付密码页-时间型密码器 </title>
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

<div class="x_wrap pa" style="background-image:url(http://10.1.15.50:7002/web-lezpay/images/j_body_bg.jpg);">
	<div class="x_date pa">05月09日</div>
	<div class="x_lezpay_infoconfirm j_login_box">
		<form method="post">
			<div class="pa j_title">工行卡支付&nbsp;支付金额：2.00元</div>
			<label class="pa passw">
				&nbsp;&nbsp;密码器密码
				<input class="text" type="text" />
				<b class="hint">&nbsp;密码器尾数为4609</b>
			</label>
			<div class="pa error" style="left:200px;top:250px;">
				错误提示信息!
			</div>
			<div class="smt">
				<a href="javascript:;" class="pa go"><img src="../static/web-lezpay/images/x_0001_530_60.png" /></a>
				<a href="javascript:;" class="pa back"><img src="../static/web-lezpay/images/x_0001_240_60.png" /></a>
			</div>
		</form>
	</div>
</div>

</body>
<!-- end body -->

</html>
<!-- end html -->