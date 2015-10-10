/*!
 * base
 * create: 2014/5/8
 */
/**
 * 基础模块
 * @module base
 * @since p53
 */
(function(window, undefined){

	/**
	 * 基础模块 - 交互逻辑
	 * @class base 
	 * @since p53
	 */
	var	$win	= $(window),
		doc		= document,
		$doc	= $(doc),
		loc		= location,
		WS		= window.WS || (window.WS = {}),
		init	= {},							//启动时加载程序
		base	= WS.base || (WS.base = {});	//接口程序

/**************************** begin p53 ****************************/

	/**
	 * 机顶盒编号
	 * @property base.tbId
	 * @since p53
	 * @type string
	 * @default 00000000000
	 */
	base.tbId = window.guangxi ? guangxi.getStbNum() || guangxi.System.newwork.macAddress.replace(/:/g, '').replace(/No Card/g, '') || doc.all.ip.value : '00000000000';

	/**
	 * 机顶盒类型
	 * @property base.tbType
	 * @since p53
	 * @type string
	 * @default 0000
	 */
	base.tbType = window.iPanel ? /(Safari)|(Chrome)|(Firefox)/.test(navigator.userAgent) ? base.tbId.length == 11 && base.tbId.substring(2, 4) == '19' ? '0002' : window.iPanel.getGlobalVar('RESOLUTION_1280_720') ? '0003' : '0002' : '0001' : '0000';

	/**
	 * 机顶盒验证
	 * @method base.checkTvbox
	 * @since p53
	 * @param {string} tbId 机顶盒号
	 * @param {string} tbType 机顶盒类型
	 * @param {string} [url] 跳转链接
	 * @return {none}
	 */
	base.checkTvbox = function(tbId, tbType, url){
		var url = url || loc.href.replace(/(tbId|tbType)=([^&]*)(&|$)/g, '').replace(/[&\?]$/g, '');
		if(base.tbId && base.tbType && (tbId == '' || tbType == '' || tbId != base.tbId || tbType != base.tbType)){
			loc.replace(url + (/\?/.test(url) ? '&' : '?') + 'tbId=' + base.tbId + '&tbType=' + base.tbType);
		}
	};

	/**
	 * 帮助页跳转url
	 * @property base.help
	 * @since p67
	 * @type string
	 * @default
	 */
	base.help = '';

	/**
	 * 初始化事件
	 * @method base.events
	 * @since p53
	 * @return {none}
	 */
	init.events = function(){
		var tag		= 0,
		fnn;
		$doc.on('keydown', function(e){	//按键功能, 测试功能, 上线时请注释
			switch(e.keyCode){
				//0刷新当前页面
				// case 48:
				// 	loc.reload();
				// 	break;
				// //9跳转至列表页
				// case 57:
				// 	loc.href = 'index.html';
				// 	break;
				//F2跳转至帮助页
				case 401:
					base.help && (loc.href = base.help);
					break;
				//F2跳转至帮助页
				case 49:
					//alert(base.help);
					break;
			}
		}).on('click', '.J_x_checkbooxs', function(){	//复选框
			var $this	= $(this);
			$this.find('input[type=hidden]').val($this.toggleClass('on').hasClass('on') ? 1 : 0);
			base.getPrice();
		}).on('focus', '.J_x_input input', function(){	//输入框获取焦点样式
			$(this).parent('.J_x_input').addClass('on');
		}).on('blur', '.J_x_input input', function(){	//输入框失去焦点样式
			$(this).parent('.J_x_input').removeClass('on');
		}).on('focus', '.J_x_help', function(){	//设置帮助页面url
			var $this = $(this);
			base.help = $this.attr('data-help') || $this.attr('href') || '';
		}).on('blur', '.J_x_help', function(){	//清空帮助页面url
			base.help = '';
		})
		/*.on('submit','.J_j_subimt',function(){	//支付表单验证
			return base.FormValidation($(this));
		})
		*/
		.on('focus', '.J_j_subimt input.check, .J_x_login input', function(){
			var $prompt = $('.J_j_subimt .error, .J_x_login .error');
			if($prompt.hasClass('on')){
				$prompt.removeClass('on');
				return false;
			}
			$prompt.hide();
		}).on('focus', '.J_x_login input[type=text], .J_c_crecaph, .J_c_bankph, .J_c_bankphs, .J_c_bankphes, .J_c_bankcabl', function () {	//
			var $this	= $(this),
				value	= $this.val();
			/^[\d][\d\s]+$/.test(value) && $this.val(value.replace(/\D/g, ''));
		}).on('click','.J_j_submit',function(){
			// var $form = $(this).parents('form');
			// if($('.J_j_login').size(){
			// 	base.loginSubmit($form,function(){
			// 		$form.submit();
			// 		tag=1;
			// 	});
			// }
			$(this).parents('form').submit();
		})
		// .on('input', '[data-type=id]', function(){//截取银行卡号最多19位,每4位空一格
		// 	//
		// 	var i, len,
		// 		$this	= $(this),
		// 		value	= $this.val(),
		// 		max		= 19,
		// 		_value	= '';
		// 	if(!/^[\d][\d\s]+$/.test(value))return;
		// 	value = value.replace(/\D/g, '');
		// 	len = value.length;
		// 	len > max && (value = value.slice(0, max), len = max);
		// 	for(i = 0; i < len; i++)_value += (i % 4 || i == 0 ? '' : ' ' ) + value[i];
		// 	$this.val(_value);
		// })
		.on('submit', '.J_j_login', function(){//银联支付卡输入表单提交验证
				var 
				// i, len,
						$this = $(this);
						// $input= $this.find('input[data-type=id]'),
						// value	= $input.val(),
				// 		max		= 19,
				// 		_value	= '';
				// if(!/^[\d][\d\s]+$/.test(value))return;
				// value = value.replace(/\D/g, '');
				// len = value.length;
				// len > max && (value = value.slice(0, max), len = max);
				// for(i = 0; i < len; i++)_value += (i % 4 || i == 0 ? '' : ' ' ) + value[i];
				// $input.val(_value);
				// alert(22)
				return base.loginSubmit($this,function(){
					tag=1;
				});
				if(tag==0) return false;
		}).on('submit', '.J_j_cupform', function(){//银联支付信息输入页-储蓄卡1表单提交验证
			  return base.savingsSubmit($(this),function(){
				tag=1;
			});
			if(tag==0) return false;
		}).on('input','.J_j_wrap input[type=text]',function(){//支付系统input输入时清空错误提示
			$('.J_j_error').text('');
		});
		//页面加载控制焦点
		$('.J_x_focus').focus();
		//加载配置复选框选中状态
		$('.J_x_checkbooxs input').each(function(){
			var $this = $(this);
			+ $this.val() && $this.parents('a').addClass('on');
		});
	};
/**
 * 加载中动画
 * @method base.dIan
 * @since p67
 * @return {none}
 */
init.dIan = function(){//加载中动画
	var $dian = $('.J_j_dian'),
			i = 0,
			str='.';
	if($dian.size()){
		timer = setInterval(function(){
			i++;
			str+='.';
			if(i>5){
				str='.';
				i=0;
			}
			$dian.text(str);
		},500);
	}
}

	// /**
	//  * 选择支付渠道
	//  * @method base.banks
	//  * @since p53
	//  * @return {none}
	//  */
	// init.banks = function(){
	// 	if(!$('.J_x_lezpay_banks').size())return;
	// 	var tag,
	// 		$banks	= $('.J_x_lezpay_banks'),
	// 		$li		= $banks.find('ul li'),
	// 		$prev	= $banks.find('em.prev a'),
	// 		$next	= $banks.find('em.next a'),
	// 		size	= $li.size(),
	// 		index	= 0,
	// 		timer	= null;
	// 	if(size <= 1){
	// 		$prev.remove();
	// 		$next.remove();
	// 		$li.show().find('a:first-child').focus();
	// 		return;
	// 	}
	// 	$prev.on('click', function(){_go(-1);});
	// 	$next.on('click', function(){_go();});
	// 	$li.on('webkitAnimationEnd animationend', function(){
	// 		var $this = $(this);
	// 		if($this.hasClass('x_animation_r2c') || $this.hasClass('x_animation_l2c')){
	// 			$this.addClass('x_animation_static').removeClass('x_animation_r2c x_animation_l2c').find('a:first-child').focus();
	// 			tag = 0;
	// 		}else{
	// 			$this.removeClass('x_animation_c2l x_animation_c2r');
	// 		}
	// 	}).find('a').each(function(){
	// 		var $this	= $(this),
	// 			width	= $this.width(),
	// 			height	= $this.height(),
	// 			canvas	= $('<canvas></canvas>').appendTo($this).get(0),
	// 			contxt	= canvas.getContext('2d'),
	// 			grad	= contxt.createLinearGradient(0, height / 2, 0, height),
	// 			img		= new Image();
	// 		canvas.width = width;
	// 		canvas.height = height;
	// 		img.onload = function(){
	// 			contxt.drawImage(this, 0, 0, width, height);
	// 			contxt.globalCompositeOperation = 'destination-out';
	// 			grad.addColorStop(1, 'rgba(0,0,0,.5)');
	// 			grad.addColorStop(0, 'rgba(0,0,0,1)');
	// 			contxt.fillStyle = grad;
	// 			contxt.rect(0, 0, width, height);
	// 			contxt.fill();
	// 		};
	// 		img.src = $this.find('img').attr('src');
	// 	}).end().eq(index).addClass('x_animation_static').find('a:first-child').focus();
	// 	_check(index);
	// 	function _go(n){
	// 		var j = index + (n || 1);
	// 		if(tag || j < 0 || j >= size)return;
	// 		tag = 1;
	// 		$li.eq(index).addClass(j > index ? 'x_animation_c2l' : 'x_animation_c2r').removeClass('x_animation_static').end().eq(j).addClass(j > index ? 'x_animation_r2c' : 'x_animation_l2c');
	// 		_check(j);
	// 		index = j;
	// 	}
	// 	function _check(n){
	// 		$prev[n == 0 ? 'hide' : 'show']();
	// 		$next[n == size - 1 ? 'hide' : 'show']();
	// 	};
	// };

	/**
	 * 计算时间
	 * @method base.date
	 * @since p53
	 * @return {none}
	 */
	init.date = function(timestr){
		if(!$('.J_x_date').size())return;
		var _run,
			$date	= $('.J_x_date'),
			date	= (timestr || $date.text()).split('|'),
			days	= [31, date[0] % 4 ? 28 : 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
			min		= [0, 1, 1, 0, 0, 0],
			max		= [0, 12, days[(+ date[1]) - 1], 23, 59, 59];
		(_run = function(){
			$date.text(getstr());
			setTimeout(_run, 1000);
		})();
		function getstr(){
			_add(5);
			return _zero(date[1]) + '月' + _zero(date[2]) + '日 ' + _zero(date[3]) + ':' + _zero(date[4]) + ':' + _zero(date[5]);
		}
		function _zero(n){
			return n < 10 ? '0' + (+ n).toString() : + n;
		}
		function _add(i){
			var num = + date[i];
			if(num >= max[i]){
				date[i] = min[i];
				i > 1 && _add(i - 1);
			}else{
				date[i] = num + 1;
			}
		}
	};

	/**
	 * 获取cookie
	 * @method base.getCookie
	 * @since p53
	 * @param {string} name 名称
	 * @return {string|null}
	 */
	base.getCookie = function(name){
		var arr = doc.cookie.match(new RegExp('(^| )' + name + '=([^;]*)(;|$)'));
		return arr ? decodeURIComponent(arr[2]) : '';
	};

	/**
	 * 设置cookie
	 * @method base.setCookie
	 * @since p53
	 * @param {string} name 名称
	 * @param {string} [value] 值,默认不传参undefined为设置过期
	 * @param {number} [expires] 到期时间,单位:天,默认不设置浏览器关闭就清除,-1为设置过期
	 * @param {string} [path] 路径
	 * @return {none}
	 */
	base.setCookie = function(name, value, expires, path){
		var d	= new Date();
		value === undefined && (expires = -1);
		expires && d.setDate(d.getDate() + expires);
		doc.cookie = name + '=' + encodeURIComponent(value) + (expires ? ';expires=' + d.toGMTString() : '') + (path ? ';path=' + path : '');
	};

	/**
	 * 5秒时间倒计时
	 * @method base.count
	 * @since p67
	 * @return {none}
	 */
	init.count = function(){
		var intDiff = parseInt(5);//倒计时总秒数量
		function timer(intDiff) {
			setInterval(function () {
				 var second = 0;//时间默认值
				 var secsh = $('.J_c_second_show');
				 if (intDiff == 0) {
				     secsh.text('0秒后自动返回');
				     loc.href = secsh.attr('data-url');//倒计时结束跳转
				     return false;
				 }
				 else {
				     second = Math.floor(intDiff);
				     secsh.text(second + '秒后自动返回');
				     intDiff--;
				 }
				}, 1000);
		}
		if (!$('body').find('.J_c_second_show').size()) return;
		    $(function () {
		        timer(intDiff);
		    });

	}

/**************************** end p53 ****************************/



/**************************** begin p54 ****************************/

	/**
	 * 初始化事件
	 * @method base.eventsP54
	 * @since p54
	 * @return {none}
	 */
	init.eventsP54 = function(){
		$doc
		// .on('focus', '.J_c_bankcabl, .J_c_paycapwd, .J_c_bankph, .J_c_idca, .J_c_hascaname, .J_c_tfset, .J_c_endth', function () {	//输入框获取焦点隐藏提示
		// 	var $prompt = $('.J_c_banktip');
		// 	if($prompt.hasClass('on')){
		// 		$prompt.removeClass('on');
		// 		return false;
		// 	}
		// 	$prompt.hide();
		// }).on('submit', '.J_c_payinfocrebt', function () {	//支付信息输入页（特殊）表单验证
		//     return base.payinfocrecheck($(this));
		// }).on('submit', '.J_c_crecabts', function () {	//卡号输入页表单验证(验证码)
		//     return base.crecascheck($(this));
		// }).on('submit', '.J_c_bankcano', function () {	//卡号输入页表单验证
		//     return base.banknocheck($(this));
		// })
		.on('blur', '.J_c_crecaph, .J_c_bankph, .J_c_bankphs, .J_c_bankphes', function () {	//手机号码中间加空格
		    var i = 0,
                str = '',
                $this = $(this),
                value = $this.val();
		    if (value == '') return false;
		    value = value.replace(/\D/g, '').slice(0, 11);
		    for (i = 0; i < value.length; i++) {
		        str += value[i] + (!((i - 2) % 4) ? ' ' : '');
		    }
		    $this.val(str);
		})
	};
	/**************************** begin p67 ****************************/
	 /**
	 * 90秒时间倒计时
	 * @method base.countP67
	 * @since p67
	 * @return {none}
	 */
	init.countP67 = function(){
	    var timers = null;
					//tb = null;
	    function timer(){
	    	var $times = $('.J_j_times'),
	    	    $gAin  = $('.J_j_gain'),
	    	    intDiff = 90;
	    	$times.show();
	    	$gAin.hide(); 
	    	if($('.J_j_gain').size()){
					timers=setInterval(function(){
					  intDiff--;
					  $times.text('验证码已经发送，预计' + intDiff + '秒内收到，如未收到请重新获取。' );
						if (intDiff == 0) {
						     clearInterval(timers);
						     $times.text('' );
						     //tb = 1;
						     $gAin.show();
						     $times.hide();
						     return false;
						}
					}, 1000);
				}
			}
		$doc.on('click', '.J_j_gain',function(){
			// if(tb==1){
				base.gAin($(this),function(){
					timer();
					//tb = 1;
				
				//!tb && timer();
				
				});
			return false;
		}).ready(timer());
	};


/**
	 * 银联支付卡选择页,焦点在第一张银行卡
	 * @method base.P67_select_focus
	 * @since p67
	 * @return {none}
	 */
init.P67_select_focus = function(){
	var $sBox = $('.J_j_select'),
			$bank = $sBox.find('a');
 if($bank.size()>1){
 	$bank.eq(1).focus();
 }
}
/**************************** end p67 ****************************/

/**************************** begin p62 **************************/

	init.eventsP62 = function(){//发送验证码
		var	chong	=	0;
		$doc.on('click', '.J_k_code',function(){
			return base.k_ajax($(this));
		}).on('focus', '.J_k_checkbox',function(){//checkbox获得焦点事件
			$(this).removeClass('on').addClass($(this).siblings('input').val() != 0?'focus2':'focus1');
		}).on('blur', '.J_k_checkbox',function(){//checkbox失去焦点事件
			$(this).removeClass('focus1 focus2 on').addClass($(this).siblings('input').val() != 0?'on':'');
		}).on('click', '.J_k_checkbox',function(){//checkbox点击事件
			var $input	=	$(this).siblings('input');
			$input.val($input.val() != 0?'0':'1');
			$(this).removeClass('focus1 focus2 on').addClass($input.val() != 0?'focus2':'focus1');
		}).on('blur','.J_k_phone',function(){//344方式显示手机号码
			var		$this	=	$(this),
					$val	=	$this.val(),
					$noSpac	=	$val.replace(/\W/g, ""),
					str		=	'';
			for(i=0;i<$noSpac.length;i++){
				str += ((i-3) % 4?'':' ') + $noSpac[i];
			}
			$this.val(str);
			return false;
		}).on('blur','.J_k_cardnum',function(){//4443方式显示卡号
			var		$this	=	$(this),
					$val	=	$this.val(),
					$noSpac	=	$val.replace(/\W/g, ""),
					str		=	'';
			$val	=	$noSpac;
			for(i=0;i<$noSpac.length;i++){
				str += ( i % 4?'':i == 0?'':' ') + $val[i];
			}
			$this.val(str);
			return false;
		}).on('submit', '.J_k_form',function(){//快捷支付验证
			var $form = $(this),
				$test	=	base.k_pay($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form01',function(){//储蓄卡账户信息验证
			var $form = $(this),
				$test	=	base.k_pay01($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form02',function(){//储蓄卡验证码验证
			var $form = $(this),
				$test	=	base.k_pay02($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form03',function(){//信用卡账户信息验证
			var $form = $(this),
				$test	=	base.k_pay03($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form04',function(){//添加信用卡验证
			var $form = $(this),
				$test	=	base.k_pay04($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form05',function(){//修改登录密码验证
			var $form = $(this),
				$test	=	base.k_pay05($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form06',function(){//创建支付密码验证
			var $form = $(this),
				$test	=	base.k_pay06($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form07',function(){//修改支付密码验证
			var $form = $(this),
				$test	=	base.k_pay07($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form08',function(){//找回支付密码验证
			var $form = $(this),
				$test	=	base.k_pay08($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		}).on('submit', '.J_k_form09',function(){//找回支付密码新密码验证
			var $form = $(this),
				$test	=	base.k_pay09($form);
			if(chong != 0){return false;}
			if($test != false){chong++;}
			return $test;
		});
	};
/**
	 * 长文本翻页
	 * @method base.longtext
	 * @since p62
	 * @return {none}
	 */
	init.longtext = function(){
		if(!$('.J_x_longtext').size())return;
		var _page,
			$lt	= $('.J_x_longtext'),
			$sc	= $lt.find('.scroller'),
			$pg	= $('.J_x_page'),
			$em	= $pg.find('em'),
			$sp	= $pg.find('span'),
			h	= $lt.height(),
			max	= Math.ceil($sc.height() / h),
			min	= 0,
			now	= 0;
		//$sc.height((max - 1) * h);
		$sp.html(max);
		(_page = function(n){
			$em.html(n);
		})(now+1);
		$doc.on('keydown', function(e){
			e = e || event;
			switch(e.keyCode){
				case 33:
					_show(-1);
					break;
				case 34:
					_show(1);
					break;
			}
		});
		function _show(n){
			var j = n === undefined ? min : now + n;
			if(j < min || j >= max)return;
			$sc.css('marginTop', - j * h);
			_page(j + 1);
			now = j;
		}
	};


	/**
	 * 选择付款卡翻页
	 * @method base.showpage
	 * @since p61
	 * @param {object} data 数据
	 * @param {string} temp html模板
	 * @param {array} amountType 按机顶盒0002&0003区别每页个数
	 * @return {none}
	 */
	base.showpage = function(data, temp, amountType){
		if(!$('.J_x_showpage').size())return;
		var _show,
			$ul		= $('.J_x_showpage'),
			$title	= $('.J_x_showpage_title'),
			$page	= $('.J_x_page'),
			$em		= $page.find('em'),
			amount	= base.tbType == '0003' ? amountType[1] : amountType[0],
			pages	= (function(){
				var day,
					pages = {title: [], data: []};
				for(day in data){
					var d		= data[day].data,
						html	= '';
					for(var i = 0, len = d.length; i < len; i++){
						html += template(d[i], temp);
						if(!((i + 1) % amount) || i == len - 1){
							pages.title.push(day);
							pages.data.push(html);
							html = '';
						}
					}
				}
				return pages;
			})(),
			page	= 0,
			min		= 0,
			size	= pages.data.length;
		$page.find('span').html(size);
		(_show = function(n){
			var j = n === undefined ? min : page + n;
			if(j < min || j >= size)return;
			$title.size() && $title.html(pages.title[j]);
			$ul.html(pages.data[j]).children().first().find('a').focus();
			$em.html(j + 1);
			page = j;
		})();
		$doc.on('keydown', function(e){
			e = e || event;
			switch(e.keyCode){
				case 33:
					_show(-1);
					break;
				case 34:
					_show(1);
					break;
			}
		});
		function template(d, temp){
			var name;
			for(name in d){
				temp = temp.replace('{$' + name + '}', d[name]);
			}
			return temp;
		}
	};


	if($('.J_c_slefocus').size()){
		$('.J_c_slefocus li:eq(0) a').focus();
 	}
/**************************** begin p62 **************************/

/**************************** begin p119 **************************/
init.p119events = function (){
	var _tag = 0;
	$doc.on('click', '.J_j_radio_btn a', function(){
		var $this = $(this),
				$cld = $('.J_j_radio_btn').children();
		if($this.hasClass('active')){
			return false;
		}
		$this.addClass('active').next('input[type=radio]').prop('checked',true);
		$cld.eq(_tag).removeClass('active').next('input[type=radio]').prop('checked',false);
		_tag = $this.index();
	});
}

/**************************** end p119 **************************/
	$.extend(base, $.loader(init));

})(window);