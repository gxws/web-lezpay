<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title> 8.1.1.1.异常提示页-无法获取用户身份(P-LZ-1) </title>
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

<div class="x_wrap pa" style="background-image:url(http://10.1.15.50:7002/web-lezpay/images/bgc01.png);">
	<div class="x_date pa">05月09日</div>
    	<div class="x_lezpay_result">
			<a class="x_btn pa back" href="c02.php"><img src="http://10.1.15.50:7002/web-lezpay/images/x_0001_145_60.png"></a>
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
<!-- end javascript -->

</body>
<!-- end body -->

</html>
<!-- end html -->