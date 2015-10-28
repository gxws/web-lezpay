/*!
 * baseAjax
 * create: 2014/8/4
 */
/**
 * 基础模块
 * @module base
 * @since p53
 */
(function(window, undefined){

    /**
	 * 基础模块 - 业务逻辑
	 * @class baseAjax
	 * @since p53
	 */
    var	$win	= $(window),
		$doc	= $(document),
		loc		= location,
		WS		= window.WS || (window.WS = {}),
		init	= {},							//启动时加载程序
		base	= WS.base || (WS.base = {});	//接口程序

    /**************************** begin p53 ****************************/

    /**
	 * 发送机顶盒数据给后端
	 * @property base.setTvbox
	 * @since p53
	 * @param {object} $form form表单对象
	 * @return none
	 */
	/*
    base.setTvbox = function(url, fn){
		$.post(url, {tbId: base.tbId, tbType: base.tbType}, function(d){
			if(d.status){
				fn(d.reload || 0, d.url || '');
			}
		});
	};
	*/

    /**
	 * 常用正则
	 * @property base.regs
	 * @since p53
	 * @type object
	 */
    base.regs = {
        s_d: /^\d*$/,     //匹配纯数字
        s_3: /^\d{3}$/,     //匹配纯数字3位
        s_4: /^\d{4}$/,     //匹配纯数字4位
        s_6: /^\d{6}$/,    //匹配纯数字6位
        s_11: /^\d{11}$/,   //匹配纯数字11位
        s_15_18: /^(\d{15}|\d{17}[A-Za-z]|\d{18})$/,     //匹配身份证号
    };

    /**
	 * 常用正则
	 * @property base.FormValidation
	 * @since p53
	 * @param {object} $form form表单对象
	 * @return {none}
	 */
    base.FormValidation = function($form){
        var $check = $form.find('.check');
        if($check.val() == ''){
            $check.focus();
            $form.find('.error').text('不能为空!').show();
            return false;
        }
    };

    /**
     * 兼容本地demo的ajax方法
     * @method base.ajaxgo
     * @since p56
     * @param {string} url 请求链接
     * @param {function} [fn] 方法
     * @param {number|string|object} [demo] 测试数据
     * @param {object} [data] 数据
     * @param {string} [method=post] 请求方式
     * @param {string} [datatype=json] 返回数据的格式
     * @return {none}
     */
    base.ajaxgo = function(url, fn, demo, data, method, datatype){
        fn = fn || Fn;
        url == 'javascript:;' ? fn(demo) : $[method || 'post'](url, data, fn, datatype || 'json');
    };
    /**
	 * PT-16-银联支付卡输入页
	 * @method base.loginSubmit
	 * @since p67
	 * @param {object} $form form表单对象
	 * @return {bool} true提交表单,false阻止
	 */
    base.loginSubmit = function($form,fn){
        var i, len,
            $Id  = $form.find('input[data-type=id]'),
            vId  = $Id.val(),
            $J_j_error = $form.find('.J_j_error'),
            vTex = vId.replace(/\D/g, '').length,
                        //$this = $(this),
                        //$input= $this.find('input[data-type=id]'),
                        //value   = $input.val(),
                        max     = 19,
                        _value  = '';

                if(!/^[\d][\d\s]+$/.test(vId)){
                    $J_j_error.text('账号位数不对，请重新输入！');
                    return false;
                }
                vId = vId.replace(/\D/g, '');
                len = vId.length;
                len > max && (vId = vId.slice(0, max), len = max);
                for(i = 0; i < len; i++)_value += (i % 4 || i == 0 ? '' : ' ' ) + vId[i];
                $Id.val(_value);
        if(!(vTex ==16 || vTex ==19)){	//判断卡号是否为空或为19位或16位的卡号
            $J_j_error.text('账号位数不对，请重新输入！');
            return false;
        } 
        fn();
    };
    /**
     * PT-17-银联支付表单验证
     * @method base.savingsSubmit
     * @since p67
     * @param {object} $form form表单对象
     * @return {bool} true提交表单,false阻止
     */
    base.savingsSubmit = function($form,fn){
        var $Wal   = $form.find('input[data-type=withdrawal]'),
            vWal,
            $Phone = $form.find('input[data-type=phone]'),
            vPhone,
            $Idy   = $form.find('input[data-type=identity]'),
            vIdy,
            $Vay   = $form.find('input[data-type=validity]'),
            vVay,
            $Back  = $form.find('input[data-type=back]'),
            vBack,
            $Code  = $form.find('input[data-type=code]'),
            vCode  = $Code.val(),
            $J_j_error = $form.find('.J_j_error');
        if($Idy.size() && ((vIdy = $Idy.val()) == '' || (!WS.base.regs.s_6.test(vIdy)))){
            $J_j_error.text(vIdy == '' ? '身份证后六位不能为空' : '身份证后六位只能为6位');
            return false;
        }
        if($Wal.size() && ((vWal = $Wal.val()) == '' || (!WS.base.regs.s_6.test(vWal)))){
            $J_j_error.text(vWal == '' ? '银行卡密码不能为空' : '银卡密码只能为6位');
            return false;
        }        
        if($Vay.size() && ((vVay = $Vay.val()) == '' || (!WS.base.regs.s_4.test(vVay)))){
            $J_j_error.text(vVay == '' ? '有效期不能为空' : '有效期只能为4位数字');
            return false;
        }
        if($Back.size() && ((vBack = $Back.val()) == '' || (!WS.base.regs.s_3.test(vBack)))){
            $J_j_error.text(vBack == '' ? '卡背面末三位不能为空' : '卡背面末三位只能为3位数字');
            return false;
        }
        if($Phone.size() && ((vPhone = $Phone.val()) == '' || (!WS.base.regs.s_11.test(vPhone)))){
            $J_j_error.text(vPhone == '' ? '银行预留手机号不能为空' : '银行预留手机号只能为11位数字');
            return false;
        }
        if($Code.size() && ((vCode = $Code.val()) == '' || (!WS.base.regs.s_6.test(vCode)))){
            $J_j_error.text(vCode == '' ? '短信验证码不能为空' : '短信验证码只能为6位数字');
            return false;
        }
        fn();
    };
    /**
     * PT-18-银联动态码输入页,重获验证码
     * @method base.gAin
     * @since p67
     * @param {object} $btn 按钮对象
     * @return {bool} true提交表单,false阻止
     */
    base.gAin = function($btn,fn){
        base.ajaxgo($btn.attr('href'), function(d){
            if(d.status == 1){
                fn();
            }
        },{"status":1});
    };
/**


    /**
	 * 计算付款额
	 * @method base.getPrice
	 * @since p53
	 * @return {none}
	 */
    init.getPrice = function(){
        /*
		var $total		= $('.J_x_total'),
			total		= + $total.attr('_total');
		$('.J_x_checkbooxs input[type="checkbox"]').each(function(){
			this.checked && (total -= + $(this).attr('_value'));
		});
		$total.text(total < 0 ? 0 : total);
		*/
    };

    /**************************** end p53 ****************************/

    /**************************** begin p54 ****************************/

    //支付信息输入页(特殊)文本框判断
    base.payinfocrecheck = function ($wrap, fn) {

        var text,
            $idca        = $wrap.find('.J_c_idca'),         //身份证后6位
            idca         = $idca.val(),
            $paycapwds   = $wrap.find('.J_c_paycapwd'),    //银行卡密码
            paycapwds    = $paycapwds.val(),
            $bankphs     = $wrap.find('.J_c_bankph'),      //银行预留手机号
            bankphs      = $bankphs.val(),
            $tfset       = $wrap.find('.J_c_tfset'),        //有效期
            tfset        = $tfset.val(),
            $endth       = $wrap.find('.J_c_endth'),        //卡背面末三位
            endth        = $endth.val(),
            $hascaname   = $wrap.find('.J_c_hascaname'),    //持卡人姓名
            hascaname    = $hascaname.val()

        if ($hascaname.size()) {
            if (hascaname == '') {
                $('.J_c_banktip').text('姓名不能为空').show();
                return false;
            }
        }
        if ($idca.size()) {
            if (idca == '') {
                $('.J_c_banktip').text('身份证后六位不能为空').show();
                return false;
            } else if (!WS.base.regs.s_6.test(idca)) {
                $('.J_c_banktip').text('身份证后六位只能为6位').show();
                return false;
            }
        }
        if ($paycapwds.size()) {
            if (paycapwds == '') {
                $('.J_c_banktip').text('银行卡密码不能为空').show();
                return false;
            } else if (!WS.base.regs.s_6.test(paycapwds)) {
                $('.J_c_banktip').text('银行卡密码只能为6位').show();
                return false;
            }
        }
        if ($tfset.size()) {
            if (tfset == '') {
                $('.J_c_banktip').text('有限期不能为空').show();
                return false;
            } else if (!WS.base.regs.s_4.test(tfset)) {
                $('.J_c_banktip').text('有限期只能为4位数字').show();
                return false;
            }
        }
        if ($endth.size()) {
            if (endth == '') {
                $('.J_c_banktip').text('卡背面末三位不能为空').show();
                return false;
            } else if (!WS.base.regs.s_3.test(endth)) {
                $('.J_c_banktip').text('卡背面末三位只能为3位数字').show();
                return false;
            }
        }
        if ($bankphs.size()) {
            if (bankphs == '') {
                $('.J_c_banktip').text('银行预留手机号不能为空').show();
                return false;
            } else if (!WS.base.regs.s_11.test(bankphs.replace(/\s/g, ''))) {
                $('.J_c_banktip').text('银行预留手机号只能为11位').show();
                return false;
            }
        }
    };


    //卡号输入页文本框判断(获取验证码)
    base.crecascheck = function ($wrap) {

        var text,
            $bankcabl = $wrap.find('.J_c_bankcabl'),
            bankcabl = $bankcabl.val();

        if (bankcabl == '') {
            $('.J_c_banktip').text('验证码不能为空').show();
            return false;
        }
    };

    //卡号输入页文本框判断
    base.banknocheck = function ($wrap) {

        var text,
            $bankcabl = $wrap.find('.J_c_bankcabl'),
            bankcabl = $bankcabl.val(),
			$tip	= $('.J_c_banktip');

        if (bankcabl == '') {
            $tip.text('银行卡号不能为空').show();
            return false;
        } else if (!WS.base.regs.s_d.test(bankcabl.replace(/\s/g, ''))) {
            $tip.text('银行卡号只能为数字').show();
            return false;
        }else if(bankcabl.replace(/\s/g, '').length < 16){
			$tip.text('银行卡号长度过短').show();
            return false;
		}
    };

    /**************************** end p54 ****************************/
    
    /**************************** begin p60 ****************************/
    //获取数据（是否支付成功）页面跳转
    base.payready = function (url, url1, url2) {
        if (!$('.J_j_dian').size()) return;
        var speed = 6000,
            i   = 0,
            timer = setInterval(function () {
                    i++;
                    $.get(url, function (d) {
                        if (d.status = 200) {
                            if (d.finished) {
                                clearInterval(timer);
                                loc.href = url1;
                            }
                            else if (i>=10) {                               
                                clearInterval(timer);
                                loc.href = url2;
                            }
                        }
                    }, 'json');
                }, speed);
    }

	init.payelli= function (){
		if (!$('.J_c_elli').size()) return;
            var speed = 500,
                i = 0,
                J_c_elli = $('.J_c_elli');
            timer = setInterval(function () {
                var str='';
                i++;
                    if (i > 6 ) {
                        i = 1;
                    }
                    for (var c = 0; c < i;c++){
                        str+='.';
                    }
                J_c_elli.text(str);
                }, speed);
	}

/**************************** end p60 ****************************/

/**************************** begin p62 ****************************/
	
	/**
	 * 通用验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {arr}
	 */
	base.verify = function($form){
		var	$yan	=	$form.find('input[J_k_verify]'),
			$same	=	$form.find('input[J_k_same]'),
			arr		=	new Array(),
			a		=	0,
			b		=	1;
		for(i=0;i<$yan.size();i++){
			var	input	=	$yan.eq(i).attr('J_k_verify'),
				val		=	$yan.eq(i).val(),
				leixing	=	Math.floor(input%10000/1000),
				weishu	=	Math.floor(input%10000%1000/10),
				output		=	'';
			/*------------ 非空验证---验证输入1,不验证输入0,非空返回1,空返回0,不验证返回2 -------------*/
			if(Math.floor(input/10000)){val.replace(/\s/g,'')==''?output += 0:output += 1;}
			else{output += 2;}
			/*------------ 数据类型验证---纯数字验证输入1,纯字母验证输入2,字母数字混合输入3,不验证输入0,成立返回1,不成立返回0,不验证返回2 -------------*/
			if(leixing == 1){/^\d+$/.test(val.replace(/\s/g,''))?output += 1:output +=0;}
			else if(leixing == 2){/^[a-zA-Z]+$/.test(val.replace(/\s/g,''))?output += 1:output +=0;}
			else if(leixing == 3){/^[A-Za-z0-9]+$/.test(val.replace(/\s/g,''))?output += 1:output +=0;}
			else{output += 2;}
			/*------------ 位数最小值验证---两位数,数值为最小限制值,不验证输入00,成立返回1,不成立返回0,不验证返回2 -------------*/
			if(weishu!=19&&weishu!=0){weishu <= val.replace(/\s/g,'').length?output += 1:output +=0;}
			else if(weishu==19){weishu <= val.replace(/\s/g,'').length?output += 1:val.replace(/\s/g,'').length >= 16?output += 1:output +=0;}
			else{output += 2;}
			/*------------ 位数精确验证 ---验证输入1,不验证输入0,成立返回1,不成立返回0,不验证返回2----------*/
			if(Math.floor(input%10000%1000%10)){
				if(weishu !=19){val.replace(/\s/g,'').length == weishu?output += 1:output +=0;}
				else{val.replace(/\s/g,'').length == weishu?output += 1:val.replace(/\s/g,'').length >= 16 && val.replace(/\s/g,'').length <= 19?output += 1:output +=0;}
			}
			else{output += 2;}
			if(/[0]/.test(output)){arr[0]=i;arr[1]=output;return arr;}
			else{arr[0]='true';}
		}
		if($same.size() >= 2 && $same.eq(0).val()!=$same.eq(1).val()){arr[0]='Nosame';}
		return arr;
	}

	/**
	 * 快捷支付验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"支付密码是6位以上字符！";break;
			case 1:str	=	"短信验证码只能是6位数字！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 储蓄卡账户信息验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay01 = function($form){
		var	str	=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0: str	=	"银行卡只能是16~19位！";break;
			case 1: str	=	"姓名不能为空！";break;
			case 2: str	=	"证件号只能为字母或数字！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 储蓄卡验证码验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay02 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"手机号只能是11位数字！";break;
			case 1:str	=	"短信验证码只能是6位数字！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
		if($form.find('input[type=hidden]').val() == 0){
			$('.J_k_tishi').html('请同意服务条款！');
			return false;
		}
	}

	/**
	 * 信用卡账户信息验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay03 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"银行卡只能是16~19位！";break;
			case 1:str	=	"有效期只能是4位数字！";break;
			case 2:str	=	"卡背面末三位只能是3位数字！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 添加信用卡验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay04 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"证件号只能为字母或数字！";break;
			case 1:str	=	"姓名不能为空！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 修改登录密码验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay05 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"原登录密码是6位以上字符！";break;
			case 1:str	=	"新登录密码是6位以上字符！";break;
			case 2:str	=	"确认登录密码是6位以上字符！";break;
			case 'Nosame':str	=	"两次输入的密码不一致哦！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 修改登录密码验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay06 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"短信验证码只能是6位数字！";break;
			case 1:str	=	"设置支付密码是6位以上字符！";break;
			case 2:str	=	"确认支付密码是6位以上字符！";break;
			case 'Nosame':str	=	"两次输入的密码不一致哦！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 修改登录密码验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay07 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"原支付密码是6位以上字符！";break;
			case 1:str	=	"新支付密码是6位以上字符！";break;
			case 2:str	=	"确认支付密码是6位以上字符！";break;
			case 'Nosame':str	=	"两次输入的密码不一致哦！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 修改登录密码验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay08 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"短信验证码只能是6位数字！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 修改登录密码验证
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_pay09 = function($form){
		var	str		=	'',
			i	=	WS.base.verify($form);
		switch(i[0])
		{
			case 0:str	=	"新支付密码是6位以上字符！";break;
			case 1:str	=	"确认支付密码是6位以上字符！";break;
			case 'Nosame':str	=	"两次输入的密码不一致哦！";break;
		}
		$('.J_k_tishi').html(str);
		if(i[0]!='true'){return false;}
	}

	/**
	 * 获取验证码
	 * @method base.idSubmit
	 * @since p62
	 * @param {object} $form 表单对象
	 * @return {bool}
	 */
	base.k_ajax = function($form){
		base.ajaxgo($form.attr('ajax_url'),function(data){	
			if(data.status == 1){
				var $waring	=	$('.J_k_codeWaring'),
					$code	=	$('.J_k_code'),
					$num	=	$('.J_k_num'),
					$phone	=	$('.J_k_phoneNumber').length?$('.J_k_phoneNumber').val().replace(/\s/g,''):'',
					i		=	5,
					t;
				$form.hide();
				$waring.show();
				if($num.length && $phone){$num.text($phone.substr(0,3) + '****' + $phone.substr(7,4));}
				timer	=	function(){
					i--;
					if(i == 0){
						clearInterval(t);
						$code.show();
						$waring.hide();
						i = 5;
					}
					$waring.find('span').html(i);
				}
				t	=	setInterval(timer,1000);
				return false;
			}
			if(data.status == 0){$('.J_k_tishi').text(data.message);}
		},{"status":"1","message":"XXX","data":{"phone":"XXX"}},{"phone":$('.J_k_phoneNumber').length != 0?$('.J_k_phoneNumber').val().replace(/\s/g,''):''});
		return false;
	}

/**************************** end p62 ****************************/

/**************************** begin p119 **************************/
	/**
	 * 二维码扫码支付
	 * @method base.k_twoCode
	 * @since p119
	 * @return {bool}
	 */
	init.k_twoCode = function(){
		var	t,
            times = 0,
			$code	=	$('.J_k_twoCode');
		if($code.size()){
            (function time(){
    			t = setTimeout(function(){
    				base.ajaxgo($code.attr('twoCode'),function(data){
    					data.status == 1 ? location.href = $code.attr('data-succeedUrl') : data.status == 2 ? location.href = $code.attr('data-waitUrl') : false ;
    				},{"status":0},null);
                    times+=3;
                    if(times>=240){
                        location.href = $code.attr('data-timeoutUrl');
                    }
    				time();
    			},3000);
            })();
		}
	}
/**************************** end p119 ****************************/
/**************************** begin p131 ****************************/
/**
     * 支付宝二维码扫码支付
     * @method base.k_twoCode
     * @since p131
     * @return {bool}
     */
init.zfbTwoCode = function(){
    var t,
        times = 0,
        $code = $('.J_j_twoCode');
        if($code.size()){
            (function time(){
                t = setTimeout(function(){
                    base.ajaxgo($code.attr('data-ajax'),function(d){
                        if(d.status == 1){
                            location.href = $code.attr('data-succeed');
                        }
                    },{"status":"0"});
                    times+=3;
                    if(times>=240){
                        location.href = $code.attr('data-timeout');
                    }
                    time();
                },3000);
            })();
        }
}
/**************************** end p131 ****************************/
	$.extend(base, $.loader(init));

})(window);