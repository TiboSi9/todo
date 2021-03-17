$(document).ready(function(){
	msg();
});

//清空内容
function clear_msg(){
	$("#msg-content").empty();
}
function msg(){
	//生成0-5的随机数
	var num = parseInt(Math.random()*(4-0+1)+0,10);;
	
	var content = new Array();
	content[0] = 'Google：<a href = "https://www.google.com.hk/" target = "_blank">https://www.google.com.hk</a>';
	content[1] = 'Baidu：<a href = "https://www.baidu.com/" target = "_blank">https://www.baidu.com</a>';
	content[2] = 'Google：<a href = "https://www.google.com.hk/" target = "_blank">https://www.google.com.hk</a>';
	content[3] = 'Baidu：<a href = "https://www.baidu.com/" target = "_blank">https://www.baidu.com</a>';
	content[4] = 'Google：<a href = "https://www.google.com.hk/" target = "_blank">https://www.google.com.hk</a>';
	$("#msg-content").append(content[num]);
	window.setTimeout("clear_msg()",9800);
	window.setTimeout("msg()",10000);
}