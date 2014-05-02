$(function(){
    //分页相关
	var getUrlParam=function(name){
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]); return null;
    }
	var page=getUrlParam("page");
	if(page==null){
		page=1;
	}
	$("#pagination").pagination($(".middle-item").length,{
		current_page:page-1
	});
	//菜单栏相关
	$(".menu-item").click(function(){
		document.location.href=$(this).data("url");
	});
});