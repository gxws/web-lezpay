<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "../static/DTD/xhtml1-transitional.dtd">

<!-- begin html -->
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- begin head -->
<head>
<title>PT-37-���֧����Ӵ�������˻���Ϣ</title>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312" />
<meta name="Author" content="xiek" />
<meta name="Keywords" content="xiek" />
<meta name="Description" content="xiek" />

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
	  <div class="header auto lt" style="background-image:url(../static/web-lezpay/images/p62_0001_header.png)">
	  	<!-- begin title_bx title������,title_bx����tg��,�������add��-->
	  	<div class="pa title_bx add">
	  		<!-- <div class="pa title tc lt"><em class="pa fs22">���֧��</em></div> -->
	  		<div class="pa cont md" style="background-image:url(../static/web-lezpay/images/p62_0001_titlecont.png)"><!-- md�ೣ�ÿ��,lg��ӳ���� -->
		  		<em class="pa fs22 tc">��Ӵ��</em>
		  		<div class="pa end" style="background-image:url(../static/web-lezpay/images/p62_0001_afterbg.png)">
		  		</div>
	  		</div>
	  	</div>
	  	<!-- end title_bx -->
	  	<div class="pa x_date">12��30��</div>
		</div>
	  <!-- end header -->
	  <!-- begin container -->
		<div class="pa container" style="background-image:url(../static/web-lezpay/images/p62_0001_container.png)">
			<form class="k_form" id="J_k_form">
				<p class="err f18 pa" style="top:30px;left:140px;">������ʾ��Ϣ����</p>
				<div class="f26 pa lftitle2" style="top:68px;">����</div>
				<input class="pa" style="top:62px;left:140px;width:320px;"/>
				<div class="f26 pa lftitle2" style="top:124px;">��ʵ����</div>
				<input class="pa" style="top:116px;left:140px;width:320px;" type="text"/>
				<img class="pa" style="top:176px;left:248px;" src="../static/web-lezpay/images/k_01_btn_normal.png" />
				<div class="f18 pa" style="top:182px;left:325px;">ѡ��֤��</div>
				<a class="pa" style="top:177px;left:250px;" href="p62_k_04.php"><img src='../static/web-lezpay/images/k_01_btn_normal_ghost.png'/></a>
				<div class="f26 pa lftitle2" style="top:182px;">֤������</div>
				<div class="f26 pa" style="top:182px;left:152px;">���֤</div>
				<div class="f26 pa lftitle2" style="top:234px;">֤����</div>
				<input class="pa" type="text" style="top:226px;left:140px;width:320px;" />
				<img class="pa" style="top:310px;left:190px;" src="../static/web-lezpay/images/k_01_btn_big.png" />
				<div class="f26 pa" style="top:322px;left:260px;">��һ��</div>
				<a class="pa" id="J_k_btn" style="top:302px;left:185px;" href="javascript:;"><img src='../static/web-lezpay/images/k_01_btn_big_ghost.png'/></a>
			</form>
		</div>
	  <!-- end container -->
	</div>
	<!-- end DIY -->
	<!-- begin bottom ������paging��ҳ,deleteɾ��,input�л����뷨-->
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