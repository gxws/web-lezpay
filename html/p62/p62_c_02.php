<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-35-���֧��ѡ�����п�</title>
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
	<div class="">
		<!-- begin header -->
	  <div class="header auto" style="background-image:url(../static/web-lezpay/images/p62_0001_header.png)">
	  	<!-- begin title_bx title������,title_bx����tg��,�������add��-->
	  	<div class="pa title_bx tg">
	  		<div class="pa title tc lt" style="background-image:url(../static/web-lezpay/images/p62_0001_titlebg.png)"><em class="pa fs22">���֧��</em></div> 
	  		<div class="pa cont md" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md�ೣ�ÿ���,lg��ӳ����� -->
		  		<em class="pa fs22 tc">����{27950}Ԫ</em>
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
	  <div class="pa container c_p62slelists">
			<div class="pa c_p62tip">��ǰ��֧�ֽ������С���ͨ���У��������н�½����ͨ��</div>
			<div class="pa tips">
				<img src="../static/web-lezpay/images/0001_fail.png" />
				<div class="pa lis">û�����п��������ӣ�</div>
			</div>
			<div class="pa page"><span>2</span>/5</div>
			<!-- begin addcard_bx �������п�-->
			<div class="pa addcard_bx">
				<a href="p62_c_03.php" class="pa add_deposit"><img src="../static/web-lezpay/images/p62_0001_addcard1.png" alt="" width="140" height="40"/></a>
				<a href="javascript:;" class="pa add_credit"><img src="../static/web-lezpay/images/p62_0001_addcard2.png" alt="" width="140" height="40"/></a>
				<a href="javascript:;" class="pa add_pay"><img src="../static/web-lezpay/images/p62_0002_addpay.png" alt="" width="140" height="165"/></a>
			</div>
			<!-- end addcard_bx -->
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom ������paging��ҳ,deleteɾ��,input�л����뷨-->
  <div class="pa footer" style="background-image:url(../static/web-lezpay/images/p62_0002_footer_bg2.jpg)"></div>
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