<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>P-LZ-17-动态码输入页-01</title>
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
<link rel="stylesheet" type="text/css" href="../static/web-lezpay/css/_base.css" /> -->

<link rel="stylesheet" type="text/css" href="http://10.1.15.50:7002/web-lezpay/cs s/_base.mod.css" />
<?php } ?>
<!-- end style -->

</head>
<!-- end head -->

<!-- begin body -->
<body>

<div class="x_wrap pa" style="background-image:url(http://10.1.15.50:7002/web-lezpay/images/j_body_bg.jpg);">
	<div class="x_date pa">05月09日</div>
	<div class="x_lezpay_infoconfirm j_box">
		<div class="j_p54">
			<form method="post">
				<div class="j_plz17">
					<div class="pa title">银联在线&nbsp;支付27950元</div>
					<div class="gain_name pa ps-topm">
						<p>短信验证码</p>
					</div>
					<div class="gain_text pa ps-topl">
						<p><input type="text" class="input input-sm" /><b>&nbsp;90s内有效</b></p>
						<p class="errors">错误提示区!</p>
					</div>
					<div class="smt">
						<a href="javascript:;" class="pa go"><img src="../static/web-lezpay/images/x_0001_530_60.png" /></a>
						<a href="javascript:;" class="pa back2"><img src="../static/web-lezpay/images/x_0001_240_60.png" /></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
<!-- end body -->

</html>
<!-- end html -->