<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title> 乐众支付_用户登录 </title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
<meta name="Author" content="xiewulong" />
<meta name="Keywords" content="xiewulong" />
<meta name="Description" content="xiewulong" />

<!-- begin style -->
<?php
$css = array(
	'../static/public/css/_public.css',
	'../static/web-users/css/_base.css',
);
if(isset($css) && !empty($css)){
	echo '<style type="text/css">';
	foreach($css as $_css)include_once($_css);
	echo '</style>';
}else{
?>

<link rel="stylesheet" type="text/css" href="../static/public/css/_public.css" />
<link rel="stylesheet" type="text/css" href="../static/web-users/css/_base.css" />

<!--<link rel="stylesheet" type="text/css" href="http://10.1.15.50:7002/web-users/css/_base.mod.css" />-->
<?php } ?>
<!-- end style -->

</head>
<!-- end head -->

<!-- begin body -->
<body>

<!-- begin x_users -->
<div class="x_users pa" style="background-image:url(../static/web-users/images/bg_x_0001_page_3.png);">

	<!-- begin x_users_header -->
	<div class="x_users_header">
		<div class="x_date pa">{05月09日}</div>
	</div>
	<!-- end x_users_header -->

	<!-- begin x_users_body -->
	<div class="x_users_body">

		<!-- begin x_form_reg -->
		<form method="post" action="p78_x_2.html" class="x_form">
			<div class="row">
				<input type="text" name="phone" class="x_input pa" style="top:132px;" size="11" />
			</div>
			<div class="row">
				<input type="password" name="password2" class="x_input pa" style="top:192px;" size="6" />
				<a href="p78_x_4.php" class="x_btn_sm_1 pa"><img src="../static/web-users/images/x_0001_btn_sm_1.png" /></a>
			</div>
			<div class="row">
				<div class="error pa" style="top:242px;">{错误提示区}</div>
			</div>
			<div class="row smt">
				<a href="javascript:;" class="x_btn_1 pa" style="top:331px;"><img src="../static/web-users/images/x_0001_btn.png" /></a>
			</div>
			<a href="p78_x_4.php" class="pa c_nsign"><img src="../static/web-users/images/x_0001_btn_sm_1.png" /></a>
			<a href="p78_x_4.php" class="pa c_scan"><img src="../static/web-users/images/x_0001_btn_sm_1.png" /></a>
		</form>
		<!-- end x_form_reg -->

	</div>
	<!-- end x_users_body -->

</div>
<!-- end x_users -->

<!-- begin javascript -->
<?php
$css = array(
	'../static/web-users/js/_base.js',
);
if(isset($css) && !empty($css)){
	echo '<script type="text/javascript">';
	foreach($css as $_css)include_once($_css);
	echo '</script>';
}else{
?>
<!--
<script type="text/javascript" src="../static/web-users/js/_base.js"></script>
-->
<script type="text/javascript" src="http://10.1.15.50:7002/web-users/js/_base.js"></script>
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