<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-8-֧���ɹ�</title>
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
<div class="x_wrap pa" style="background-image:url(../static/web-lezpay/images/0001_pay_succeed.jpg);">

	<!-- begin x_date -->
	<div class="x_date pa">{05��09��}</div>
	<!-- end x_date -->
	<!-- begin cont_title -->
	<div class="j_cont j_cont_title j_t_info pa">{��VIP���Ż㡿oneday��Ʒ��Ǳ�����ƿ���±��������ʿŮʿˮ������ѧ����}</div>
	<!-- end cont_title -->
	<div class="j_cont j_cont_price j_t_info pa">�۸�{40000}Ԫ���Ѹ���{12000.50}Ԫ��</div>
	<!-- begin x_btns -->
	<a href="javascript:;" class="j_btns x_btn_1 pa"><img src="../static/web-lezpay/images/x_btn_1.png" /></a>
	<!-- end x_btns -->

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