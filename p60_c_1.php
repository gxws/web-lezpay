<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>P-LZ-15-卡号输入页</title>
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

<div class="x_wrap pa" style=" background:url(../static/web-lezpay/images/c_p60_bg640x1.jpg) no-repeat;">
	<div class="x_date pa">05月09日</div>
	<div class="x_lezpay_infoconfirm">
    	<div class="c_paylist">支付宝支付50元</div>
        <div class="c_payinfo">请打开手机里的微信，使用“扫一扫”功能对二维码进行扫描</div>
        <img class="c_payimg" width="250" height="250" src="../static/web-lezpay/images/123.png" />
        <a class="c_paydone" href="p60_c_2.php"><img src="../static/web-lezpay/images/p60_c_btn640x1.png" /></a>
        <a class="c_leavepay" href="javascript:;"><img src="../static/web-lezpay/images/p60_c_btn640x1.png" /></a>
	</div>
</div>

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
<!--
<script type="text/javascript" src="http://10.1.15.50:7002/web-lezpay/js/_base.mod.js"></script>
-->
<?php } ?>
<script type="text/javascript">
WS.base.checkTvbox('00000000000', '0000');
</script>
<!-- end javascript -->

</body>
<!-- end body -->

</html>
<!-- end html -->