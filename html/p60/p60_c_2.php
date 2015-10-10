<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title> P-LZ-15支付结果查询页 </title>
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

<div class="x_wrap pa" style=" background:url(../static/web-lezpay/images/c_p60_bg640x2.jpg) no-repeat;">
	<div class="x_date pa">05月09日</div>
	<div class="x_lezpay_infoconfirm">
    	<div class="c_paylist">支付宝支付50元</div>
        <img src="../static/web-lezpay/images/elli.gif" />
        <a class="c_payback" href="p60_c_1.php"><img src="../static/web-lezpay/images/p60_c_btn640x2.png" /></a>
	</div>
</div>

</body>
<!-- end body -->

</html>
<!-- end html -->