<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>�ҵ�����</title>
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

<link rel="stylesheet" type="text/css" href="../static/public/css/_public.css" />
<link rel="stylesheet" type="text/css" href="../static/web-lezpay/css/_base.css" />

<!-- <link rel="stylesheet" type="text/css" href="http://10.1.15.50:7002/web-lezpay/css/_base.mod.css" /> -->
<?php } ?>
<!-- end style -->

</head>
<!-- end head -->

<!-- begin body -->
<body>

<!-- begin wrap -->
<div class="pa x_wrap">
	<!-- begin DIY -->
	<div class="j_mylez">
		<!-- begin header -->
	  <div class="pa header auto lt" style="background-image:url(../static/web-lezpay/images/p62_0001_header.png)">
	  	<!-- begin title_bx title������,title_bx����tg��,�������add��-->
	  	<div class="pa title_bx add">
	  		<!-- <div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">���֧��</em></div> -->
	  		<div class="pa cont md" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md�ೣ�ÿ��,lg��ӳ���� -->
		  		<em class="pa fs22 tc">�ҵ�����</em>
		  		<div class="pa end" style="background-image:url(../static/web-lezpay/images/p62_0001_afterbg.png)">
		  			<!-- <div class="pa info text-gray fs18">����δ����֧�����룬����������</div> -->
		  		</div>
	  		</div>
	  	</div>
	  	<!-- end title_bx -->
	  	<div class="pa x_date">12��30��</div>
	  </div>
	  <!-- end header -->
	  <!-- begin container -->
	  <div class="pa container" style="background-image:url(../static/web-lezpay/images/p62_0001_mylez_bg.png)">
	  	<div class="pa info t1 text-white">
	  		<p class="pa p1">�ֻ����룺13000225566</p>
	  		<p class="pa p2">������100.00Ԫ</p>
	  		<p class="pa p3">���л��֣�20000</p>
	  	</div>
	  	<div class="pa msg text-white tc" style="background-image:url(../static/web-lezpay/images/p62_0001_msgbg.png)"><em class="fs18">10000��δ��</em></div>
	  	<a href="javascript:;" class="pa t1 s1"><img src="../static/web-lezpay/images/p62_0001_check_focus.png" alt="" width="340" height="135" /></a>
	  	<a href="javascript:;" class="pa t2 s2"><img src="../static/web-lezpay/images/p62_0001_quick_focus.png" alt="" width="211" height="120" /></a>
	  	<a href="javascript:;" class="pa s1 t2"><img src="../static/web-lezpay/images/p62_0001_sm_focus.png" alt="" width="103" height="120" /></a>
	  	<a href="javascript:;" class="pa s3 t2"><img src="../static/web-lezpay/images/p62_0001_sm_focus.png" alt="" width="103" height="120" /></a>
	  	<a href="javascript:;" class="pa s4 t2"><img src="../static/web-lezpay/images/p62_0001_sm_focus.png" alt="" width="103" height="120" /></a>
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom bg2��ҳ,bg3ɾ��,bg4�л����뷨-->
  <div class="pa footer" style="background-image:url(../static/web-lezpay/images/p62_0002_footer_bg1.jpg)"></div>
	<!-- end bottom -->
</div>
<!-- end wrap -->
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

<!-- <script type="text/javascript" src="http://10.1.15.50:7002/web-lezpay/js/_base.mod.js"></script> -->
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