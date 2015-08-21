<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title> PT-7-支付渠道选择 </title>
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
<!--<link rel="stylesheet" type="text/css" href="http://10.1.15.50:7002/web-lezpay/css/_base.mod.css" />-->

<?php } ?>
<!-- end style -->

</head>
<!-- end head -->

<!-- begin body -->
<body>

<!-- begin x_wrap -->
<div class="x_wrap pa" style="background-image:url(../static/web-lezpay/images/bg_x_0001_p67_7.png);">

	<!-- begin x_date -->
	<div class="x_date pa">{05月09日}</div>
	<!-- end x_date -->

	<!-- begin x_payment -->
	<div class="x_payment">
		<h3 class="pa">本订单使用 积分抵扣2元，乐众账户付款{20}元</h3>
		<p class="pa">需付款{1800}元，请选择付款方式</p>

		<!-- begin a loop -->
		<a href="javascript:;" class="p0 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /></a>
		<a href="javascript:;" class="p1 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /></a>
		<a href="javascript:;" class="p2 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /></a>
		<a href="javascript:;" class="p3 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /></a>
		<a href="javascript:;" class="p4 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /></a>
		<a href="javascript:;" class="p5 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /></a>
		<a href="javascript:;" class="p6 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /></a>
		<a href="javascript:;" class="p7 pa"><img src="../static/web-lezpay/images/demo_x_2.png" /><i class="pa"><img src="../static/web-lezpay/images/bg_x_payment_ul_li_a_i.png" /></i></a>
		<!-- end li loop -->

	</div>
	<!-- end x_payment -->

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
<!--
<script type="text/javascript" src="../static/web-lezpay/js/_base.js"></script>
-->
<script type="text/javascript" src="http://10.1.15.50:7002/web-lezpay/js/_base.mod.js"></script>
<?php } ?>
<!--
<script type="text/javascript">
WS.base.checkTvbox('00000000000', '0000');	//机顶盒号和类型验证
WS.base.help = 'index.html';	//按帮助跳转的页面
</script>
-->
<!-- end javascript -->

</body>
<!-- end body -->

</html>
<!-- end html -->