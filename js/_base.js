/*
 * base - 0001
 * create: 2014/7/18
 */

(function(window, undefined){

	var doc		= document,
		loc		= location,
		Fn		= function(){},
		WS		= window.WS || (window.WS = {}),
		base	= WS.base || (WS.base = {});

	/**
	 * 机顶盒编号
	 * @method base.tbId
	 * @since p53
	 * @type string
	 * @default 00000000000
	 */
	base.tbId	= window.guangxi ? guangxi.getStbNum() || guangxi.System.newwork.macAddress.replace(/:/g, '').replace(/No Card/g, '') || doc.all.ip.value : '00000000000';

	/**
	 * 机顶盒类型
	 * @method base.tbType
	 * @since p53
	 * @type string
	 * @default 0000
	 */
	base.tbType	= window.iPanel ? /(Safari)|(Chrome)|(Firefox)/.test(navigator.userAgent) ? base.tbId.length == 11 && base.tbId.substring(2, 4) == '19' ? '0002' : window.iPanel.getGlobalVar('RESOLUTION_1280_720') ? '0003' : '0002' : '0001' : '0000';

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
	 * 遍历数组
	 * @method base.each
	 * @since p67
	 * @param {array} arr 数组对象
	 * @param {function} fn 回调
	 * @return {none}
	 */
	base.each = function(arr, fn){
		for(var i = 0, len = arr.length; i < len; i++){
			(fn || Fn).call(arr[i], i);
		}
	};

	/**
	 * 帮助页跳转
	 * @since p67
	 */
	base.help	= '';
	doc.onkeydown = function(e){
		var e = e || event;
		switch(e.keyCode){
			case 48:
				loc.reload();
				break;

			case 401:
				WS.base.help && (location.href = WS.base.help);
				break;
				
			case 33:
				WS.base.prev && (location.href = WS.base.prev);
				break;

			case 34:
				WS.base.next && (location.href = WS.base.next);
				break;
			
		}
	};

/**************************** begin p62 **************************/;

	/**
	 * 表单提交事件
	 * @since p62
	 * @return {none}
	 */
	formSubmit = function (){
		doc.getElementById("J_k_form").submit();
	}
/**************************** end p62 **************************/
})(window);